<?php
class Model_dosen extends CI_Model
{
    public $table = 't_dosen';

    function getDosenPA ()
    {
        // '' dari db kolom db
        $this->db->where('is_dosen_pa',1);
        //kembalian datanya object
        $dosen = $this->db->get('t_dosen');
        return $dosen;
    }
    function save()
    {
        $data = array(
            'nomor_induk'    => $this->input->post('nomor_induk', TRUE),
            'nama_dosen'     => $this->input->post('nama_dosen', TRUE),
        );
      
        $this->db->insert($this->table, $data);
    }

    function update()
    {
        $data = array(
            'nomor_induk'    => $this->input->post('nomor_induk', TRUE),
            'nama_dosen'    => $this->input->post('nama_dosen', TRUE),
        );
        $nomor_induk = $this->input->post('nomor_induk');
        $this->db->where('nomor_induk', $nomor_induk);
        $this->db->update($this->table, $data);
    }
}
?>
