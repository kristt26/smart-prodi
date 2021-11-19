<?php

include 'header.php';

?>

<div id="wrapper">


    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">DATA</a>
                </li>
                <li class="breadcrumb-item active">Pencarian Kriteria</li>
            </ol>

            <!-- Icon Cards-->



            <!-- DataTables Example -->
            <div class="card mb-3">

                <div class="card-body">


                    <table class="text-center table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Prodi</th>
                                <th>Program Studi</th>
                                <!-- <th>Akreditas Kampus</th>
                      <th>Akreditas Prodi</th>
                      <th>Asal Jurusan SLTA</th>
                      <th>SPP</th>
                      <th>Fasilitas</th>
                      <th>Nilai Akhir</th> -->
                                <th>Nama Universitas</th>
                                <th>Keunggulan</th>
                                <th>Rekomendasi</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
include 'koneksi.php';

$subkriteria1 = explode(',', $_POST['a_kampus']);
$subkriteria2 = explode(',', $_POST['a_prodi']);
$subkriteria3 = explode(',', $_POST['asal_jurusan']);
$subkriteria4 = explode(',', $_POST['spp']);
$subkriteria5 = explode(',', $_POST['fasilitas']);
// $subkriteria6 = explode(',', $_POST['kd_prodi']);

$bobot1 = $subkriteria1[0];
$nilai1 = $subkriteria1[1];
$namasub1 = $subkriteria1[2];

$bobot2 = $subkriteria2[0];
$nilai2 = $subkriteria2[1];
$namasub2 = $subkriteria2[2];

$bobot3 = $subkriteria3[0];
$nilai3 = $subkriteria3[1];
$namasub3 = $subkriteria3[2];

$bobot4 = $subkriteria4[0];
$nilai4 = $subkriteria4[1];
$namasub4 = $subkriteria4[2];

$bobot5 = $subkriteria5[0];
$nilai5 = $subkriteria5[1];
$namasub5 = $subkriteria5[2];

$nilaia = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5;

$bobota = $bobot1 + $bobot2 + $bobot3 + $bobot4 + $bobot5;
$kd_prodi = $_POST['prodi'];

// $kd_prodi = $subkriteria6[0];
// $nama_prodi = $subkriteria6[1];

$no = 1;

$rr = mysqli_query($conn, "SELECT * from alternatif_kriteria where sub_a_kampus = '$nilai1' AND sub_a_prodi = '$nilai2'  AND sub_spp = '$nilai4'") or die(mysqli_error($conn));
$uu = mysqli_fetch_array($rr);

$kode = $uu['kd_prodi'];

// $sql = mysqli_query($conn, "SELECT * FROM kriteria AS kr INNER JOIN alternatif_kriteria AS ak ON kr.kd_pts = ak.kd_pts where kd_prodi = '$kode' ");

