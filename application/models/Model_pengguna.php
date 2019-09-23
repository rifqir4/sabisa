<?php
class Model_pengguna extends CI_Model
{
        public $table = 't_pengguna' ;

        function getPenggunaLogin($username,$password){
            $this->db->where('username',$username);
            $this->db->where('password', md5($password));
            $user = $this->db->get('t_pengguna')->row_array();
            return $user;
        }

        function getPenggunaLoginByID ($id_pengguna) {
            $this->db->where ('id_pengguna',$id_pengguna);
            $user = $this->db->get('t_pengguna')->row_array();
            return $user;
        } 

        function save($foto)
        {
            $data = array(
                // 'id_pengguna'  => $this->input->post('id_pengguna', TRUE),
                'nama_pengguna'   => $this->input->post('nama_pengguna', TRUE),
                'id_peran'        => $this->input->post('id_peran',TRUE),
                'username'        => $this->input->post('username', TRUE),
                'password'        => md5($this->input->post('password', TRUE)),
                'alamat_rumah'    => $this->input->post('alamat_rumah',TRUE),
                'email'           => $this->input->post('email',TRUE),
                'no_hp'           => $this->input->post('no_hp',TRUE),
                'foto'            => $foto
            );
            $this->db->insert($this->table, $data);
        }
    
        function update($foto) {
            
            if(empty($foto)){
                // jangan update field foto
            $data = array(
                'nama_pengguna'   => $this->input->post('nama_pengguna', TRUE),
                'id_peran'        => $this->input->post('id_peran',TRUE),
                'username'        => $this->input->post('username', TRUE),
                'password'        => md5($this->input->post('password', TRUE)),
                'alamat_rumah'    => $this->input->post('alamat_rumah',TRUE),
                'email'           => $this->input->post('email',TRUE),
                'no_hp'           => $this->input->post('no_hp',TRUE),
            );
            }else{
                // update field foto
            $data = array(
                'nama_pengguna'   => $this->input->post('nama_pengguna', TRUE),
                'id_peran'        => $this->input->post('id_peran',TRUE),
                'username'        => $this->input->post('username', TRUE),
                'password'        => md5($this->input->post('password', TRUE)),
                'alamat_rumah'    => $this->input->post('alamat_rumah',TRUE),
                'email'           => $this->input->post('email',TRUE),
                'no_hp'           => $this->input->post('no_hp',TRUE),
                'foto'            => $foto
            );
            }
            $id_pengguna   = $this->input->post('id_pengguna');
            $this->db->where('id_pengguna',$id_pengguna);
            $this->db->update($this->table,$data);
        }
}
