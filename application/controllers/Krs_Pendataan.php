<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Krs_pendataan extends CI_Controller {

	public function index()
	{
		$this->template->load('template','pendataan/krspendataan');
	}
}
