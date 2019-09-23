
<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            Sunting Data Mahasiswa
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                    <i class="fa fa-wrench"></i>
                </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#">
                    <i class="fa fa-refresh"></i>
                </a>
                <a class="btn btn-xs btn-link panel-expand" href="#">
                    <i class="fa fa-resize-full"></i>
                </a>
                <a class="btn btn-xs btn-link panel-close" href="#">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="panel-body">
            <!-- <form role="form" class="form-horizontal"> -->
                <?php
                echo form_open('mahasiswa/edit', 'role="form" class="form-horizontal"');
                echo form_hidden('nim',$mahasiswa['nim']);
                ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Nama Mahasiswa
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $mahasiswa['nama_mahasiswa']?>" name="nama_mahasiswa" placeholder="Nama Mahasiswa" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        NIM
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $mahasiswa['nim']?>" readonly="" placeholder="NIM" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Alamat Tempat Tinggal
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $mahasiswa['alamat_mahasiswa']?>" name="alamat_mahasiswa" placeholder="Alamat Tempat Tinggal" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Email
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $mahasiswa['email_mahasiswa']?>" name="email_mahasiswa" placeholder="Email" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        No Telp.
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $mahasiswa['no_telp']?>" name="no_telp" placeholder="021 xxx xxx" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        No Hp.
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $mahasiswa['no_hp']?>"name="no_hp" placeholder="+628 xxx xxx xxx" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Jurusan
                    </label>
                    <div class="col-sm-3">
                        <?php
                        echo form_dropdown('id_jurusan', array('TIF' => 'TEKNIK INFORMATIKA', 'SI' => 'SISTEM INFORMASI'), $mahasiswa['id_jurusan'], "class='form-control'");
                        ?>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Prodi
                    </label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Prodi" id="form-field-1" class="form-control">
                    </div>
                </div> -->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Prodi
                    </label>
                    <div class="col-sm-3">
                        <?php
                        echo form_dropdown('id_prodi', array('1' => 'TEKNIK INFORMATIKA', '2' => 'TEKNIK KOMPUTER', '3' => 'SISTEM INFORMASI', '4' => 'TEKNOLOGI INFORMASI', '5' => 'PENDIDIKAN TEKNOLOGI INFORMASI'), $mahasiswa['id_prodi'], "class='form-control'");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">

                    </label>
                    <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-danger">SIMPAN</>
                    </div>
                    <div class="col-sm-1">
                        <?php echo anchor('Mahasiswa', 'Kembali', array('class' => 'btn btn-info')); ?>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
<!-- end: TEXT FIELDS PANEL -->
</div>