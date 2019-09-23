<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormPendataan extends CI_Controller {

    function __construct() {
        
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Model_mahasiswa');
        $this->load->model('Model_pengguna');
        $this->load->model('Model_dosen');
        $this->load->model('Model_pendataan');
        $this->load->model('Model_pendataanmk');
    }

	public function index()
	{
        $id_pengguna      = $this->session->userdata('id_pengguna');
        $loginMahasiswa   = $this->Model_mahasiswa->getMahasiswaLogin ($id_pengguna);
        $loginPengguna    = $this->Model_pengguna->getPenggunaLoginById ($id_pengguna) ;
        $dosen_pa         = $this->Model_dosen->getDosenPA ();
        
        // $prodi         = $this->Model_mahasiswa->getProdi();

        // print_r ($dosen_pa) ;
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

        $data = array(                             // [] kolom ikut db
            'nama_mahasiswa'    => $loginMahasiswa ['nama_mahasiswa'],
            'username'          => $loginPengguna ['username'],
            'program_studi'     => $loginMahasiswa ['id_prodi'],
            'email'             => $loginPengguna  ['email'],
            'dosen_pa'          => $dataDosen

        );
        $this->template->load('template','pendataan/formpendataan',$data);
    }

    public function submit()
    {

            $formID_MK      = $this->input->post('formID_MK');
    
            $id_matakuliah  = $this->input->post('id_matakuliah');
            $keterangan     = $this->input->post('rb_keterangan');
        
            $id_pendataan   = $this->Model_pendataan->submit();
            
            for($i=0; $i < count($id_matakuliah); $i++){
                
                $data = array(
                    'id_matakuliah' => $id_matakuliah[$i],
                    'keterangan' => $keterangan[$i],
                    'id_pendataan' => $id_pendataan,
                );
                $this->Model_pendataan->submit_pendataanmk($data);
                
            }
            redirect(base_url()."index.php/formpendataan/");
            // print_r ($this->input->post('dpa_hidden'));


    }

    public function cetakPendataan ()
    {
        $mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('pendataan/cetakpendataan',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
         
    }

    public function cetakDataPendataan ()
    {
        $mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('pendataan/cetakdatapendataan',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
         
    }
}

?>