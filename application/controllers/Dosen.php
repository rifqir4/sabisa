 <?php 

    class Dosen extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
            $this->load->library('ssp');
            $this->load->model('Model_dosen');
        }

        function data()
        {
            //nama tabel
            $table = 't_dosen';
            //nama PK
            $primaryKey = 'nomor_induk';
            //list field
            $columns = array(
                array('db' => 'nomor_induk', 'dt' => 'nomor_induk'),
                array('db' => 'nama_dosen', 'dt' => 'nama_dosen'),
                array(
                    'db' => 'nomor_induk',
                    'dt' => 'aksi',
                    'formatter' => function ($d) {
                        //return "<a href='edit.php?id=$d'>EDIT</a>";
                        return anchor('dosen/edit/' . $d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"') .
                            '  ' . anchor('dosen/delete/' . $d, '<i class="fa fa-trash"></i>', 'class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
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
            $this->template->load('template', 'dosen/list');
        }

        function add()
        {
            if (isset($_POST['submit'])) {
                $this->Model_dosen->save();
                redirect('dosen');
            } else {
                $this->template->load('template', 'dosen/add');
            }
        }

        function edit()
        {
            if (isset($_POST['submit'])) {
                $this->Model_dosen->update();
                redirect('dosen');
            } else {
                $nomor_induk     = $this->uri->segment(3);
                $data['dosen']   = $this->db->get_where('t_dosen', array('nomor_induk' => $nomor_induk))->row_array();
                $this->template->load('template', 'dosen/edit', $data);
            };
        }

        function delete()
        {   
            $nomor_induk = $this->uri->segment(3);
            if (!empty($nomor_induk)) {
                //proses delete data
                $this->db->where('nomor_induk',$nomor_induk);
                $this->db->delete('t_dosen');
            }
            redirect('dosen'); 
        }
    }
