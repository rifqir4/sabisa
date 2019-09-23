<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            TAMBAH DATA PENGGUNA
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
            </div>
        </div>
        <div class="panel-body">
            <!-- <form role="form" class="form-horizontal"> -->
            <?php
                echo form_open_multipart('pengguna/edit', 'role="form" class="form-horizontal"');
                echo form_hidden('id_pengguna',$pengguna['id_pengguna']);
            ?>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        NAMA PENGGUNA
                    </label>
                    <div class="col-sm-4">
                        <input required type="text" value="<?php echo $pengguna['nama_pengguna']?>" name="nama_pengguna" placeholder="Nama pengguna" id="form-field-1" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label" for="form-field-1">
                        PERAN
                    </label>
                    <div class="col-sm-4">
                        <?php
                            echo cmb_dinamis('id_peran', 't_peran', 'nama_peran', 'id_peran');
                            ?>
                    </div>
                </div>
            
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        USERNAME
                    </label>
                    <div class="col-sm-4">
                        <input type="text" required name="username" value="<?php echo $pengguna['username'] ?>" placeholder="Username" id="form-field-1" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label" for="form-field-1">
                        PASS
                    </label>
                    <div class="col-sm-4">
                        <input type="text" required name="password" placeholder="Password" id="form-field-1" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        EMAIL
                    </label>
                    <div class="col-sm-4">
                        <input type="text" required name="email" value="<?php echo $pengguna ['email']?>" placeholder="email" id="form-field-1" class="form-control">
                    </div>
                    <label class="col-sm-1 control-label" for="form-field-1">
                        NO HP
                    </label>
                    <div class="col-sm-4">
                        <input type="text" required name="no_hp" value="<?php echo $pengguna ['no_hp']?>" placeholder="No_Hp" id="form-field-1" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Foto
                    </label>
                    <div class="col-sm-4">
                        <input type="file" name="userfile">
                        <img src="<?php echo base_url().'uploads/foto_user/'.$pengguna['foto']?>" width="150">
                    </div>
                    <label class="col-sm-1 control-label" for="form-field-1">
                        ALAMAT RUMAH
                    </label>
                    <div class="col-sm-4">
                        <input type="textarea" required name="alamat_rumah" value="<?php echo $pengguna ['alamat_rumah']?>" id="form-field-22" class="form-control" style="height: 150px;"></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                    </label>
                    <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-danger">SIMPAN</>
                    </div>
                    <div class="col-sm-1">
                        <?php echo anchor('pengguna', 'Kembali', array('class' => 'btn btn-info')); ?>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
<!-- end: TEXT FIELDS PANEL -->
</div>