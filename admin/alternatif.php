<?php

include 'head-nav.php';

?>

<div id="wrapper">

    <?php

include 'sidebar.php';

?>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">DATA</a>
                </li>
                <li class="breadcrumb-item active">ALTERNATIF</li>
            </ol>

            <!-- Icon Cards-->



            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    FORM ALTERNATIF
                </div>
                <div class="card-body">



                    <form action="proses.php" method="POST">



                        <div class="form-group row">
                            <label class="col-md-4"><b>Pilih Program Studi</b></label>
                            <select name='kd_prodi' id="kd_prodi" class='form-control col-md-8' required>
                                <option>Pilih Program Studi</option>
                                <?php
include 'koneksi.php';
$ss = mysqli_query($conn, "SELECT * FROM alternatif_kriteria");
$tt = mysqli_fetch_array($ss);
$kd_prodi = $tt['kd_prodi'];

$sql = mysqli_query($conn, "SELECT pr.*, pt.* FROM prodi pr, pts pt WHERE pr.kd_pts = pt.kd_pts ");
while ($r = mysqli_fetch_array($sql)) {?>

                                <option kd_pts="<?php echo $r['kd_pts']; ?>"
                                    value="<?php echo $r['kd_prodi']; ?>,<?php echo $r['nama_prodi']; ?>">
                                    <?php echo $r['nama_prodi']; ?> - <?php echo $r['nama_pts']; ?></option>

                                <?php }?>
                            </select>
                        </div>
                        <hr>

                        <input type="hidden" name="kd_pts" id="kd_pts">


                        <div class="form-group row">

                            <label class="col-md-4"><b>Akreditasi Kampus</b></label>
                            <select name='a_kampus' class='form-control col-md-8' required>
                                <option value="">~ Pilih Sub Kriteria ~</option>

                                <?php
include 'koneksi.php';
$sql = mysqli_query($conn, "SELECT * FROM kriteria AS kr INNER JOIN subkriteria AS sk ON kr.kd_kriteria = sk.kd_kriteria  where kr.nama_kriteria like '%akreditasi kampus%' ORDER BY sk.nama_sub");
while ($r = mysqli_fetch_array($sql)) {?>

                                <option value="<?php echo $r['bobot']; ?>,<?php echo $r['nilai']; ?>">
                                    <?php echo $r['nama_sub']; ?></option>

                                <?php }?>
                            </select>
                        </div>
                        <hr>




                        <div class="form-group row">
                            <label class="col-md-4"><b>Asal Jurusan SMA/SMK</b></label>
                            <select name='asal_jurusan' class='form-control col-md-8' required>
                                <option value="">~ Pilih Sub Kriteria ~</option>

                                <?php
include 'koneksi.php';

$sql = mysqli_query($conn, "SELECT * FROM kriteria AS kr INNER JOIN subkriteria AS sk ON kr.kd_kriteria = sk.kd_kriteria  where kr.nama_kriteria like '%asal jurusan%' ORDER BY sk.nama_sub");

while ($r = mysqli_fetch_array($sql)) {?>

                                <option value="<?php echo $r['bobot']; ?>,<?php echo $r['nilai']; ?>">
                                    <?php echo $r['nama_sub']; ?></option>

                                <?php }?>
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
while ($r = mysqli_fetch_array($sql)) {?>

                                <option value="<?php echo $r['bobot']; ?>,<?php echo $r['nilai']; ?>">
                                    <?php echo $r['nama_sub']; ?></option>

                                <?php }?>
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
while ($r = mysqli_fetch_array($sql)) {?>

                                <option value="<?php echo $r['bobot']; ?>,<?php echo $r['nilai']; ?>">
                                    <?php echo $r['nama_sub']; ?></option>

                                <?php }?>
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

while ($r = mysqli_fetch_array($sql)) {?>

                                <option value="<?php echo $r['bobot']; ?>,<?php echo $r['nilai']; ?>">
                                    <?php echo $r['nama_sub']; ?></option>

                                <?php }?>
                            </select>
                        </div>
                        <hr>

                        <button class="btn btn-success btn-block" name="proses6" type="submit">Perangkingan</button>

                    </form>



                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright ©FYS</span>
                </div>
            </div>
        </footer>

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
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="js/demo/datatables-demo.js"></script>
<script src="js/demo/chart-area-demo.js"></script>

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


<script type="text/javascript">
$("#kd_prodi").on("change", function() {

    // ambil nilai
    var kd_pts = $("#kd_prodi option:selected").attr("kd_pts");

    // pindahkan nilai ke input
    $("#kd_pts").val(kd_pts);



});
</script>


</body>

</html>