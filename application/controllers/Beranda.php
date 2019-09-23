<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Beranda extends CI_Controller {

	function construct(){
		parent::_construct(); 
		// cekAksesModul();
	}

	public function index()
	{
		//$this->load->view('template');
		$this->template->load('template','beranda');
	}
}
