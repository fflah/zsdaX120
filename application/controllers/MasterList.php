<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterList extends CI_Controller {
	public function __construct()
    {
        parent::__construct();        
        if (!$this->session->userdata('level_user')) {
            redirect('auth');
        } 

    }

	public function daftar_permohonan()
	{		
		$data = array(
			'title' => 'Daftar Permohonan',
			'data_permohonan' => $this->QueryTalk->select('formulir_pemohon')->result(),
		);
		$this->template->load('template/base', 'master_list/daftar_permohonan', $data);
	}
	
	public function status_proses()
	{		
		$data = array(
			'title' => 'Status Proses',
			'data_permohonan' => $this->QueryTalk->select('formulir_pemohon', ['status' => 'diproses'])->result(),
		);
		$this->template->load('template/base', 'master_list/status_proses', $data);
	}
	
	public function terbit()
	{		
		$data = array(
			'title' => 'Sudah Terbit',
			'data_permohonan' => $this->QueryTalk->select('formulir_pemohon', ['status' => 'selesai'])->result(),

		);
		$this->template->load('template/base', 'master_list/terbit', $data);
	}
	
	public function detail_permohonan()
	{		
		$id_permohonan = decode_id($this->input->get('ref'));
		$data_permohonan = $this->QueryTalk->select('formulir_pemohon', ['id_formulir' => decode_id($this->input->get('ref'))])->row();
		$id_lembaga = $this->QueryTalk->select('users', ['id_user' => $data_permohonan->user_id])->row()->id_lembaga;
		$group_disposisi = null;
		$level_user = $this->session->userdata('level_user');
		if ($level_user == 'dirjen') {
			// user direktur
			$group_disposisi = $this->QueryTalk->select('users', ['level_user' => 'direktur'], $setjoin=null, $select_column=['id_user', 'nama_user'])->result();
			
		}else if ($level_user == 'direktur') {
			// user koordinator
			$group_disposisi = $this->QueryTalk->select('users', ['level_user' => 'koordinator'], $setjoin=null, $select_column=['id_user', 'nama_user'])->result();
			
		}else if ($level_user == 'koordinator') {
			// user sub koordinator
			$group_disposisi = $this->QueryTalk->select('users', ['level_user' => 'sub_koordinator'], $setjoin=null, $select_column=['id_user', 'nama_user'])->result();
			
		}else{

		}

		// data history
		$payload_join = [
            [
                'table_name' => 'users',
                'bridge' => ['users.id_user=tr_move_state.actor']
            ],
        ];
		$history = $this->QueryTalk->select('tr_move_state', ['formulir_pemohon_id' => $id_permohonan], $payload_join)->result();
		$data_tgl = [];
		foreach ($history as $key => $value) {
			$old_date = date($value->date_move);
			$old_date_timestamp = strtotime($old_date);
			$new_date = date('Y-m-d', $old_date_timestamp);  
			if (!in_array($new_date, $data_tgl)) {
				array_push($data_tgl, $new_date);
			}
		}

		$data_history = [];
		foreach ($data_tgl as $key => $tgl_unik) {
			
			$dump = [
				'tanggal' => date('d F Y', strtotime($tgl_unik)),
				'data' => []
			];
			foreach ($history as $key => $value) {
				$old_date = date($value->date_move);
				$old_date_timestamp = strtotime($old_date);
				$new_date = date('Y-m-d', $old_date_timestamp);  
				$jam = date('H:i', $old_date_timestamp);   
				$value->jam = $jam;
				if ($tgl_unik == $new_date) {
					
					
					array_push($dump['data'], $value);
				}
			}
			
			usort($dump['data'], function($a, $b) {
				return $a->date_move >= $b->date_move;
			});
			array_push($data_history, $dump);
		}
		
		// cek state access
		$access_to_action = false;
		if ($this->session->userdata('level_user') == $data_permohonan->state_access){
			$access_to_action = true;
		}
		
		$data = array(
			'title' => 'Sistem Informasi Industri Nasional',
			'data_permohonan' => $data_permohonan,
			'data_lembaga' => $this->QueryTalk->select('lembaga', ['id_lembaga' => $id_lembaga])->row(),
			'data_history' => $data_history,
			'data_produk' => $this->QueryTalk->select('formulir_produk', ['formulir_pemohon_id' => $id_permohonan])->result(),
			'group_disposisi' => $group_disposisi,
			'access_to_action' => $access_to_action,
			'sub_koordinator_access' => $data_permohonan->state_access,
			'acc_dirjen' =>$data_permohonan->acc_dirjen,
			'step_lapor_atasan' => $data_permohonan->step_lapor_atasan,
			'is_done' => $data_permohonan->state_access,
		);
		$this->template->load('template/base', 'master_list/detail_permohonan', $data);
	}

	public function disposisi()
	{		
		$id_permohonan = decode_id($this->input->post('ref'));
		$data = array(
			'formulir_pemohon_id' => $id_permohonan,
			'actor' => $this->session->userdata('id_user'),
			'note' => $this->input->post('note'),
			'disposisi' => $this->input->post('disposisi')
		);
		
		//  insert ke data history
		$this->QueryTalk->insert('tr_move_state', $data);
		
		// update state access
		$id_disposisi = $this->input->post('disposisi');
		$data_update = null;
		if($id_disposisi){
			$level_user = $this->QueryTalk->select('users', ['id_user' => $id_disposisi])->row()->level_user;
			$data_update = ['state_access' => $level_user, 'status' => 'diproses'];
			if($level_user == 'sub_koordinator'){
				$data_update['step_lapor_atasan'] = true;

			}
			

		}else{
			$session_level_user = $this->session->userdata('level_user');
			if ($session_level_user == 'sub_koordinator') {
				$data_update = ['state_access' => 'koordinator'];
			}else if($session_level_user == 'koordinator'){
				$data_update = ['state_access' => 'direktur'];
			}else if($session_level_user == 'direktur'){
				$data_update = ['state_access' => 'dirjen', 'acc_dirjen' => 'pending'];
			}else if($session_level_user == 'dirjen'){
				$acc_dirjen = $this->input->post('acc_dirjen');
				if ($acc_dirjen == true) {
					$data_update = ['state_access' => 'done', 'acc_dirjen' => $acc_dirjen, 'status' => 'selesai'];
				}else{
					$data_update = ['state_access' => 'dirjen', 'acc_dirjen' => $acc_dirjen, 'status' => 'selesai'];
				}

			}
		}

		$this->QueryTalk->update(
			$table = 'formulir_pemohon', 
			$where = ['id_formulir' => $id_permohonan],
			$data = $data_update, 
			$except = null, 
			$excess = null, 
			$file_upload = null);

		$url = base_url('master-list/detail-permohonan?ref=').encode_id($id_permohonan);
		
		$this->session->set_flashdata('success', 'Disposisi/ Catatan berhasil dibuat');

		redirect($url);
	}
}
