<?php
class Model_pendaftaran extends CI_Model
{
        function getPenggunaLogin($username,$password){
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $user = $this->db->get('t_pengguna')->row_array();
            return $user;
        }
}
