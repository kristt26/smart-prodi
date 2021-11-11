<!--
Author : Aguzrybudy
Created : Selasa, 19-April-2016
Title : Crud Menggunakan Modal Bootsrap
-->
<?php
    include "koneksi.php";

	$modal_id = $_GET['modal_id'];

	$modal = mysqli_query($conn,"SELECT * FROM pts WHERE kd_pts ='$modal_id'");

	while($r=mysqli_fetch_array($modal)){
?>

<div class="modal-dialog" style="background-color: #f0f0f0;">
    <div class="modal-content" style="background-color: #f0f0f0;">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">× </button>
            <h4 class="modal-title" id="myModalLabel"></h4>
        </div>


        <div class="modal-body">
                
               <form action="editproses.php" name="modal_popup" enctype="multipart/form-data" method="POST">


            <input type="hidden" name="kd_pts" value="<?php echo $r['kd_pts']; ?>">

            <div class="form-group row">
              <label class="col-md-4"><b>Nama Perguruan Tinggi Swasta</b></label>
                <input type="text"  class="form-control col-md-8" name="nama_pts" value="<?php echo $r['nama_pts']; ?>">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Alamat</b></label>
                <input type="text"  class="form-control col-md-8" name="alamat" value="<?php echo $r['alamat']; ?>">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Kota</b></label>
                <input type="text"  class="form-control col-md-8" name="kota" value="<?php echo $r['kota']; ?>">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Kode pos</b></label>
                <input type="number"  class="form-control col-md-8" name="kode_pos" value="<?php echo $r['kode_pos']; ?>">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Nomor Telepon</b></label>
                <input type="number"  class="form-control col-md-8" name="no_telepon" value="<?php echo $r['no_telepon']; ?>">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Email</b></label>
                <input type="email"  class="form-control col-md-8" name="email" value="<?php echo $r['email']; ?>">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Halaman Web</b></label>
                <input type="text"  class="form-control col-md-8" name="laman_web" value="<?php echo $r['laman_web']; ?>">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Akreditasi</b></label>
                <input type="text"  class="form-control col-md-8" name="akreditasi" value="<?php echo $r['akreditasi']; ?>">
            </div><hr>
			
			<div class="form-group row">
              <label class="col-md-4"><b>Failitas Kampus</b></label>
                <input type="text"  class="form-control col-md-8" name="fasilitas_kampus" value="<?php echo $r['fasilitas_kampus']; ?>">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Username</b></label>
                <input type="text"  class="form-control col-md-8" name="username" value="<?php echo $r['username']; ?>">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Password</b></label>
                <input type="text"  class="form-control col-md-8" name="password" value="<?php echo $r['password']; ?>">
            </div><hr>


                <div class="modal-footer">
                    <button class="btn btn-success" type="submit" name="proses1">
                        Confirm Update
                    </button>
                    <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                        Cancel
                    </button>
                </div>


            </form>

             <?php } ?>

            </div>      
    </div>
</div>