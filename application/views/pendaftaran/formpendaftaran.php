<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            FORM PENDAFTARAN
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
                echo form_open('pendaftaran/formpendaftaran', 'role="form" class="form-horizontal"');
                ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Nama Mahasiswa
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $nama_mahasiswa;?>" name="nama_mahasiswa"  placeholder="Nama Mahasiswa" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        NIM
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $username;?>" name="nim"  placeholder="NIM" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Program Studi
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $program_studi;?>"name="alamat_mahasiswa"  placeholder="Alamat Tempat Tinggal" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Email
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $email;?>"name="email_mahasiswa"  placeholder="Email" id="form-field-1" class="form-control">
                    </div>
                </div>            
 
                <div class="form-group">
                    <!-- BUTTON PIILIH MATA KULIAH -->
                    <div class="col-sm-2">
                        <button type="button" name="pilih_matakuliah"  class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">+ PILIH MATA KULIAH</button>
                        </button>
                    </div>
                    
                </div>

            <!-- TABEL HASIL PILIHAN BUTTON PILIH MATA KULIAH-->
            <table id="tampungTabelPilihMataKuliah" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>KODE MATA KULIAH</th>
                        <th>MATA KULIAH</th>
                        <th>SKS</th>
                        <th>KETERANGAN</th>
                        <th>HAPUS</th>
                    </tr>
                </thead>
            </table>
            <!-- END TABLE PILIHAN BUTTON PILIH MATA KULIAH -->
     
                <div class="form-group">
                    <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary">SIMPAN</>
                    </div>
                    <div class="col-sm-1">
                        <?php echo anchor('formpendaftaran/cetakpendaftaran', 'CETAK PENDAFTARAN', array('class' => 'btn btn-success')); ?>
                    </div>
                </div>
        </div>
        </form>

        <!-- Modal Bootstrap POP UP -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pilihan Mata Kuliah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- CONTENT MODAL -->             
                  <!-- start: DYNAMIC TABLE PANEL -->
                    <div class="panel-body">
                        <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>KODE MATAKULIAH</th>
                                    <th>NAMA MATAKULIAH</th>
                                    <th>KETERANGAN</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                <!-- end: DYNAMIC TABLE PANEL -->
            </div>
            <!-- END CONTENT MODAL -->
        
        </div>


    </div>
<!-- end: TEXT FIELDS PANEL -->
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>

<script>
        var dataMatakuliah;
        $(document).ready(function() {
           
            $.ajax ({
                url: '<?php echo site_url('matakuliah/dataPendataan'); ?>',
                type: "get",
                success: function(response) {
                    response = JSON.parse(response);
                    passTheData(response.data);

                    var t = $('#mytable').DataTable( {
                        // dataPendataan controller dari MataKuliah
                        'data': dataMatakuliah,  
                        "order": [[ 2, 'asc' ]],
                        "columns": [
                            {
                                "data": null,
                                "width": "50px",
                                "sClass": "text-center",
                                "orderable": false,
                            },
                            {
                                "data": "id_matakuliah",
                                "width": "100px",
                            },
                            { "data": "nama_matakuliah" },
                            { "data": "keterangan","width": "120px" },
                            { "data": "aksi","width": "100px" },
                        ]
                    } );
                    
                    t.on( 'order.dt search.dt', function () {
                        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                            cell.innerHTML = i+1;
                        } );
                    } ).draw();

                    // console.log(dataMatakuliah); ini melihat data
                }
            });

            //sebagai media dari ajax untuk mengisi dataMataKuliah
            var passTheData = function (data) {
                window.dataMatakuliah = data;
                console.log(window.dataMatakuliah);
            };
        } );
        // sintax dari fungsi apa yang dilakukan setelah fungsi PilihMatkul
        var PilihMatkul = function (matkul) {
            //hasilPilihMatkul berupa objek mata kuliah yang mau disimpan;
            var hasiLPilihMatkul = $.grep(dataMatakuliah, function(matkulDataMatakuliah){
                return matkulDataMatakuliah.id_matakuliah == matkul ; 
            }) ;
            //disini bikinnya innerhtml
           
            // function createTable(array, tableDiv)
            //         {
            //             var tbl = document.createElement('table');
            //             tbl.style.border = "1px solid black";
            //             for(var i = 0; i < array.length; i++)
            //             {
            //                 var tr = tbl.insertRow();
            //                 for(var j = 0; j < array[i].length; j++)
            //                 {
            //                     var td = tr.insertCell();
            //                 }
            //             }
            //             tableDiv.append("<br>" + tbl);
            //             return;
            //         }

            // document.getElementById('tampungTabelPilihMataKuliah').innerHTML = document.getElementById ('mytable');
            
            console.log(window.dataMatakuliah);
        }
            // console.log("Test");
            // alert(matkul);
        
</script>

</div>


