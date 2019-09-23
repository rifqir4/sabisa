<div class="col-md-9">
    <!-- start: DYNAMIC TABLE PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> <strong>Daftar Pengguna</strong>
            <div class="panel-tools">
                <?php echo anchor('pengguna/add', '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', "title='Tambah Data'"); ?>
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
            </div>
        </div>
        <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA PENGGUNA</th>
                        <th>LEVEL PENGGUNA</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->
</div>

<div class="col-md-3">
    <!-- start: DYNAMIC TABLE PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> <strong>Daftar Pengguna</strong>
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
            </div>
        </div>
         <!--start: BUTTON RULE PENGGUNA  -->
            <div class="panel-body">
                <?php echo anchor ('pengguna/rule', "HAK AKSES PENGGUNA", array('class' =>'btn btn-danger btn-sm'));?>
                <br>
            </div>
         <!-- end: BUTTON RULE PENGGUNA -->

    </div>
    <!-- end: DYNAMIC TABLE PANEL -->
</div>


    

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>

    <!--start: Datatables -->
    <script>
        $(document).ready(function() {
            var t = $('#mytable').DataTable( {
                "ajax": '<?php echo site_url('pengguna/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "50px",
                        "sClass": "text-center",
                        "orderable": false,
                    },
                    { "data": "nama_pengguna" },
                    { "data": "nama_peran" },
                    { "data": "aksi","width": "100px" },
                ]
            } );
               
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
    </script>
    <!--end : Datatables -->