<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_pembayaran extends CI_Controller {

	public function index()
	{
		//$this->load->view('template');
		$this->template->load('template','pendaftaran/daftarpembayaran');
	}
}
