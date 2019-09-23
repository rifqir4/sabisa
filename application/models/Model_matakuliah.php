<?php
class Model_matakuliah extends CI_Model
{
    public $table = 't_matakuliah';

    function save()
    {
        $data = array(
            'id_matakuliah'      => $this->input->post('id_matakuliah', TRUE),
            'nama_matakuliah'    => $this->input->post('nama_matakuliah', TRUE),
            'sks'                => $this->input->post('sks', TRUE),
        );
      
        $this->db->insert($this->table, $data);
    }

    function update()
    {
        $data = array(
            'id_matakuliah'      => $this->input->post('id_matakuliah', TRUE),
            'nama_matakuliah'    => $this->input->post('nama_matakuliah', TRUE),
            'sks'                => $this->input->post('sks', TRUE),
        );
        $id_matakuliah = $this->input->post('id_matakuliah');
        $this->db->where('id_matakuliah', $id_matakuliah);
        $this->db->update($this->table, $data);
    }
}
?>
