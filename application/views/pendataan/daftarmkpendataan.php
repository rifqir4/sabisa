<div class="col-sm-12">
    
<!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            Form Pendataan
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
            </div>
        </div>
        <div class="panel-body">
            <form id="pendataanform" method="POST" action="<?=base_url()?>index.php/formpendataan/submit" role="form" class="form-horizontal">
                
                <!-- echo form_open('pendataan/formpendataan', 'role="form" class="form-horizontal"'); -->

                <!-- input hidden dpa -->
                <input id="dpa_hidden" type="hidden" name="dpa_hidden">

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Nama Mahasiswa
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $nama_mahasiswa;?>" readonly="" name="nama_mahasiswa"  placeholder="Nama Mahasiswa" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        NIM
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $username;?>" readonly="" name="nim"  placeholder="NIM" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Program Studi
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $program_studi;?>" readonly="" name="alamat_mahasiswa"  placeholder="Alamat Tempat Tinggal" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Email
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $email;?>" readonly="" name="email_mahasiswa"  placeholder="Email" id="form-field-1" class="form-control">
                    </div>
                </div>
                
                <!-- PILIH DOSEN PEMBIMBING AKADEMIK -->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Dosen Pembimbing Akademik
                    </label>
                                     <div class="col-sm-9">
										<select onchange="PilihDosen()" id="select_dosen" class="form-control search-select">
                                            
                                        <!-- <option value="">&nbsp;</option> -->
                                        <option value=""> Pilih Dosen </option>
                                        
                                        <?php foreach($dosen_pa as $dosen) { ?>
                                            <option value="<?php echo $dosen['id_dosen']?>"> 
                                            <?php echo $dosen ['nama_dosen'] ?> </option>
                                        <?php } ?>

                                        
										</select>
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
                        <th><span id="jumlah_sks">0</span></th>
                    </tr>
                    <tr>
                        <th>Jumlah Maksimal sks</th>
                        <th><span id="jumlah_sks_maksimal">10</span></th>
                    </tr>
                </thead>
            </table>
            <!-- end: TABEL JUMLAH SKS -->
                
                <!-- BUTTON SIMPAN -->
                <div class="form-group">
                    
                    <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary">SIMPAN</>
                    </div>

                    <div class="col-sm-1">
                                       
                                        <!-- anchor : nama_controller/function -->
                        <?php echo anchor('Formpendataan/cetakPendataan', 'CETAK PENDATAAAN', array('class' => 'btn btn-success')); ?>
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

            // console.log (document.getElementsByName("test")[0].value);
            
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
        
        
        var mk_dipilih = [""];

        var PilihDosen = function () {

            var pilih_dpa = document.getElementById("select_dosen").value;
            document.getElementById("dpa_hidden").value = pilih_dpa;

        }

        
        // console.log(pilih_dpa);

        // sintax dari fungsi apa yang dilakukan setelah fungsi PilihMatkul
        var PilihMatkul = function (matkul) {
            //hasilPilihMatkul berupa objek mata kuliah yang mau disimpan;
            
            var i ;
            var saveMK ;

            for (i=0 ; i < dataMatakuliah.length ; i++  ){
                // dataMatakuliah.id_matakuliah;
                if (dataMatakuliah[i].id_matakuliah == matkul){
                    saveMK = dataMatakuliah [i] ;
                    break ;
                }
            }        
            
            jumlah_sks = $('#jumlah_sks').text();
                        jumlah_sks = parseInt(jumlah_sks) + parseInt(saveMK.sks);    

                if(jumlah_sks > 10){
                    alert('sks maksimal sudah terlampau!');
                }else{
                    var a = mk_dipilih.indexOf(saveMK.id_matakuliah);
                    if(a<0){

                        // jumlah_sks
                       
                        $('#jumlah_sks').text(jumlah_sks);
                
                        //disini bikinnya innerhtml
                        var table       = document.getElementByselectButton= document.querySelector('input[name="keterangan'+matkul+'"]:checked').valuId("tampungTabelPilihMK");
                        var e;
                        var row         = table.insertRow(1);

                        var cell1       = row.insertCell(0);
                        var cell2       = row.insertCell(1);
                        var cell3       = row.insertCell(2);
                        var cell4       = row.insertCell(3);
                        var cell5       = row.insertCell(4);
                        var cell6       = row.insertCell(5);

                        var list = document.getElementsByClassName("no-table");
                            for (var i = 1; i <= list.length; i++) {
                                list[i]= i;
                            }

                                cell1.innerHTML = table.list;
                                cell2.innerHTML = saveMK.id_matakuliah;
                                cell3.innerHTML = saveMK.nama_matakuliah;
                                cell4.innerHTML = saveMK.sks;
                                cell5.innerHTML = selectButton;
                                cell6.innerHTML = "<button type='button' onclick='deleteRow(this)' >-</button>";

                                // input hidden ketika memilih button pilih, dari variabel saveMK berdasarkan id_matakuliah
                                var form = document.getElementById ("pendataanform");
                                form.innerHTML = form.innerHTML + "<input type='hidden' name='id_matakuliah[]' value='"+saveMK.id_matakuliah+"' >" 
                                                + "<input type='hidden' name='rb_keterangan[]' value='"+selectButton+"'>" ;
                                                
                            }else{
                                alert('mata kuliah sudah dipilih!');
                            }
                            
                        }               

                mk_dipilih.push(saveMK.id_matakuliah);
                // alert(mk_dipilih);
                             // console.log(saveMK)

                
        }

        function deleteRow(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("tampungTabelPilihMK").deleteRow(i);
            console.log(document.getElementById("tampungTabelPilihMK")) ;
        }
            // console.log("Test");
            // alert(matkul);
</script>

</div>


