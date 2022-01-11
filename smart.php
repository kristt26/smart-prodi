<?php

include 'header.php';

?>

<section id="portfolio" class="portfolio-area">
    <div class="container">
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
                                KONSULTASI
                            </div>

                            <hr>
                            <form action="pencarian.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-md-4"><b>Prodi Pilihan</b></label>
                                    <select name='prodi' class='form-control col-md-8'>
                                        <option value="">~ Pilih Program Studi ~</option>

                                        <?php
include 'koneksi.php';

$sql = mysqli_query($conn, "SELECT DISTINCT nama_prodi, kd_prodi FROM prodi ");

while ($prodi = mysqli_fetch_array($sql)) {?>

                                        <option value="<?=$prodi['nama_prodi']?>">
                                            <?php echo $prodi['nama_prodi']; ?></option>

                                        <?php }?>
                                    </select>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-md-4"><b>Asal Jurusan di SMA/SMK</b></label>
                                    <select name='asal_jurusan' class='form-control col-md-8' required>
                                        <option value="">~ Pilih Sub Kriteria ~</option>

                                        <?php
include 'koneksi.php';

$sql = mysqli_query($conn, "SELECT * FROM kriteria AS kr INNER JOIN subkriteria AS sk ON kr.kd_kriteria = sk.kd_kriteria  where kr.nama_kriteria like '%asal jurusan%' ORDER BY sk.nama_sub");

while ($r = mysqli_fetch_array($sql)) {?>

                                        <option
                                            value="<?php echo $r['bobot']; ?>,<?php echo $r['nilai']; ?>,<?php echo $r['nama_sub'] ?>">
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

                                        <option
                                            value="<?php echo $r['bobot']; ?>,<?php echo $r['nilai']; ?>,<?php echo $r['nama_sub'] ?>">
                                            <?php echo $r['nama_sub']; ?></option>

                                        <?php }?>
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
while ($r = mysqli_fetch_array($sql)) {?>

                                        <option
                                            value="<?php echo $r['bobot']; ?>,<?php echo $r['nilai']; ?>,<?php echo $r['nama_sub'] ?>">
                                            <?php echo $r['nama_sub']; ?></option>

                                        <?php }?>
                                    </select>
                                </div>
                                <hr>


                                <div class="form-group row">
                                    <label class="col-md-4"><b>SPP Per Semester</b></label>
                                    <select name='spp' class='form-control col-md-8' required>
                                        <option value="">~ Pilih Sub Kriteria ~</option>
                                        <option value="2000000 - 3000000">Rp. 2.000.000 - Rp. 3.000.000</option>
                                        <option value="3100000 - 4000000">Rp. 3.100.000 - Rp. 4.000.000</option>
                                        <option value="4100000 - 4000000">Rp. 4.100.000 - Rp. 5.000.000</option>

                                        <!-- <?php
include 'koneksi.php';
$sql = mysqli_query($conn, "SELECT * FROM kriteria AS kr INNER JOIN subkriteria AS sk ON kr.kd_kriteria = sk.kd_kriteria  where kr.nama_kriteria like '%spp%' ORDER BY sk.nama_sub");
while ($r = mysqli_fetch_array($sql)) {?>

                        <option
                            value="<?php echo $r['bobot']; ?>,<?php echo $r['nilai']; ?>,<?php echo $r['nama_sub'] ?>">
                            <?php echo $r['nama_sub']; ?></option>

                        <?php }?> -->
                                    </select>
                                </div>
                                <hr>




                                <div class="form-group row">
                                    <label class="col-md-4"><b>Fasilitas Kampus</b></label>
                                    <select name='fasilitas' class='form-control col-md-8' required>
                                        <option value="">~ Pilih Sub Kriteria ~</option>

                                        <?php
include 'koneksi.php';
$sql = mysqli_query($conn, "SELECT * FROM kriteria AS kr INNER JOIN subkriteria AS sk ON kr.kd_kriteria = sk.kd_kriteria  where kr.nama_kriteria like '%fasilitas%' ORDER BY sk.nama_sub");
while ($r = mysqli_fetch_array($sql)) {?>

                                        <option
                                            value="<?php echo $r['bobot']; ?>,<?php echo $r['nilai']; ?>,<?php echo $r['nama_sub'] ?>">
                                            <?php echo $r['nama_sub']; ?></option>

                                        <?php }?>
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
    DATA PROGRAM STUDI
</div>
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
while ($data = mysqli_fetch_array($sql)) {

?>

                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama_prodi']; ?></td>
                    <td class="text-center">
                        <form action="detail_pencarian.php" method="post">
                            <input type="hidden" name="nama_prodi"
                                value="<?php echo $data['nama_prodi']; ?>">
                            <button class="btn btn-sm btn-primary" type="submit" name="detail">
                                Kriteria Pencarian
                            </button>
                        </form>
                    </td>

                </tr>
                <?php $no++;}?>
            </tbody>

        </table>

    </div>


</div>

</div> -->
            <!-- /.container-fluid -->

        </div>
    </div>
    </div>



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
    <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">

    </div>




    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Isotope js ======-->
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!--====== Images Loaded js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling js ======-->
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>

    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
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