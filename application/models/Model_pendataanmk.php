<?php
class Model_pendataanmk extends CI_Model
{
    public $table = 't_pendataanmk';

    function __construct()
        {
            parent::__construct();
            $this->load->model('Model_pendataan');
            $this->load->model('Model_matakuliah');
        }

    function submit($id_pendataan)
    {

        $id_MK = $this->input->post('formID_MK[]', TRUE);
        $rb_keterangan = $this->input->post('rb_keterangan[]',TRUE);
        
        $i ;
        $length = count($id_MK);
        
        for ($i = 0; $i < $length; $i++){
            
            $data = array(
                'id_pendataan '    => $id_pendataan,
                'id_matakuliah'    => $id_MK[$i],
                'keterangan'       => $rb_keterangan[$i],    
            );

            $this->db->insert($this->table, $data);
            
        }

       
        // print_r($this->input->post('id_matakuliah[]', TRUE));
      
       
    }
}
?>

<!-- nambahin data di table pendataan -->
<!-- baru nambahin tabel mkpendataan -->
