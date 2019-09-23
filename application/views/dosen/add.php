<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            DATA DOSEN
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
                echo form_open('dosen/add', 'role="form" class="form-horizontal"');
                ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Nomor Induk
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="nomor_induk" placeholder="Nomor Induk" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Nama Dosen
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="nama_dosen" placeholder="Nama Dosen" id="form-field-1" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">

                    </label>
                    <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-danger">SIMPAN</>
                    </div>
                    <div class="col-sm-1">
                        <?php echo anchor('dosen', 'Kembali', array('class' => 'btn btn-info')); ?>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
<!-- end: TEXT FIELDS PANEL -->
</div>