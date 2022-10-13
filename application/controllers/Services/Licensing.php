<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Licensing extends CI_Controller {
	public function __construct()
    {
        parent::__construct();        
        if (!$this->session->userdata('level_user')) {
            redirect('auth');
        } 

    }

	public function index()
	{	
		$data_pemohon = $this->QueryTalk->select('formulir_pemohon', ['user_id' => $this->session->userdata('id_user')])->result();
		$data = array(
			'title' => 'Sistem Informasi Industri Nasional',
			'data_pemohon' => $data_pemohon
		);

		$this->template->load('template_user/base', 'services/licensing/licensing', $data);
	}

	public function formulir_pemohon()
	{		
		$this->magic_validation->set($this->input->post());
		if ($this->magic_validation->run() == false) {
			$data = array(
				'title' => 'Sistem Informasi Industri Nasional'
			);
			$this->template->load('template_user/base', 'services/licensing/formulir_pemohon', $data);
		}else{
			$data = $this->input->post();
			$berkas_file = $_FILES;
                $file_upload = [];
                foreach ($berkas_file as $key => $value) {
                    $file = [
                        'label' => $key,
                        'path' => 'media',
                        'allowed_types' => 'png|jpg|jpeg|pdf'
                    ];
                    array_push($file_upload, $file);
                }
			$except = null;
			$excess = [
				'status' => 'diajukan',
				'user_id' => $this->session->userdata('id_user')
			];
			$result = $this->QueryTalk->insert('formulir_pemohon', $data, $except, $excess, $file_upload);
			if($result){
				$this->session->set_flashdata('success', 'Data permohonan berhasil dibuat');
				
			}else{
				$this->session->set_flashdata('error', 'Permohonan gagal dibuat, silakan ulangi lagi');
				
			}
			$insert_id = encode_id($this->db->insert_id());
			
			$url = base_url('services/licensing/list-produk') . "?ref=$insert_id";
			redirect($url);

		}
	}

	public function detail_permohonan()
	{		
		$id_permohonan = decode_id($this->input->get('ref'));
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
					$res = [
						'data' => $value
					];
					array_push($dump['data'], $value);
				}
			}
			array_push($data_history, $dump);
		}
		$data = array(
			'title' => 'Sistem Informasi Industri Nasional',
			'data_permohonan' => $this->QueryTalk->select('formulir_pemohon', ['id_formulir' => decode_id($this->input->get('ref'))])->row(),
			'data_lembaga' => $this->QueryTalk->select('lembaga', ['id_lembaga' => $this->session->userdata('id_lembaga')])->row(),
			'data_history' => $data_history,
			'data_produk' => $this->QueryTalk->select('formulir_produk', ['formulir_pemohon_id' => $id_permohonan])->result(),
		);
		
		$this->template->load('template_user/base', 'services/licensing/detail_permohonan', $data);
	}

	public function formulir_produk()
	{		
		$id_produk = decode_id($this->input->get('produk'));
		$id_permohonan = decode_id($this->input->get('ref'));
		if ($id_produk) {
			// update
			if ($id_produk != null) {
				$this->magic_validation->set($this->input->post());
				if ($this->magic_validation->run() == false) {
					$data = array(
						'title' => 'Sistem Informasi Industri Nasional',
						'id_permohonan' => $this->input->get('ref'),
						'data_produk' => $this->QueryTalk->select('formulir_produk', ['id_produk' => $id_produk])->row()
					);
					$this->template->load('template_user/base', 'services/licensing/update_produk', $data);
					
				}else{
					$data = $this->input->post();
					$data['formulir_pemohon_id'] = $id_permohonan;
					$berkas_file = $_FILES;
					$file_upload = [];
					if ($berkas_file['dokumen_spesifikasi']['size'] == 0 && $berkas_file['foto_mesin']['size'] == 0) {
						$file_upload = null;
					}else{
						foreach ($berkas_file as $key => $value) {
							$file = [
								'label' => $key,
								'path' => 'media',
								'allowed_types' => 'png|jpg|jpeg|pdf'
							];
							array_push($file_upload, $file);
						}
					}
					$except = null;
					$excess = null;
					$where = ['id_produk' => $id_produk];
					$result = $this->QueryTalk->update('formulir_produk', $where, $data, $except, $excess, $file_upload);
					if($result){
						$this->session->set_flashdata('success', 'Data produk berhasil diupdate');
						
					}else{
						$this->session->set_flashdata('error', 'Data produk gagal diupdate, silakan ulangi lagi');
						
					}
					$insert_id = $this->input->get('ref');
					$url = base_url('services/licensing/list-produk') . "?ref=$insert_id";
					redirect($url);
				}
					
			}else{
				echo 'Invalid request';
			}
		}else{
			// 'insert'
			if ($id_permohonan != null) {
				$this->magic_validation->set($this->input->post());
				if ($this->magic_validation->run() == false) {
					$data = array(
						'title' => 'Sistem Informasi Industri Nasional',
						'id_permohonan' => $this->input->get('ref')
					);
					$this->template->load('template_user/base', 'services/licensing/formulir_produk', $data);
					
				}else{
					$data = $this->input->post();
					$data['formulir_pemohon_id'] = $id_permohonan;
					$berkas_file = $_FILES;
						$file_upload = [];
						foreach ($berkas_file as $key => $value) {
							$file = [
								'label' => $key,
								'path' => 'media',
								'allowed_types' => 'png|jpg|jpeg|pdf'
							];
							array_push($file_upload, $file);
						}
					$except = null;
					$excess = null;
					$this->QueryTalk->insert('formulir_produk', $data, $except, $excess, $file_upload);
					$insert_id = $this->input->get('ref');
					$url = base_url('services/licensing/list-produk') . "?ref=$insert_id";
					$this->session->set_flashdata('success', 'Data produk berhasil dibuat');
					redirect($url);
				}
					
			}else{
				echo 'Invalid request';
			}
		}
	}

	public function list_produk()
	{		
		$id_ref = $this->input->get('ref');
		if (decode_id($id_ref)){
			$id_permohonan = decode_id($id_ref);
			
			$data = array(
				'title' => 'Sistem Informasi Industri Nasional',
				'data_produk' => $this->QueryTalk->select('formulir_produk', ['formulir_pemohon_id' => $id_permohonan])->result(),
				'data_permohonan' => $this->QueryTalk->select('formulir_pemohon', ['id_formulir' => $id_permohonan])->row()
			);
			$this->template->load('template_user/base', 'services/licensing/list_produk', $data);
		}else{
			echo "invalid request";
		}
	}

	public function detail_produk()
	{		
		$id_produk = decode_id($this->input->get('produk'));
		if ($id_produk != null) {
			$data = array(
				'title' => 'Sistem Informasi Industri Nasional',
				'data_produk' => $this->QueryTalk->select('formulir_produk', ['id_produk' => $id_produk])->row()
			);
		
			$this->template->load('template_user/base', 'services/licensing/detail_produk', $data);

		}else{
			echo 'Invalid request';
		}

		
	}

	public function delete_produk()
	{		
		$id_produk = decode_id($this->input->get('produk'));
		$id_permohonan = $this->input->get('ref');
		$result = $this->QueryTalk->delete('formulir_produk', ['id_produk' => $id_produk]);
		if($result){
			$this->session->set_flashdata('success', 'Data produk berhasil dihapus');
			
		}else{
			$this->session->set_flashdata('error', 'Data produk gagal dihapus, silakan ulangi lagi');
			
		}
		$url = base_url('services/licensing/list-produk') . "?ref=$id_permohonan";
		redirect($url);

		
	}

	

	public function surat_rekomendasi()
	{
		$id_permohonan = decode_id($this->input->get('ref'));
		$data_permohonan = $this->QueryTalk->select('formulir_pemohon', ['id_formulir' => $id_permohonan])->row();
		if($data_permohonan->acc_dirjen){
			$data_produk = $this->QueryTalk->select('formulir_produk', ['formulir_pemohon_id' => $id_permohonan, 'status' => 'Disetujui'])->result();
			$data_user = $this->QueryTalk->select('users', ['id_user' => $data_permohonan->user_id])->row();
			$data_lembaga = $this->QueryTalk->select('lembaga', ['id_lembaga' => $data_user->id_lembaga])->row();
			$nilai_mesin = 0;
			$jumlah_produk = 0;
			$harga_produk = 0;
			$umur_teknis_mesin = 0;
			$jumlah_tenaga_kerja = 0;

			foreach ($data_produk as $key => $value) {
				$nilai_mesin += $value->nilai_mesin;
				$jumlah_produk += $value->jumlah_produk_sesudah	;
				$harga_produk += $value->nilai_produk_sesudah;
				$umur_teknis_mesin += $value->umur_teknis_mesin;
				$jumlah_tenaga_kerja += $value->penyerapan_tenaga_kerja;
			}

			$nilai_bea_masuk = $nilai_mesin * (5/100);
			$kontribusi_ppn = $jumlah_produk * $harga_produk * $umur_teknis_mesin * (11/100);
			


			$data = [
				'data_permohonan' => $data_permohonan,
				'data_produk' => $data_produk,
				'data_lembaga' => $data_lembaga,
				'data_user' => $data_user,
				'nilai_mesin' => $nilai_mesin,
				'jumlah_tenaga_kerja' => $jumlah_tenaga_kerja,
				'nilai_bea_masuk' => $nilai_bea_masuk,
				'kontribusi_ppn' => $kontribusi_ppn

			];  
			// return $this->load->view('services/licensing/lampiran_surat_rekomendasi', $data);      
			$mpdf = new \Mpdf\Mpdf();
			$data = $this->load->view('services/licensing/surat_rekomendasi', $data, TRUE);        
			$lampiran = $this->load->view('services/licensing/lampiran_surat_rekomendasi', $data, TRUE);
			$mpdf->debug = true;
			
			$mpdf->WriteHTML($data);
			$mpdf->AddPage('L');
			$mpdf->WriteHTML($lampiran);
			$mpdf->Output('Surat Rekomendasi.pdf', 'I');    

		}else{
			echo "Access Denied";
		}

	}


	
}
