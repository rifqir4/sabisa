<div class="col-md-12">
    <!-- start: DYNAMIC TABLE PANEL -->
    <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i> <strong>Profil Pengguna</strong>
            </div>
        <div class="panel-body">
                
                <!-- FOTO -->
                <div class="col-sm-4">
                    <img class="circle-img" width='200' alt="" src="<?php echo base_url('uploads/foto_user/'.$this->session->userdata('foto'));?>"> 
                </div>

                <div class="col-sm-8">
                    <!--start: IDENTITAS PENGGUNA -->
                    <table name="identitas-pengguna">
                        <tr height='40'>
                            <td width='200'> No.ID </td>
                            <td width='20'> : </td>
                            <td><strong><?php echo $this->session->userdata('username')?></strong></td>
                        </tr>              
                        <tr height='40'>
                            <td width='200'> Nama</td>
                            <td width='20'> : </td>
                            <td><strong><?php echo $this->session->userdata('nama_pengguna')?></strong></td>
                        </tr>
                        <tr height='40'>
                            <td width='200'>Alamat Pengguna</td>
                            <td width='20'>:</td>
                            <td><strong><?php echo $this->session->userdata('alamat_rumah')?></strong></td>
                        </tr>
                        <tr height='40'>
                            <td width='200'>Email</td>
                            <td width='20'>:</td>
                            <td><strong><?php echo $this->session->userdata('email')?></strong></td>
                        </tr>    
                        <tr height='40'>
                            <td width='200'>No.Handphone</td>
                            <td width='20'>:</td>
                            <td><strong><?php echo $this->session->userdata('no_hp')?></strong></td>
                        </tr>  
                        <!-- <tr height='30'>
                            <td width='200'>Peran</td>
                            <td width='20'>:</td>
                            <td><strong><?php echo $this->session->userdata('nama_peran')?></strong></td>
                        </tr>  -->
                    </table>
                    <!--end: IDENTITAS PENGGUNA -->
                </div>
                       
        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->
</div>
