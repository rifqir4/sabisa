 <?php 

    class Timeline extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
            $this->load->library('ssp');
            $this->load->model('Model_timeline');
        }

        function data()
        {
            //nama tabel
            $table = 't_timeline';
            //nama PK
            $primaryKey = 'id_timeline';
            //list field
            $columns = array(
                array('db' => 'id_timeline', 'dt' => 'id_timeline'),
                array('db' => 'nama_timeline', 'dt' => 'nama_timeline'),
                array('db' => 'tanggal_mulai', 'dt' => 'tanggal_mulai'),
                array('db' => 'tanggal_selese', 'dt'=> 'tanggal_selese'),
                array(
                    'db' => 'id_timeline',
                    'dt' => 'aksi',
                    'formatter' => function ($d) {
                        //return "<a href='edit.php?id=$d'>EDIT</a>";
                        return anchor('timeline/edit/' . $d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"') .
                            '  ' . anchor('timeline/delete/' . $d, '<i class="fa fa-trash"></i>', 'class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
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
            $this->template->load('template', 'timeline/list');
        }

        function add()
        {
            if (isset($_POST['submit'])) {
                $this->Model_timeline->save();
                redirect('timeline');
            } else {
                $this->template->load('template', 'timeline/add');
            }
        }

        function edit()
        {
            if (isset($_POST['submit'])) {
                $this->Model_timeline->update();
                redirect('timeline');
            } else {
                $id_timeline        = $this->uri->segment(3);
                $data['timeline']   = $this->db->get_where('t_timeline', array('id_timeline' => $id_timeline))->row_array();
                $this->template->load('template', 'timeline/edit', $data);
            };
        }

        function delete()
        {   
            $id_timeline = $this->uri->segment(3);
            if (!empty($id_timeline)) {
                //proses delete data
                $this->db->where('id_timeline',$id_timeline);
                $this->db->delete('t_timeline');
            }
            redirect('timeline'); 
        }
    }
