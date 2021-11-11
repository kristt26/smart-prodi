<?php 

include 'header.php';

 ?>

<div id="wrapper">


    <div id="content-wrapper">

        <div class="container">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="btn" href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a class="btn btn-info" href="#prodi">Pilih Program Studi</a>
                </li>
            </ol>

            <!-- Icon Cards-->
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card text-white bg-secondary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-header">
                                CARI PROGRAM STUDI
                            </div>

                            <hr>
                            <form action="pencarian.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-md-4"><b>Asal Jurusan SMA/SMK</b></label>
                                    <select name='asal_jurusan' class='form-control col-md-8' required>
                                        <option value="">~ Pilih Sub Kriteria ~</option>

                                        <?php 
                    include 'koneksi.php';

                $sql = mysqli_query($conn, "SELECT * FROM kriteria AS kr INNER JOIN subkriteria AS sk ON kr.kd_kriteria = sk.kd_kriteria  where kr.nama_kriteria like '%asal jurusan%' ORDER BY sk.nama_sub");



                    while ( $r = mysqli_fetch_array($sql)) { ?>

                                        <option
                                            value="<?php echo $r['bobot']; ?>,<?php echo $r['nilai']; ?>,<?php echo $r['nama_sub'] ?>">
                                            <?php echo $r['nama_sub']; ?></option>

                                        <?php } ?>
                                    </select>
                                </div>
                                <hr>

                                <div class="form-group row">

                                    <label class="col-md-4"><b>Akreditasi Program Studi</b></label>
                                    <select name='a_prodi' class='form-control col-md-8' required>
                                        <option value="">~ Pilih Sub Kriteria ~</option>

                                        <?php 
                    include 'koneksi.php';

                $sql = mysqli_query($conn, "SELECT * FROM kriteria AS kr INNER JOIN subkriteria AS sk ON kr.kd_kriteria = sk.kd_kriteria  where kr.nama_kriteria like '%akreditasi program studi%' ORDER BY sk.nama_sub");

                    while ( $r = mysqli_fetch_array($sql)) { ?>

                                        <option
                                            value="<?php echo $r['bobot']; ?>,<?php echo $r['nilai']; ?>,<?php echo $r['nama_sub'] ?>">
                                            <?php echo $r['nama_sub']; ?></option>

                                        <?php } ?>
                                    </select>
                                </div>
                                <hr>

                                <div class="form-group row">

                                    <label class="col-md-4"><b>Akreditasi Kampus</b></label>
                                    <select name='a_kampus' class='form-control col-md-8' required>
                                        <option value="">~ Pilih Sub Kriteria ~</option>

                                        <?php 
                    include 'koneksi.php';
                $sql = mysqli_query($conn, "SELECT * FROM kriteria AS kr INNER JOIN subkriteria AS sk ON kr.kd_kriteria = sk.kd_kriteria  where kr.nama_kriteria like '%akreditasi kampus%' ORDER BY sk.nama_sub");
                    while ( $r = mysqli_fetch_array($sql)) { ?>

                                        <option
                                            value="<?php echo $r['bobot']; ?>,<?php echo $r['nilai']; ?>,<?php echo $r['nama_sub'] ?>">
                                            <?php echo $r['nama_sub']; ?></option>

                                        <?php } ?>
                                    </select>
                                </div>
                                <hr>


                                <div class="form-group row">
                                    <label class="col-md-4"><b>SPP</b></label>
                                    <select name='spp' class='form-control col-md-8' required>
                                        <option value="">~ Pilih Sub Kriteria ~</option>

                                        <?php 
                    include 'koneksi.php';
                $sql = mysqli_query($conn, "SELECT * FROM kriteria AS kr INNER JOIN subkriteria AS sk ON kr.kd_kriteria = sk.kd_kriteria  where kr.nama_kriteria like '%spp%' ORDER BY sk.nama_sub");
                    while ( $r = mysqli_fetch_array($sql)) { ?>

                                        <option
                                            value="<?php echo $r['bobot']; ?>,<?php echo $r['nilai']; ?>,<?php echo $r['nama_sub'] ?>">
                                            <?php echo $r['nama_sub']; ?></option>

                                        <?php } ?>
                                    </select>
                                </div>
                                <hr>




                                <div class="form-group row">
                                    <label class="col-md-4"><b>FASILITAS</b></label>
                                    <select name='fasilitas' class='form-control col-md-8' required>
                                        <option value="">~ Pilih Sub Kriteria ~</option>

                                        <?php 
                    include 'koneksi.php';
                $sql = mysqli_query($conn, "SELECT * FROM kriteria AS kr INNER JOIN subkriteria AS sk ON kr.kd_kriteria = sk.kd_kriteria  where kr.nama_kriteria like '%fasilitas%' ORDER BY sk.nama_sub");
                    while ( $r = mysqli_fetch_array($sql)) { ?>

                                        <option
                                            value="<?php echo $r['bobot']; ?>,<?php echo $r['nilai']; ?>,<?php echo $r['nama_sub'] ?>">
                                            <?php echo $r['nama_sub']; ?></option>

                                        <?php } ?>
                                    </select>
                                </div>
                                <hr>



                                

                                <button class="btn btn-success btn-block" name="proses6" type="submit">Cari</button>

                            </form>

                        </div>
                    </div>
                </div>

            </div>




            <!-- DataTables Example -->
            <!-- <div class="card mb-3" id="prodi">
            <div class="card-header">
              <i class="fas fa-table"> </i>
              DATA PROGRAM STUDI</div>
            <div class="card-body">


               <div class="table-responsive">

                <table class="text-center table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Prodi</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>

                  <tbody>

                <?php 
                include 'koneksi.php';

                $no = 1;

                $sql = mysqli_query($conn, "SELECT DISTINCT nama_prodi FROM prodi ");
                while($data = mysqli_fetch_array($sql)) {

                 ?>

                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $data['nama_prodi']; ?></td>
                      <td class="text-center">
                          <form action="detail_pencarian.php" method="post">
                            <input type="hidden" name="nama_prodi" value="<?php echo $data['nama_prodi']; ?>">
                          <button class="btn btn-sm btn-primary" type="submit" name="detail">
                            Kriteria Pencarian
                          </button>
                          </form>
                    </td>

                    </tr>
<?php $no++; } ?>
                  </tbody>

                </table>

              </div>
              

            </div>

        </div> -->
            <!-- /.container-fluid -->

        </div>

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>





<!-- Modal Popup untuk Edit-->
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>



<!-- Bootstrap core JavaScript-->
<script src="pts/vendor/jquery/jquery.min.js"></script>
<script src="pts/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="pts/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="pts/vendor/chart.js/Chart.min.js"></script>
<script src="pts/vendor/datatables/jquery.dataTables.js"></script>
<script src="pts/vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="pts/js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="pts/js/demo/datatables-demo.js"></script>
<script src="pts/js/demo/chart-area-demo.js"></script>

<!-- Javascript untuk popup modal Edit-->
<script type="text/javascript">
$(document).ready(function() {
    $(".open_modal").click(function(e) {
        var m = $(this).attr("id");
        $.ajax({
            url: "modal_edit.php",
            type: "GET",
            data: {
                modal_id: m,
            },
            success: function(ajaxData) {
                $("#ModalEdit").html(ajaxData);
                $("#ModalEdit").modal('show', {
                    backdrop: 'true'
                });
            }
        });
    });
});
</script>



</body>

</html>