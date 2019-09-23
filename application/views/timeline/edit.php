
<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            Sunting Timeline
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
            </div>
        </div>
        <div class="panel-body">
            <!-- <form role="form" class="form-horizontal"> -->
                <?php
                echo form_open('timeline/edit', 'role="form" class="form-horizontal"');
                echo form_hidden('id_timeline',$timeline['id_timeline']);
                ?>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        No Urut
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $timeline['id_timeline']?>" readonly="" name="Kode_timeline" placeholder="Kode timeline" id="form-field-1" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Nama timeline
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $timeline['nama_timeline']?>"name="nama_timeline" placeholder="Nama timeline" id="form-field-1" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Tanggal Mulai
                    </label>
                    <div class="col-sm-3">
                        <input type="date" value="<?php echo $timeline['tanggal_mulai']?>"name="tanggal_mulai" id="form-field-1" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Tanggal Selesai
                    </label>
                    <div class="col-sm-3">
                        <input type="date" value="<?php echo $timeline['tanggal_selese']?>"name="tanggal_selese" id="form-field-1" class="form-control">
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">

                    </label>
                    <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-danger">SIMPAN</>
                    </div>
                    <div class="col-sm-1">
                        <?php echo anchor('timeline', 'Kembali', array('class' => 'btn btn-info')); ?>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
<!-- end: TEXT FIELDS PANEL -->
</div>