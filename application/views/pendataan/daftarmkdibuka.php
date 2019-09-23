<div class="col-md-12">
    <!-- start: DYNAMIC TABLE PANEL -->

    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i><b> DAFTAR MATAKULIAH DIBUKA (Akademik) </b>
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
            </div>
        </div>
        <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordere
            
            d table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>KODE</th>
                        <th>MATAKULIAH</th>
                        <th>PEMINAT</th>
                        <th>TOTAL KELAS</th>
                        <th>ATUR JADWAL</th>
                    </tr>
                </thead>
            </table>

            
            <div class="form-group">
                    <!-- BUTTON CETAK DAFTAR DATA PENDATAAN -->
                    <div>
                        <button type="submit" name="submit" class="btn btn-success">CETAK JADWAL SEMESTER ANTARA</>
                    </div>
            </div>

        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->

    
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>