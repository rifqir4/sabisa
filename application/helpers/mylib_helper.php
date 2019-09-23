<?php

    function cmb_dinamis($name, $table, $field, $pk, $selected = null, $extra = null) {
        $ci = & get_instance();
        $cmb = "<select name='$name' class='form-control' $extra>";
        $data = $ci->db->get($table)->result();
        foreach ($data as $row) {
            $cmb .="<option value='" . $row->$pk . "'";
            $cmb .= $selected == $row->$pk ? 'selected' : '';
            $cmb .=">" . $row->$field . "</option>";
        }
        $cmb .= "</select>";
        return $cmb;
    }

    function cekAksesModul() {
        $ci = & get_instance();
        // ambil parameter uri segment untuk controller dan method
        $controller = $ci->uri->segment(1);
        $method     = $ci->uri->segment(2);
    
        // cek url
        if (empty($method)) {
            $url = $controller;
        } else { 
            $url = $controller . '/' . $method;
        }
    
        // cek id menu nya
        $menu   = $ci->db->get_where('tabel_menu', array('link' => $url))->row_array();
        $peran  = $ci->session->userdata('id_peran');
    
        if (!empty($peran)) {
            // cek apakah peran ini diberikan hak akses atau tidak
            $cek = $ci->db->get_where('t_pengguna_rule', array('id_peran' => $peran, 'id_menu' => $menu['id']));
            if ($cek->num_rows() < 1 and $method != 'data' and $method != 'add' and $method != 'edit' and $method != 'delete') {
                echo "ANDA TIDAK BOLEH MENGAKSES MODUL INI";
                die;
            }
        } else {
            redirect('auth');
        }    
    }
?>