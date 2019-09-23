<!--GET DATA DB -->
<?php 
    $jumlah_sks     = 0;
    $id_pengguna    = $this->session->userdata('id_pengguna');
    $data           = $this->db->query("SELECT *
                                        FROM t_pendataanmk a
                                        LEFT OUTER JOIN t_pendataan b 
                                        ON a.id_pendataan = b.id_pendataan
                                        LEFT OUTER JOIN t_matakuliah c
                                        ON c.id_matakuliah = a.id_matakuliah 
                                        WHERE b.id_pengguna ='$id_pengguna'")->result();
    
    $id_pa = $this->db->query("SELECT id_dosen_dpa 
                                from t_mahasiswa 
                                where id_mahasiswa='$id_pengguna'")->row('id_dosen_dpa');                    
?>
                   
<div class="col-sm-12"> 
<!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            FORM PENDATAAN
            <div class="panel-tools">
                <!-- <a class="btn btn-xs btn-link panel-collapse collapses" href="#"></a> -->
            </div>
        </div>
        <div class="panel-body">
            <form id="pendataanform" method="POST" action="<?=base_url()?>index.php/formpendataan/submit" role="form" class="form-horizontal">    
                <!-- echo form_open('pendataan/formpendataan', 'role="form" class="form-horizontal"'); -->

                <!-- input hidden dpa -->
                <input id="dpa_hidden" type="hidden" name="dpa_hidden">

                <div class="col-sm-12">
                    <!--start: IDENTITAS MAHASISWA -->
                    <table name="identitas-pengguna">
                        <tr height='40'>
                            <td width='120'> Nama</td>
                            <td width='20'> : </td>
                            <td><strong><?php echo strtoupper($nama_mahasiswa);?></strong></td>
                            <td width='200'></td>
                            <td width='120'> NIM</td>
                            <td width='20'> : </td>
                            <td><strong><?php echo strtoupper($username)?></strong></td>
                        </tr>
                        <tr height='40'>
                            <td width='120'> Program Studi</td>
                            <td width='20'> : </td>
                            <td><strong><?php echo strtoupper($program_studi);?></strong></td>
                            <td width='200'></td>
                            <td width='120'> Email</td>
                            <td width='20'> : </td>
                            <td><strong><?php echo strtolower($email)?></strong></td>
                        </tr>                
                    </table>
                    <!--end: IDENTITAS MAHASISWA -->
                </div>

                <div class="form-group">
                    <!-- start: Dosen PA -->
                    <label class="col-sm-2 control-label" for="form-field-1">
                        Dosen Pembimbing
                    </label>
                        <div class="col-sm-4">
						    <select required onchange="PilihDosen()" id="select_dosen" class="form-control search-select"  >
                                           
                           <!-- <option value="">&nbsp;</option> -->
                                <option value=""> Pilih Dosen </option>             
                                  <?php foreach($dosen_pa as $dosen) { ?>
                                    <option <?php if($id_pa==$dosen['id_dosen']){ echo 'selected'; } ?> value="<?php echo $dosen['id_dosen']?>"> 
                                            <?php echo $dosen ['nama_dosen'] ?> </option>
                                        <?php } ?>
							</select>
						</div>
                    <!-- end: Dosen PA  -->
                </div>

                <div class="form-group">
                     <!-- start: Button Pilih MK -->
                    <div class="col-sm-6">
                        <button type="button" name="pilih_matakuliah"  class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">+ PILIH MATA KULIAH</button>
                        </button>
                    </div>
                    <!-- end: button Pilih MK -->
                </div>

            <!-- start: TABEL HASIL PILIHAN BUTTON PILIH MATA KULIAH-->
            <table id="tampungTabelPilihMK" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>KODE MATAKULIAH</th>
                        <th>MATAKULIAH</th>
                        <th>SKS</th>
                        <th>KETERANGAN</th>
                        <th>HAPUS</th>
                    </tr>

                    <?php foreach($data as $key=>$a){
                        $jumlah_sks = $jumlah_sks + $a->sks;
                    ?>

                    <tr>
                        <th><?=$key+1?></th>
                        <th><?=$a->id_matakuliah?></th>
                        <th><?=$a->nama_matakuliah?></th>
                        <th><?=$a->sks?></th>
                        <th><?=$a->keterangan?></th>
                        <th><button type='button' onclick='deleteRow(this)' >-</button></th>
                    </tr>
                    <?php } ?>
                </thead>
            </table>
            <!-- end: TABLE PILIHAN BUTTON PILIH MATA KULIAH -->

            <!-- start: TABEL JUMLAH SKS -->
            <table id="tampungTabelPilihMK" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Jumlah sks</th>
                        <th><span id="jumlah_sks"><?=$jumlah_sks?></span></th>
                    </tr>
                    <tr>
                        <th>Jumlah Maksimal sks</th>
                        <th><span id="jumlah_sks_maksimal">10</span></th>
                    </tr>
                </thead>
            </table>
            <!-- end: TABEL JUMLAH SKS -->
                
                <!-- Button Simpan-->
                <div class="form-group">
                    <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary">SIMPAN</>
                    </div>

                    <div class="col-sm-1">             
                                        <!-- anchor : nama_controller/function -->
                        <?php echo anchor('Formpendataan/cetakPendataan', 'CETAK PENDATAAAN', array('class' => 'btn btn-success')); ?>
                    </div>
                </div>
                <!-- end: Button Simpan -->
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
                            { "data": "id_matakuliah","width": "100px",},
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
        
        // ini
        <?php 
        $kode = "";
        foreach($data as $key=>$a){
            $kode = $kode.$a->id_matakuliah.',';
        } ?>

        var mk_dipilih = ["<?=$kode?>"];

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
                    // alert(dataMatakuliah[i].id_matakuliah);
                    saveMK = dataMatakuliah[i];
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

                        $('#jumlah_sks').text(jumlah_sks);
                
                        //disini bikinnya innerhtml
                        var table       = document.getElementById('tampungTabelPilihMK');
                        var selectButton= document.querySelector('input[name="keterangan'+matkul+'"]:checked').value;
                        var row         = table.insertRow(1);

                        var cell1       = row.insertCell(0);
                        var cell2       = row.insertCell(1);
                        var cell3       = row.insertCell(2);
                        var cell4       = row.insertCell(3);
                        var cell5       = row.insertCell(4);
                        var cell6       = row.insertCell(5);

                        var list = document.getElementsByClassName("");
                            for (var i = 1; i <= list.length; i++) {
                                list[i]= i;
                            }

                                cell1.innerHTML = i++;
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
            // console.log(document.getElementById("tampungTabelPilihMK")) ;
        }
</script>

<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
</div>