$sql = mysqli_query($conn, "SELECT `alternatif_kriteria`.*,
                `prodi`.`kelebihan` FROM `alternatif_kriteria` LEFT JOIN `prodi` ON `prodi`.`kd_prodi` = `alternatif_kriteria`.`kd_prodi` where prodi.nama_prodi='$kd_prodi' AND  sub_a_kampus = '$nilai1' AND sub_a_prodi = '$nilai2'  AND sub_asal_jurusan = '$nilai3' AND sub_spp = '$nilai4' ");

$sql1 = mysqli_query($conn, "SELECT MAX(sub_a_kampus) AS kode FROM alternatif_kriteria ");
$sql2 = mysqli_query($conn, "SELECT MAX(sub_a_prodi) AS kode FROM alternatif_kriteria ");
$sql3 = mysqli_query($conn, "SELECT MAX(sub_asal_jurusan) AS kode FROM alternatif_kriteria ");
$sql4 = mysqli_query($conn, "SELECT MAX(sub_spp) AS kode FROM alternatif_kriteria ");
$sql5 = mysqli_query($conn, "SELECT MAX(sub_fasilitas) AS kode FROM alternatif_kriteria ");

$cc1 = mysqli_fetch_array($sql1);
$cc2 = mysqli_fetch_array($sql2);
$cc3 = mysqli_fetch_array($sql3);
$cc4 = mysqli_fetch_array($sql4);
$cc5 = mysqli_fetch_array($sql5);

$a1 = $cc1['kode'];
$a2 = $cc2['kode'];
$a3 = $cc3['kode'];
$a4 = $cc4['kode'];
$a5 = $cc5['kode'];

$lqs1 = mysqli_query($conn, "SELECT MIN(sub_a_kampus) AS kode FROM alternatif_kriteria ");
$lqs2 = mysqli_query($conn, "SELECT MIN(sub_a_prodi) AS kode FROM alternatif_kriteria ");
$lqs3 = mysqli_query($conn, "SELECT MIN(sub_asal_jurusan) AS kode FROM alternatif_kriteria ");
$lqs4 = mysqli_query($conn, "SELECT MIN(sub_spp) AS kode FROM alternatif_kriteria ");
$lqs5 = mysqli_query($conn, "SELECT MIN(sub_fasilitas) AS kode FROM alternatif_kriteria ");

$dd1 = mysqli_fetch_array($lqs1);
$dd2 = mysqli_fetch_array($lqs2);
$dd3 = mysqli_fetch_array($lqs3);
$dd4 = mysqli_fetch_array($lqs4);
$dd5 = mysqli_fetch_array($lqs5);

$b1 = $dd1['kode'];
$b2 = $dd2['kode'];
$b3 = $dd3['kode'];
$b4 = $dd4['kode'];
$b5 = $dd5['kode'];

$ab1 = $a1 - $b1;
$ab2 = $a2 - $b2;
$ab3 = $a3 - $b3;
$ab4 = $a4 - $b4;
$ab5 = $a5 - $b5;

while ($data = mysqli_fetch_array($sql)) {

    ?>

                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['kd_prodi']; ?></td>
                                <td><a href="#" data-toggle='modal'
                                        data-target='#prodi'><?php echo $data['nama_prodi']; ?></a></td>
                                <!-- <td><?php echo substr($data['a_kampus'] / 126 * ($data['sub_a_kampus'] - $b1) / $ab1, 0, 8); ?></td>
                      <td><?php echo substr($data['a_prodi'] / 126 * ($data['sub_a_prodi'] - $b2) / $ab2, 0, 8); ?></td>
                      <td><?php echo substr($data['asal_jurusan'] / 126 * ($data['sub_asal_jurusan'] - $b3) / $ab3, 0, 8); ?></td>
                      <td><?php echo substr($data['spp'] / 126 * ($data['sub_spp'] - $b4) / $ab4, 0, 8); ?></td>
                      <td><?php echo substr($data['fasilitas'] / 126 * ($data['sub_fasilitas'] - $b5) / $ab5, 0, 8); ?></td>


<?php if (($data['a_kampus'] / 126 * ($data['sub_a_kampus'] - $b1) / $ab1) + ($data['a_prodi'] / 126 * ($data['sub_a_prodi'] - $b2) / $ab2) + ($data['asal_jurusan'] / 126 * ($data['sub_asal_jurusan'] - $b3) / $ab3) + ($data['spp'] / 126 * ($data['sub_spp'] - $b4) / $ab4) + ($data['fasilitas'] / 126 * ($data['sub_fasilitas'] - $b5) / $ab5) > 0.5) {?>

  <td class="bg-success"><?php echo substr(($data['a_kampus'] / 126 * ($data['sub_a_kampus'] - $b1) / $ab1) + ($data['a_prodi'] / 126 * ($data['sub_a_prodi'] - $b2) / $ab2) + ($data['asal_jurusan'] / 126 * ($data['sub_asal_jurusan'] - $b3) / $ab3) + ($data['spp'] / 126 * ($data['sub_spp'] - $b4) / $ab4) + ($data['fasilitas'] / 126 * ($data['sub_fasilitas'] - $b5) / $ab5), 0, 5) ?></td>

<?php } else {?>

  <td><?php echo substr(($data['a_kampus'] / 126 * ($data['sub_a_kampus'] - $b1) / $ab1) + ($data['a_prodi'] / 126 * ($data['sub_a_prodi'] - $b2) / $ab2) + ($data['asal_jurusan'] / 126 * ($data['sub_asal_jurusan'] - $b3) / $ab3) + ($data['spp'] / 126 * ($data['sub_spp'] - $b4) / $ab4) + ($data['fasilitas'] / 126 * ($data['sub_fasilitas'] - $b5) / $ab5), 0, 8) ?></td>

<?php }?>  -->

                                <td>
                                    <?php
$kode = $data['kd_pts'];
    $dt = mysqli_query($conn, "SELECT * FROM pts where kd_pts = '$kode' ");
    $dat = mysqli_fetch_array($dt);
    ?>
                                    <a href="#" data-toggle='modal'
                                        data-target='#universitas'><?php echo $dat['nama_pts'] ?></a>

                                    <!-- Logout Modal-->
                                    <div class="modal fade" id="universitas" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Universitas Detail
                                                    </h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group row">
                                                            <label for="staticEmail"
                                                                class="col-sm-4 col-form-label  text-left">Nama
                                                                Universitas</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" readonly
                                                                    class="form-control-plaintext" id="staticEmail"
                                                                    value=": <?=$dat['nama_pts'];?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail"
                                                                class="col-sm-4 col-form-label  text-left">Akreditasi</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" readonly
                                                                    class="form-control-plaintext" id="staticEmail"
                                                                    value=": <?=$dat['akreditasi'];?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail"
                                                                class="col-sm-4 col-form-label  text-left">Alamat</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" readonly
                                                                    class="form-control-plaintext" id="staticEmail"
                                                                    value=": <?=$dat['alamat'];?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail"
                                                                class="col-sm-4 col-form-label  text-left">Kode
                                                                Pos</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" readonly
                                                                    class="form-control-plaintext" id="staticEmail"
                                                                    value=": <?=$dat['kode_pos'];?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail"
                                                                class="col-sm-4 col-form-label  text-left">Telepon</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" readonly
                                                                    class="form-control-plaintext" id="staticEmail"
                                                                    value=": <?=$dat['no_telepon'];?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail"
                                                                class="col-sm-4 col-form-label  text-left">Email</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" readonly
                                                                    class="form-control-plaintext" id="staticEmail"
                                                                    value=": <?=$dat['email'];?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail"
                                                                class="col-sm-4 col-form-label  text-left">Website</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" readonly
                                                                    class="form-control-plaintext" id="staticEmail"
                                                                    value=": <?=$dat['laman_web'];?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail"
                                                                class="col-sm-4 col-form-label  text-left">Fasilitas</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" readonly
                                                                    class="form-control-plaintext" id="staticEmail"
                                                                    value=": <?=$dat['fasilitas_kampus'];?>">
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!-- <table class="text-center table table-bordered" id="dataTable"
                                                        width="100%" cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th>No. Telp.</th>
                                                                <th>Laman Web</th>
                                                                <th>Akreditas</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>

                                                            <tr>
                                                                <td><?php echo $dat['no_telepon']; ?></td>
                                                                <td><?php echo $dat['laman_web']; ?></td>
                                                                <td><?php echo $dat['akreditasi']; ?></td>

                                                            </tr>
                                                        </tbody>

                                                    </table> -->

                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><?php echo $data['kelebihan']; ?></td>

                                <td class="text-center">
                                    <?php (($data['a_kampus'] / 126 * ($data['sub_a_kampus'] - $b1) / $ab1) + ($data['a_prodi'] / 126 * ($data['sub_a_prodi'] - $b2) / $ab2) + ($data['asal_jurusan'] / 126 * ($data['sub_asal_jurusan'] - $b3) / $ab3) + ($data['spp'] / 126 * ($data['sub_spp'] - $b4) / $ab4) + ($data['fasilitas'] / 126 * ($data['sub_fasilitas'] - $b5) / $ab5) > 0.7)?>

                                    <form action="proses.php" method="POST">

                                        <input type="hidden" name="a_kampus"
                                            value="<?php echo $data['a_kampus'] / 126 * ($data['sub_a_kampus'] - $b1) / $ab1; ?>">
                                        <input type="hidden" name="a_prodi"
                                            value="<?php echo $data['a_prodi'] / 126 * ($data['sub_a_prodi'] - $b2) / $ab2; ?>">
                                        <input type="hidden" name="asal_jurusan"
                                            value="<?php echo $data['asal_jurusan'] / 126 * ($data['sub_asal_jurusan'] - $b3) / $ab3; ?>">
                                        <input type="hidden" name="spp"
                                            value="<?php echo $data['spp'] / 126 * ($data['sub_spp'] - $b4) / $ab4; ?>">
                                        <input type="hidden" name="fasilitas"
                                            value="<?php echo $data['fasilitas'] / 126 * ($data['sub_fasilitas'] - $b5) / $ab5; ?>">
                                        <input type="hidden" name="nama_prodi"
                                            value="<?php echo $data['nama_prodi']; ?>">
                                        <input type="hidden" name="kd_prodi" value="<?php echo $data['kd_prodi']; ?>">
                                        <input type="hidden" name="kd_pts" value="<?php echo $data['kd_pts']; ?>">

                                        <input type="hidden" name="hasil"
                                            value="<?php echo ($data['a_kampus'] / 126 * ($data['sub_a_kampus'] - $b1) / $ab1) + ($data['a_prodi'] / 126 * ($data['sub_a_prodi'] - $b2) / $ab2) + ($data['asal_jurusan'] / 126 * ($data['sub_asal_jurusan'] - $b3) / $ab3) + ($data['spp'] / 126 * ($data['sub_spp'] - $b4) / $ab4) + ($data['fasilitas'] / 126 * ($data['sub_fasilitas'] - $b5) / $ab5) ?>">

                                        <button class="btn btn-success btn-block" type="submit"
                                            formtarget="_blank">Hasil
                                            Perhitungan</button>
                                    </form>
                                </td>

                            </tr>
                            <?php $no++;}?>
                        </tbody>

                    </table>

                </div>

            </div>

        </div>
        <!-- /.container-fluid -->



        <!-- Logout Modal-->
        <div class="modal fade" id="prodi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sub Kriteria Prodi</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-4 col-form-label text-left">Akreditasi
                                    Kampus</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": <?=$namasub1;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-4 col-form-label text-left">Akreditasi
                                    Prodi</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": <?=$namasub2;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-4 col-form-label text-left">Asal Jurusan
                                    SLTA</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": <?=$namasub3;?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-4 col-form-label text-left">SPP</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": <?=$namasub4;?>">
                                </div>
                            </div>
                        </form>

                        <!-- <table class="text-center table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Akreditas Kampus</th>
                                    <th>Akreditas Prodi</th>
                                    <th>Asal Jurusan SLTA</th>
                                    <th>SPP</th>
                                    <th>Fasilitas</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td><?php echo $namasub1; ?></td>
                                    <td><?php echo $namasub2; ?></td>
                                    <td><?php echo $namasub3; ?></td>
                                    <td><?php echo $namasub4; ?></td>
                                    <td><?php echo $namasub5; ?></td>

                                </tr>
                            </tbody>

                        </table> -->

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>





    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>



<!-- Bootstrap core JavaScript-->
<script src="admin/vendor/jquery/jquery.min.js"></script>
<script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="admin/vendor/chart.js/Chart.min.js"></script>
<script src="admin/vendor/datatables/jquery.dataTables.js"></script>
<script src="admin/vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scriKriteria for all pages-->
<script src="admin/js/sb-admin.min.js"></script>

<!-- Demo scriKriteria for this page-->
<script src="admin/js/demo/datatables-demo.js"></script>
<script src="admin/js/demo/chart-area-demo.js"></script>

<!-- Javascript untuk popup modal Edit-->
<script type="text/javascript">
$(document).ready(function() {
    $(".open_modal").click(function(e) {
        $("#prodi").modal('show', {
            backdrop: 'true'
        });
    });
});
</script>



</body>

</html>