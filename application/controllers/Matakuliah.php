 <?php 

    class matakuliah extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
            $this->load->library('ssp');
            $this->load->model('Model_matakuliah');
        }

        function data()
        {
            //nama tabel
            $table = 't_matakuliah';
            //nama PK
            $primaryKey = 'id_matakuliah';
            //list field
            $columns = array(
                array('db' => 'id_matakuliah', 'dt' => 'id_matakuliah'),
                array('db' => 'nama_matakuliah', 'dt' => 'nama_matakuliah'),
                array('db' => 'sks', 'dt' => 'sks'),
                array(
                    'db' => 'id_matakuliah',
                    'dt' => 'aksi',
                    'formatter' => function ($d) {
                        //return "<a href='edit.php?id=$d'>EDIT</a>";
                        return anchor('matakuliah/edit/' . $d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"') .
                            '  ' . anchor('matakuliah/delete/' . $d, '<i class="fa fa-trash"></i>', 'class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
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

        function dataPendataan()
        {
            //nama tabel
            $table = 't_matakuliah';
            //nama PK
            $primaryKey = 'id_matakuliah';
            //list field
            $columns = array(
                array('db' => 'id_matakuliah', 'dt' => 'id_matakuliah'),
                array('db' => 'nama_matakuliah', 'dt' => 'nama_matakuliah'),
                array('db' => 'sks', 'dt' => 'sks'),
                array(
                    'db' => 'id_matakuliah',
                    'dt' => 'aksi',
                    'formatter' => function ($d) {
                        //return "<a href='edit.php?id=$d'>EDIT</a>";
                        return '<button onclick="PilihMatkul(\''. $d .'\')" name="pilih" data-placement="top" class="btn btn-success">PILIH</button>';
                    }
                ),
                array(
                    'db' => 'id_matakuliah',
                    'dt' => 'keterangan',
                    'formatter' => function ($d) {
                        //return "<a href='edit.php?id=$d'>EDIT</a>";
                          return '<label><input type="radio" value="Mengulang" name="keterangan'.$d.'"> Mengulang </></label>' .
                        ' </br>'.'<label><input type="radio" value="Baru"      name="keterangan'.$d.'"> Baru      </></label>' ;
                    }
                    
                )
            );
            $sql_details = array(
                'user'   => $this->db->username,
                'pass'   => $this->db->password,
                'db'     => $this->db->database,
                'host'   => $this->db->hostname
            );

            echo json_encode(
                SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
            );
        }

        function index()
        {
            $this->template->load('template', 'matakuliah/list');
        }

        function add()
        {
            if (isset($_POST['submit'])) {
                $this->Model_matakuliah->save();
                redirect('matakuliah');
            } else {
                $this->template->load('template', 'matakuliah/add');
            }
        }

        function edit()
        {
            if (isset($_POST['submit'])) {
                $this->Model_matakuliah->update();
                redirect('matakuliah');
            } else {
                $id_matakuliah        = $this->uri->segment(3);
                $data['matakuliah']   = $this->db->get_where('t_matakuliah', array('id_matakuliah' => $id_matakuliah))->row_array();
                $this->template->load('template', 'matakuliah/edit', $data);
            };
        }

        function delete()
        {   
            $id_matakuliah = $this->uri->segment(3);
            if (!empty($id_matakuliah)) {
                //proses delete data
                $this->db->where('id_matakuliah',$id_matakuliah);
                $this->db->delete('t_matakuliah');
            }
            redirect('matakuliah'); 
        }
    }
