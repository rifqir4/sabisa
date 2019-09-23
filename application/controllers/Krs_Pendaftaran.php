<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Krs_pendaftaran extends CI_Controller {

	public function index()
	{
		$this->template->load('template','pendaftaran/krspendaftaran');
	}
}
