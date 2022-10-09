<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
    {
        parent::__construct();        
        if (!$this->session->userdata('level_user')) {
            redirect('auth');
        } 

    }

	public function index()
	{		
		$id_lembaga = $this->session->userdata('id_lembaga');
		$data = array(
			'title' => 'Sistem Informasi Industri Nasional',
			'perusahaan' => $this->QueryTalk->select('lembaga', ['id_lembaga' => $id_lembaga])->row()
		);
		$this->template->load('template_user/base', 'dashboard/index', $data);
	}
	
	public function dashboard_admin()
	{		
		$id_lembaga = $this->session->userdata('id_lembaga');

		$data_grafik = [];
		$mounts = array(1,2,3,4,5,6,7,8,9,10,11,12);
		foreach($mounts as $mount){			
			$filter = [
				"DATE_FORMAT(date_created,'%m')" => $mount				
			];
			$data_permohonan = $this->QueryTalk->select('formulir_pemohon', $filter, $setjoin=null)->num_rows();			
			array_push($data_grafik, $data_permohonan);
					
		}
		
		$data = array(
			'title' => 'Sistem Informasi Industri Nasional',
			'perusahaan' => $this->QueryTalk->select('lembaga', ['id_lembaga' => $id_lembaga])->row(),
			'semua_permohonan' => $this->QueryTalk->select('formulir_pemohon')->num_rows(),
			'permohonan_diajukan' => $this->QueryTalk->select('formulir_pemohon', ['status' => 'diajukan'])->num_rows(),
			'permohonan_diproses' => $this->QueryTalk->select('formulir_pemohon', ['status' => 'diproses'])->num_rows(),
			'permohonan_selesai' => $this->QueryTalk->select('formulir_pemohon', ['status' => 'selesai'])->num_rows(),
			'data_grafik' => $data_grafik
		);
		$this->template->load('template/base', 'dashboard/dashboard_admin', $data);
	}
}
