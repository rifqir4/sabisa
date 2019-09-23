<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formpendaftaran extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Model_mahasiswa');
        $this->load->model('Model_pengguna');
        $this->load->model('Model_dosen');
    }

	public function index()
	{
        $id_pengguna = $this->session->userdata('id_pengguna');
        $loginMahasiswa   = $this->Model_mahasiswa->getMahasiswaLogin ($id_pengguna);
        $loginPengguna    = $this->Model_pengguna->getPenggunaLoginById ($id_pengguna) ;
        $dosen_pa         = $this->Model_dosen->getDosenPA ();
        // print_r ($dosen_pa) ;
        // print_r ($loginPengguna) ;
        // print_r ($loginMahasiswa) ;
        
        //nunjukkin index
        $i = 0;

        //result mendapatkan semua data dari hasil query
        foreach ($dosen_pa->result() as $row) {
            //ngambil nilai atribut dari object, dimasukkan ke array
            $dataDosen[$i]['id_dosen'] = $row->id_dosen;
            $dataDosen[$i]['nama_dosen'] = $row->nama_dosen;
            $i++;
        }
        // print_r($dataDosen);

        $data = array(
            'nama_mahasiswa'    => $loginMahasiswa ['nama_mahasiswa'],
            'username'          => $loginPengguna ['username'],
                // [] kolom ikut db
            'program_studi'     => $loginMahasiswa ['id_prodi'],
            'email'             => $loginPengguna  ['email'],
            'dosen_pa'          => $dataDosen

        );
        $this->template->load('template','pendaftaran/formpendaftaran',$data);
    }

    public function cetakpendaftaran ()
    {
        $mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('pendaftaran/cetakpendaftaran',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
         
    }

}

?>