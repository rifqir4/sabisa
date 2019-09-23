<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        // cekAksesModul();
        $this->load->model('Model_pengguna');
    }

	public function index()
	{
		$this->load->view('auth/login');
		// $this->template->load('template','auth/login');
    }

    public function cek_Login(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $loginUser = $this->Model_pengguna->getPenggunaLogin($username, $password);
        
        // print_r ($loginUser) ;
        // die () ;
    
        if ($loginUser==null){
            //gagal login
            redirect ('login');
        } else {
            $this->template->load('template','beranda');
            // $this->session->set_userdata('id_pengguna', $loginUser['id_pengguna']);
            $this->session->set_userdata($loginUser);
            redirect ('beranda');
        } 

    }

    function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
