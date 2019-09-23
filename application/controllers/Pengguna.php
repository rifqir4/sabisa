 <?php 
    class Pengguna extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
            // cekAksesModul();
            $this->load->library('ssp');
            $this->load->model('Model_pengguna');
        }

        function index()
        {
            // cekAksesModul();
            $this->template->load('template', 'pengguna/list');
        }

        function profil(){
            $this->template->load('template','pengguna/profil');
        }

        function data()
        {
            //nama tabel
            $table = 'v_t_pengguna';
            //nama PK
            $primaryKey = 'id_pengguna';
            //list field
            $columns = array(
                // array('db' => 'id_pengguna', 'dt' => 'id_pengguna'),
                array('db' => 'nama_pengguna', 'dt' => 'nama_pengguna'),
                array('db' => 'nama_peran', 'dt' => 'nama_peran'),
                array(
                    'db' => 'id_pengguna',
                    'dt' => 'aksi',
                    'formatter' => function ($d) {
                        //return "<a href='edit.php?id=$d'>EDIT</a>";
                        return anchor('pengguna/edit/' . $d, '<i class="fa fa-edit"></i>', 'class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"') .
                            '  ' . anchor('pengguna/delete/' . $d, '<i class="fa fa-trash"></i>', 'class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
                    }
                )
            );
            $sql_details = array(
                'user'  => $this->db->username,
                'pass'  => $this->db->password,
                'db'    => $this->db->database,
                'host'  => $this->db->hostname
            );

            echo json_encode(
                SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
            );
        }

        function add() {
            if (isset($_POST['submit'])) {
                $uploadFoto = $this->upload_foto_pengguna();
                $this->Model_pengguna->save($uploadFoto);
                redirect('pengguna');
            } else {
                $this->template->load('template', 'pengguna/add');
            }
        }

        function upload_foto_pengguna(){
            $config['upload_path']          = './uploads/foto_user/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 1024; // imb
            $this->load->library('upload', $config);
            
            // proses upload
            $this->upload->do_upload('userfile');
            $upload = $this->upload->data();
            return $upload['file_name'];
        }

        function edit(){
            if(isset($_POST['submit'])){
                $uploadFoto = $this->upload_foto_pengguna();
                $this->Model_pengguna->update($uploadFoto);
                redirect('pengguna');
            }else{
                $id_pengguna       = $this->uri->segment(3);
                $data['pengguna']  = $this->db->get_where('t_pengguna',array('id_pengguna'=>$id_pengguna))->row_array();
                $this->template->load('template', 'pengguna/edit',$data);
            }
        }

        function delete(){
            $id_pengguna = $this->uri->segment(3);
            if(!empty($id_pengguna)){
                $this->db->where('id_pengguna',$id_pengguna);
                $this->db->delete('t_pengguna');
            }
            redirect ('pengguna');
        }

        function rule(){
            $this->template->load('template','pengguna/rule');
        }

        function modul(){
            $peran = $_GET['peran'];  
            echo "<table id='mytable' class='table table-striped table-bordered table-hover table-full-width dataTable'>
                    <thead>
                        <tr>
                            <th width='10'>NO</th>
                            <th>NAMA MODUL</th>
                            <th>LINK</th>
                            <th>HAK AKSES</th>
                        </tr>";

            $menu = $this->db->get('tabel_menu');
            $no=1;
            foreach($menu->result() as $row){
                echo "<tr>
                        <td>$no</td>
                        <td>".strtoupper($row->nama_menu)."</td>
                        <td>".strtoupper($row->link)."</td>
                        <td align='center'><input type='checkbox'";
                             
                        //$peran yang diinputkan, dari tabel pengguna
                $this->cekRule($peran, $row->id);
                        
                echo    " onclick='addRule($row->id)'></td>
                      </tr>" ;
                $no++;

            }

             echo  "</thead>
                </table>";

        }

        function cekRule($peran, $id_menu){
            $data       = array('id_peran' =>$peran, 'id_menu'=>$id_menu );
            $cek_data   = $this->db->get_where('t_pengguna_rule',$data);
            // sudah diberi akses
            if ($cek_data->num_rows()>0){
                echo "checked";
            }
        }

        function addRule (){
            $peran      = $_GET['peran'];
            $id_menu    = $_GET['id_menu']; 
            // cek peran dengan id_menu
            $data       = array('id_peran'=>$peran, 'id_menu'=>$id_menu);
            $cek_data   = $this->db->get_where('t_pengguna_rule',$data);

            // kalo datanya kosong
            if($cek_data->num_rows()<1){
                $this->db->insert('t_pengguna_rule',$data);
                echo "Menambah hak akses modul pengguna berhasil dilakukan !";
            }else{
                $this->db->where('id_peran',$peran);
                $this->db->where('id_menu',$id_menu);
                $this->db->delete('t_pengguna_rule');
                echo "Menghapus hak akses modul pengguna berhasil dilakukan !";
            }


        }



        
    }
