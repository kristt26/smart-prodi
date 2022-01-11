<?php 

include 'header.php';

 ?>

<section id="portfolio" class="portfolio-area">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a class="btn" href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a class="btn" href="#prodi">Searhing</a>
            </li>
        </ol>
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="list-group">
                            <?php
                                    $text =  $_POST['textSearching'];
                                    include 'koneksi.php';
                                    $query = mysqli_query($conn, "SELECT * FROM pts WHERE nama_pts LIKE '%$text%'") or die();
                                    while($x = mysqli_fetch_array($query)){
                                        $x['set'] = 'pt';
                                        $kode_pts = $x['kd_pts'];
                                        $dt = mysqli_query($conn, "SELECT * FROM pts where kd_pts = '$kode_pts'"); 
                                        $dat = mysqli_fetch_array($dt);
                                        ?>
                            <button type="button" class="list-group-item list-group-item-action"><a
                                    href="javascript:void();" data-toggle="modal"
                                    data-target="#<?= $x['kd_pts']?>"><?= $x['nama_pts'];?></a></button>
                            <div class="modal fade" id="<?= $x['kd_pts']?>" tabindex="-1" role="dialog"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content  bg-warning">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Detail PTS</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <td width="30%">Nama Universitas</td>
                                                        <td><?= $dat['nama_pts'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Akreditasi</td>
                                                        <td><?= $dat['akreditasi'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td><?= $dat['alamat'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kode Pos</td>
                                                        <td><?= $dat['kode_pos'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Telepon</td>
                                                        <td><?= $dat['no_telepon'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td><?= $dat['email'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Website</td>
                                                        <td><?= $dat['laman_web'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fasilitas</td>
                                                        <td><?= $dat['fasilitas_kampus'];?></td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                        // echo "<br>";
                                    }
                                    $query = mysqli_query($conn, "SELECT
                                        *
                                    FROM
                                        `prodi`
                                        LEFT JOIN `pts` ON `prodi`.`kd_pts` = `pts`.`kd_pts` WHERE nama_prodi LIKE '%$text%'") or die();
                                    while($x = mysqli_fetch_array($query)){
                                        $x['set'] = 'prodi';
                                        $kode_pts = $x['kd_pts'];
                                        $kode_prodi = $x['kd_prodi'];
                                        $dt = mysqli_query($conn, "SELECT * FROM pts where kd_pts = '$kode_pts'"); 
                                        $dat = mysqli_fetch_array($dt);
                                        $dt_prodi = mysqli_query($conn, "SELECT * FROM prodi where kd_prodi = '$kode_prodi'"); 
                                        $datProdi = mysqli_fetch_array($dt_prodi);
                                        $q_kriteria = mysqli_query($conn, "SELECT * FROM kriteria"); 
                                        while ($dt_kriteria = mysqli_fetch_array($q_kriteria)) {
                                            $semua = 0;
                                            $sub_spp = 0;
                                            $q_alternatif = mysqli_query($conn, "SELECT * FROM alternatif_kriteria where kd_prodi = '$kode_prodi'");
                                            while ($s = mysqli_fetch_array($q_alternatif)) {
                                                if($s['sub_asal_jurusan']==10){
                                                    $semua = 10;
                                                }else{
                                                    $semua = 9;
                                                }

                                                if($s['sub_asal_jurusan']==10){
                                                    $sub_spp=10; 
                                                }else if($s['sub_asal_jurusan']==9){
                                                    $sub_spp=9; 
                                                }else {
                                                    $sub_spp=8; 
                                                }
                                            }
                                        }
                                        ?>
                            <button type="button" class="list-group-item list-group-item-action"><a
                                    href="javascript:void();" data-toggle="modal"
                                    data-target="#<?= $x['kd_prodi']?>"><?= $x['nama_prodi']?></a> | <a
                                    href="javascript:void();" data-toggle="modal"
                                    data-target="#<?= $x['kd_pts'].$x['kd_prodi']?>"><?= $x['nama_pts'];?></a></button>
                            <div class="modal fade" id="<?= $x['kd_prodi']?>" tabindex="-1" role="dialog"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content bg-warning">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Detail Prodi</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <td width="30%">Nama Prodi</td>
                                                        <td><?= $datProdi['nama_prodi'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="30%">Jenjang</td>
                                                        <td><?= $datProdi['jenjang'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="30%">Akreditasi</td>
                                                        <td><?= $datProdi['akreditasi'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="30%">Syarat Masuk</td>
                                                        <td><?= $semua == 10 ? 'Semua Jurusan' : 'IPA, IPS, Bahasa'?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="30%">SPP Per Semester</td>
                                                        <td>Rp.
                                                            <?= number_format($datProdi['spp'], '2', ',','.');?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="30%">Visi</td>
                                                        <td><?= $datProdi['visi'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="30%">Misi</td>
                                                        <td><?= $datProdi['misi'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="30%">Profile Kelulusan</td>
                                                        <td><?= $datProdi['kelebihan'];?></td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="<?= $x['kd_pts'].$x['kd_prodi']?>" tabindex="-1" role="dialog"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content bg-warning">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Detail PTS</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <td width="30%">Nama Universitas</td>
                                                        <td><?= $dat['nama_pts'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Akreditasi</td>
                                                        <td><?= $dat['akreditasi'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td><?= $dat['alamat'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kode Pos</td>
                                                        <td><?= $dat['kode_pos'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Telepon</td>
                                                        <td><?= $dat['no_telepon'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td><?= $dat['email'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Website</td>
                                                        <td><?= $dat['laman_web'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fasilitas</td>
                                                        <td><?= $dat['fasilitas_kampus'];?></td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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