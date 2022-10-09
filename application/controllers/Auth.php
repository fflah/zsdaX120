<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        if($this->session->userdata('username')){
            redirect('dashboard');
        }    
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';            
            $this->load->view('auth/login', $data);
       
        }else{
            $this->_login();
        }
        
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['username' => $username])->row_array();
        //jika user ada
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'nama_user' => $user['nama_user'],
                    'id_user' => $user['id_user'],
                    'level_user' => $user['level_user'],
                    'id_lembaga' => $user['id_lembaga'],
                ];

                $this->session->set_userdata($data);
                if ($user['level_user'] == 'pemohon') {
                    redirect('dashboard');
                }else{
                    redirect('dashboard-admin');
                }
            } else {
                $this->session->set_flashdata('message','<div style="margin: 0 95px 0 95px;" id="notif" class="alert alert-danger" role="alert">Password salah</div>');
                redirect('auth');
            }


        }else {            
            $this->session->set_flashdata('message','<div style="margin: 0 95px 0 95px;" id="notif" class="alert alert-danger" role="alert">Username atau password yang anda masukan salah</div>');
            redirect('auth');
        }
    }


    public function register()
    {
        $excess = [
            'id_group_user' => 3,
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),

        ];
        print_r($excess);
        $this->magic_validation->set($this->input->post());
        if ($this->magic_validation->run() == false) {
            $data['title'] = 'Arsip Surat | Registrasi';
            $this->load->view('auth/register', $data);
        }else {
            $data = $this->input->post();
            $except = array('password_konfirmasi');
            die;

            // $this->QueryTalk->insert('user', $data, $except, $excess);
            // $this->session->set_flashdata('message','<div id="notif" class="alert alert-success" role="alert">Registrasi berhasil, silakan login</div>');
            redirect('login');
        }
        
    }

    public function logout()
    { 
        $data = ['username', 'nama_user', 'id_user', 'level_user', 'id_lembaga'];
        foreach($data as $value){
            $this->session->unset_userdata($value);
        }        
        $this->session->set_flashdata('message','<div style="margin: 0 95px 0 95px;" id="notif" class="alert alert-success" role="alert">Anda berhasil Logout</div>');
        redirect('auth');
    }

}