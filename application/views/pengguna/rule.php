<div class="col-md-4">
    <!-- start: TABEL PERAN USER-->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> PERAN PENGGUNA
        </div>
        <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <tr><td>Pilih Peran</td><td><?php echo cmb_dinamis('id_peran', 't_peran', 'nama_peran', 'id_peran', null, "id='peran' onchange='loadData()'") ?></td></tr>
            </table>
        </div>

    </div>
    <!-- end: TABEL PERAN USER -->
</div>

<div class="col-md-8">
    <!-- start: TABEL HAK AKSES PENGGUNA -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> HAK AKSES PENGGUNA
        </div>
        
        <div class="panel-body">
            <div id="tabel"></div>
        </div>
    </div>
    <!-- end: TABEL HAK AKSES PENGGUNA -->
</div>

<!-- AMBIL DATA HAK AKSES MENU -->
<script type="text/javascript">
    $(document ).ready(function() {
        loadData();
    });
</script>

<script type="text/javascript">
    
    function loadData(){
        var peran = $("#peran").val();
        $.ajax({
            type:'GET',
            url :'<?php echo base_url() ?>index.php/pengguna/modul',   
            data:'peran='+peran,
            success:function(html){
                $("#tabel").html(html);
            }
        })
    }

    function addRule(id_modul){
        // alert('ya benar');
        var peran=$("#peran").val();
        $.ajax({
            type:'GET',
            url :'<?php echo base_url() ?>index.php/pengguna/addRule',
            data:'peran='+peran+'&id_menu='+id_modul,
            // data:'peran='+peran,
            success:function(html){
                // $("#tabel").html(html);
                alert('Anda berhasil melakukan update hak akses pengguna !');
            }
        })
    }

</script>

