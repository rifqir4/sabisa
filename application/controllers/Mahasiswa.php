 <!-- BELAJAR CODEPOLITAN -->
 <?php
    class Mahasiswa extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
            $this->load->library('ssp');
            $this->load->model('Model_mahasiswa');
        }

        function data()
        {
            //nama tabel
            $table = 'tbl_mahasiswa';
            //nama PK
            $primaryKey = 'nim';
            //list field
            $columns = array(
                array(
                    'db' => 'foto', 'dt' => 'foto',
                    'formatter' => function ($d) {
                        if (empty($d)) {
                            return "<img width='30px' src='" .  base_url() . "/uploads/user-siluet.jpg'>";
                        } else {
                            return "<img width='20px' src='" .  base_url() . "/uploads/" . $d . "'>";
                        }
                    }
                ),
                array('db' => 'nim', 'dt' => 'nim'),
                array('db' => 'nama_mahasiswa', 'dt' => 'nama_mahasiswa'),
                array('db' => 'alamat_mahasiswa', 'dt' => 'alamat_mahasiswa'),
                array('db' => 'email_mahasiswa', 'dt' => 'email_mahasiswa'),
                array('db' => 'no_telp', 'dt' => 'no_telp'),
                array('db' => 'no_hp', 'dt' => 'no_hp'),
                array('db' => 'id_jurusan', 'dt' => 'id_jurusan'),
                array('db' => 'id_prodi', 'dt' => 'id_prodi'),
                array(
                    'db' => 'nim',
                    'dt' => 'aksi',
                    'formatter' => function ($d) {
                        //return "<a href='edit.php?id=$d'>EDIT</a>";
                        return anchor('mahasiswa/edit/' . $d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"') .
                            '  ' . anchor('mahasiswa/delete/' . $d, '<i class="fa fa-trash"></i>', 'class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
                    }
                )
            );
            $sql_details = array(
                'user' => $this->db->username,
                'pass' => $this->db->password,
                'db' => $this->db->database,
                'host' => $this->db->hostname
            );

            echo json_encode(
                SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
            );
        }

        function index()
        {
            $this->template->load('template', 'mahasiswa/list');
        }

        function add()
        {
            if (isset($_POST['submit'])) {
                $this->Model_mahasiswa->save();
                redirect('mahasiswa');
            } else {
                $this->template->load('template', 'mahasiswa/add');
            }
        }

        function edit()
        {
            if (isset($_POST['submit'])) {
                $this->Model_mahasiswa->update();
                redirect('mahasiswa');
            } else {
                $nim                 = $this->uri->segment(3);
                $data['mahasiswa']   = $this->db->get_where('tbl_mahasiswa', array('nim' => $nim))->row_array();
                $this->template->load('template', 'mahasiswa/edit', $data);
            };
        }

        function delete()
        {   
            $nim = $this->uri->segment(3);
            if (!empty($nim)) {
                //proses delete data
                $this->db->where('nim',$nim);
                $this->db->delete('tbl_mahasiswa');
            }
            redirect('mahasiswa'); 
        }
    }
?>