                    <?php                
                        $data = $this->db->query("SELECT * 
                                                    FROM `t_mahasiswa` a
                                                    LEFT OUTER JOIN t_pengguna b
                                                    ON a.id_pengguna = b.id_pengguna 
                                                    WHERE id_dosen_dpa=3")->result();
                        // print_r ($data);
                        // $id_pa = $this->db->query("SELECT id_dosen_dpa from t_mahasiswa where id_mahasiswa='$id_pengguna'")->row('id_dosen_dpa');
                    ?>

<div class="col-md-12">
    <!-- start: DYNAMIC TABLE PANEL -->

    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i><b> DAFTAR DATA PENDATAAN - DPA </b>
            <div class="panel-tools">
                <?php echo anchor('matakuliah/add', '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', "title='Tambah Data'"); ?>
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
            </div>
        </div>
        <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIM</th>
                        <th>NAMA MAHASISWA</th>
                        <th>STATUS</th>
                        <th>SUNTING</th>
                    </tr>

                    
                    <?php foreach($data as $key=>$a){

                    ?>
                    
                    <tr>
                        <th><?=$key+1?></th>
                        <th><?=$a->username?></th>
                        <th><?=$a->nama_mahasiswa?></th>
                        <th> </th>
                        <th>HAPUS</th>
                    </tr>
                    <?php } ?>
                </thead>
            </table>

            
            <div class="form-group">
                    <!-- BUTTON CETAK DAFTAR DATA PENDATAAN -->
                    <div>
                         <?php echo anchor('Formpendataan/cetakDataPendataan', 'CETAK DATA PENDATAAAN', array('class' => 'btn btn-success')); ?>
                    </div>
            </div>

        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->

    
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>

<script>
       
    </script>