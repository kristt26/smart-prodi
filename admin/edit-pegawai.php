<!--
Author : Aguzrybudy
Created : Selasa, 19-April-2016
Title : Crud Menggunakan Modal Bootsrap
-->
<?php
    include "koneksi.php";

	$modal_id = $_GET['modal_id'];

	$modal = mysqli_query($conn,"SELECT * FROM pegawai WHERE nip ='$modal_id'");

	while($r=mysqli_fetch_array($modal)){
?>

<div class="modal-dialog" style="background-color: #f0f0f0;">
    <div class="modal-content" style="background-color: #f0f0f0;">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">× </button>
            <h4 class="modal-title" id="myModalLabel">EDIT PEGAWAI</h4>
        </div>


        <div class="modal-body">
                
               <form action="editproses.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                <input name='nip' type="hidden" value="<?php echo $r['nip']; ?>" />


    <div class="form-group row">
      <label for="staticEmail" class="col-sm-4 col-form-label">NIP</label>
      <div class="col-sm-8">
        <input class="form-control" type="text" readonly="yes" name="nip" value="<?php echo $r['nip']; ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="staticEmail" class="col-sm-4 col-form-label">Nama Lengkap</label>
      <div class="col-sm-8">
        <input class="form-control" type="text" name="nama_lengkap" value="<?php echo $r['nama_lengkap']; ?>">
      </div>
    </div>

     <div class="form-group row">
      <label for="penyimpanan" class="col-sm-4 col-form-label">Jabatan</label>
      <div class="col-sm-8">
      <input class="form-control" type="text" name="jabatan" value="<?php echo $r['jabatan']; ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="jenis" class="col-sm-4 col-form-label">Golongan</label>
      <div class="col-sm-8">
       <select class="form-control" name="golongan">
        <option  value="<?php echo $r['golongan']; ?>"> <?php echo $r['golongan']; ?> </option>
        <option>I</option>
        <option>II</option>
        <option>III</option>
        <option>IV</option>
      </select>
      </div>
    </div>


    <div class="form-group row">
      <label for="jenis" class="col-sm-4 col-form-label">Pangkat</label>
      <div class="col-sm-8">
       <select class="form-control" name="pangkat">
        <option  value="<?php echo $r['pangkat']; ?>"> <?php echo $r['pangkat']; ?> </option>
        <option>A</option>
        <option>B</option>
        <option>C</option>
        <option>D</option>
      </select>
      </div>
    </div>

     <div class="form-group row">
      <label for="penyimpanan" class="col-sm-4 col-form-label">TMT Golongan</label>
      <div class="col-sm-8">
      <input class="form-control" type="date" name="tmt_golongan" value="<?php echo $r['tmt_golongan'] ?>">
      </div>
    </div>


    <div class="form-group row">
      <label for="jenis" class="col-sm-4 col-form-label">Unit Kerja</label>
      <div class="col-sm-8">
      <input class="form-control" id="jenis" type="text" name="unit_kerja" value="<?php echo $r['unit_kerja'] ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="staticEmail" class="col-sm-4 col-form-label">Tempat Lahir</label>
      <div class="col-sm-8">
        <input class="form-control" type="text" name="tmp_lahir" value="<?php echo $r['tmp_lahir'] ?>">
      </div>
    </div>

        <div class="form-group row">
      <label for="staticEmail" class="col-sm-4 col-form-label">Tanggal Lahir</label>
      <div class="col-sm-8">
        <input class="form-control datepicker" type="text" name="tgl_lahir" value="<?php echo $r['tgl_lahir'] ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="staticEmail" class="col-sm-4 col-form-label">Jenis Kelamin</label>
      <div class="col-sm-8">
      <select class="form-control" name="jk">
        <option value="<?php echo $r['jk'] ?>"><?php echo $r['jk'] ?></option>
        <option>Laki - laki</option>
        <option>Perempuan</option>
      </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="staticEmail" class="col-sm-4 col-form-label">Agama</label>
      <div class="col-sm-8">
      <select class="form-control" name="agama">
        <option value="<?php echo $r['agama'] ?>"><?php echo $r['agama'] ?></option>
        <option>Kristen Protestan</option>
        <option>Kristen Khatolik</option>
        <option>Islam</option>
        <option>Hindu</option>
        <option>Buddha</option>
        <option>Lainnya</option>
      </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="staticEmail" class="col-sm-4 col-form-label">Alamat</label>
      <div class="col-sm-8">
        <input class="form-control" type="text" name="alamat" value="<?php echo $r['alamat'] ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="staticEmail" class="col-sm-4 col-form-label">No. Telepon</label>
      <div class="col-sm-8">
      <input class="form-control" type="text" name="telepon" value="<?php echo $r['telepon'] ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="staticEmail" class="col-sm-4 col-form-label">Pendidikan Terakhir</label>
      <div class="col-sm-8">
      <select class="form-control" name="pendidikan_terakhir">
        <option value="<?php echo $r['pendidikan_terakhir'] ?>"><?php echo $r['pendidikan_terakhir'] ?></option>
        <option>SD</option>
        <option>SMP</option>
        <option>SMA</option>
        <option>D1</option>
        <option>D3</option>
        <option>S1/D4</option>
        <option>S2</option>
        <option>S3</option>
      </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="jenis" class="col-sm-4 col-form-label">Status Nikah</label>
      <div class="col-sm-8">
      <select class="form-control" name="status_nikah">
        <option value="<?php echo $r['status_nikah'] ?>"><?php echo $r['status_nikah'] ?></option>
        <option>Menikah</option>
        <option>Belum Menikah</option>
      </select>
      </div>
    </div>


    <div class="form-group row">
      <label for="jenis" class="col-sm-4 col-form-label">Asal Suku </label>
      <div class="col-sm-8">
      <input class="form-control" id="jenis" type="text" name="asal" value="<?php echo $r['asal'] ?>">
      </div>
    </div>

                <div class="modal-footer">
                    <button class="btn btn-success" type="submit" name="proses">
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