<?php
class Model_timeline extends CI_Model
{
    public $table = 't_timeline';

    function save()
    {
        $data = array(
            // 'id_timeline'      => $this->input->post('id_timeline', TRUE),
            'nama_timeline'    => $this->input->post('nama_timeline', TRUE),
            'tanggal_mulai'    => $this->input->post('tanggal_mulai', TRUE),
            'tanggal_selese'   => $this->input->post('tanggal_selese', TRUE),
        );
      
        $this->db->insert($this->table, $data);
    }

    function update()
    {
        $data = array(
            // 'id_timeline'      => $this->input->post('id_timeline', TRUE),
            'nama_timeline'    => $this->input->post('nama_timeline', TRUE),
            'tanggal_mulai'    => $this->input->post('tanggal_mulai', TRUE),
            'tanggal_selese'   => $this->input->post('tanggal_selese', TRUE),
        );
        $id_timeline = $this->input->post('id_timeline');
        $this->db->where('id_timeline', $id_timeline);
        $this->db->update($this->table, $data);
    }
}
?>
