<div class="col-md-12">
    
    <!-- start: DYNAMIC TABLE PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i><b> DAFTAR DATA PEMBAYARAN (Keuangan)</b>
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
            </div>
        </div>
        <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIM</th>
                        <th>NAMA MAHASISWA</th>
                        <th>Total SKS</th>
                        <th>Total Biaya</th>
                        <th>Status</th>
                    </tr>
                </thead>
            </table>

        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->

    <!-- start: TABEL TOTAL KEUANGAN -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i><b> TOTAL KEUANGAN SEMESTER ANTARA</b>
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
            </div>
        </div>
        <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>TOTAL SKS PENDAFTARAN</th>
                        <th>TOTAL BIAYA PENDAFTARAN</th>
                    </tr>
                    <tr>
                        <td> 105 </td>
                        <td> Rp. 20.000.000</td>
                    </tr>
                </thead>
            </table>

        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->

     
             <div class="form-group">
                    <!-- BUTTON CETAK DAFTAR DATA PENDATAAN -->
                    <div>
                         <?php echo anchor('Formpendataan/cetakDataPendataan', 'CETAK DATA PEMBAYARAN', array('class' => 'btn btn-success')); ?>
                    </div>
            </div>
    

    
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>