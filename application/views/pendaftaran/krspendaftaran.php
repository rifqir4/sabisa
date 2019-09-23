<div class="col-sm-12">
    
<!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
                Kartu Rencana Studi Mahasiswa (Pendaftaran)
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
            </div>
        </div>
        <div class="panel-body">
            <form id="pendataanform" method="POST"  role="form" class="form-horizontal">
                
                <!-- echo form_open('pendataan/formpendataan', 'role="form" class="form-horizontal"'); -->

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Nama Mahasiswa
                    </label>
                    <div class="col-sm-9">
                        <input type="text" readonly="" name="nama_mahasiswa"  placeholder="Nama Mahasiswa" id="form-field-1" class="form-control">
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        NIM
                    </label>
                    <div class="col-sm-9">
                        <input type="text" readonly="" name="nim"  placeholder="NIM" id="form-field-1" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Program Studi
                    </label>
                    <div class="col-sm-9">
                        <input type="text" readonly="" name="alamat_mahasiswa"  placeholder="Alamat Tempat Tinggal" id="form-field-1" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Email
                    </label>
                    <div class="col-sm-9">
                        <input type="text" readonly="" name="email_mahasiswa"  placeholder="Email" id="form-field-1" class="form-control">
                    </div>
                </div>

            <!-- TABEL HASIL PILIHAN BUTTON PILIH MATA KULIAH-->
            <table id="tampungTabelPilihMK" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="no-table">NO</th>
                        <th>KODE MATAKULIAH</th>
                        <th>MATAKULIAH</th>
                        <th>SKS</th>
                        <th>KETERANGAN</th>
                        <th>HAPUS</th>
                    </tr>
                </thead>
            </table>
            <!-- END TABLE PILIHAN BUTTON PILIH MATA KULIAH -->

            <!-- TABEL JUMLAH SKS -->
            <table id="tampungTabelPilihMK" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Jumlah sks</th>
                        <th> </th>
                    </tr>
                    <tr>
                        <th>Jumlah Maksimal sks</th>
                        <th> </th>
                    </tr>
                </thead>
            </table>
            <!-- end: TABEL JUMLAH SKS -->
                
                <!-- BUTTON-->
                <div class="form-group">
                    
                    <div class="col-sm-7">                  
                                        <!-- anchor : nama_controller/function -->
                        <?php echo anchor('Formpendataan/cetakPendataan', 'CETAK KRS PENDATAAAN', array('class' => 'btn btn-success')); ?>
                    </div>

                    <div class="col-sm-2">
                        <button type="submit" name="submit" class="btn btn-warning">SUNTING PENDAFTARAN</>
                    </div>

                    <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary">VALIDASI</>
                    </div>

                    <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-danger">TOLAK</>
                    </div>


                    
                </div>
        </div>
        </form>
        
        </div>


    </div>
<!-- end: TEXT FIELDS PANEL -->
    
</div>


