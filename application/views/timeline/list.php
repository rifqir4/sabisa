<div class="col-md-12">
    <!-- start: DYNAMIC TABLE PANEL -->

    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> <strong>Timeline</strong>
            <div class="panel-tools">
                <?php echo anchor('timeline/add', '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', "title='Tambah Data'"); ?>
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
            </div>
        </div>
        <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>KEGIATAN/KETERANGAN</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selese</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>

<script>
        $(document).ready(function() {
            var t = $('#mytable').DataTable( {
                "ajax": '<?php echo site_url('timeline/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "50px",
                        "sClass": "text-center",
                        "orderable": false,
                    },
                    {"data": "nama_timeline", "width": "80px" },
                    { "data": "tanggal_mulai", "width": "30px"},
                    { "data": "tanggal_selese", "width": "30px"},
                    { "data": "aksi","width": "10px" },
                ]
            } );
               
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
    </script>