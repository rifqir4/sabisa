<?php
class Model_pendataan extends CI_Model
{
    public $table ='t_pendataan' ;

    function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

        function submit()
        {
            $id_dosen_dpa = $this->input->post('dpa_hidden',TRUE);

            $data = array(
                'id_pengguna'       => $this->session->id_pengguna,  
                'validasi_DPA'      => 0,  
            );           
          
            $this->db->insert($this->table, $data);

            $Id_pendataan = $this->db->insert_id();  
            return  $Id_pendataan ;
            
        }

        function submit_pendataanmk($data){
            $this->db->insert('t_pendataanmk', $data);
            return 'berhasil';
        }
        
}
