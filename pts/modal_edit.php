<!--
Author : Aguzrybudy
Created : Selasa, 19-April-2016
Title : Crud Menggunakan Modal Bootsrap
-->
<?php
    include "koneksi.php";

	$modal_id = $_GET['modal_id'];

	$modal = mysqli_query($conn,"SELECT * FROM prodi WHERE kd_prodi ='$modal_id'");

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


            <input type="hidden" name="kd_prodi" value="<?php echo $r['kd_prodi']; ?>">


            <div class="form-group row">
              <label class="col-md-4"><b>Nama Program Studi</b></label>
                <input type="text"  class="form-control col-md-8" name="nama_prodi" value="<?php echo $r['nama_prodi']; ?>">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Akreditasi</b></label>
                <input type="text"  class="form-control col-md-8" name="akreditasi" value="<?php echo $r['akreditasi']; ?>">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Kelebihan</b></label>
                <input type="text"  class="form-control col-md-8" name="kelebihan" value="<?php echo $r['kelebihan']; ?>">
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