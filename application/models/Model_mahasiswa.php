<?php
class Model_mahasiswa extends CI_Model
{
        function getMahasiswaLogin ($id_pengguna){
            $this->db->where('id_pengguna',$id_pengguna);
            $mahasiswa = $this->db->get('t_mahasiswa')->row_array();
            return $mahasiswa;
        }
}
