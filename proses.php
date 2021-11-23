<?php

include 'koneksi.php';

$subkriteria1 = $_POST['a_kampus'];
$subkriteria2 = $_POST['a_prodi'];
$subkriteria3 = $_POST['asal_jurusan'];
$subkriteria4 = $_POST['spp'];
$subkriteria5 = $_POST['fasilitas'];
$hasil = $_POST['hasil'];

$kd_prodi = $_POST['kd_prodi'];
$nama_prodi = $_POST['nama_prodi'];
$kd_pts = $_POST['kd_pts'];

$dt = mysqli_query($conn, "SELECT * FROM pts where kd_pts = '$kd_pts' ");
$dat = mysqli_fetch_array($dt);

$rr = mysqli_query($conn, "SELECT * from alternatif_kriteria where kd_prodi = '$kd_prodi' ");
$uu = mysqli_fetch_array($rr);

// $sql = mysqli_query($conn, "SELECT * FROM kriteria AS kr INNER JOIN subkriteria AS sk ON kr.kd_kriteria = sk.kd_kriteria INNER JOIN prodi AS pr ON sk.kd_prodi = pr.kd_prodi INNER JOIN pts AS pt ON pr.kd_pts = pt.kd_pts where pr.nama_prodi like '$nama_prodi'  ");

$sql = mysqli_query($conn, "INSERT INTO hasil_akhir VALUES ('','$kd_prodi','$nama_prodi','$subkriteria1','$subkriteria2','$subkriteria3','$subkriteria4','$subkriteria5','$hasil','$kd_pts' )");

if ($sql) {

//=================================================================================================================
//=================================================================================================================

//=================================================================================================================
//=================================================================================================================

    ?>



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
                <li class="breadcrumb-item active">Hasil Perhitungan</li>
            </ol>

            <!-- Icon Cards-->



            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                </div>
                <div class="card-body">

                    <table class="text-center table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Kode Prodi</th>
                                <th>Nama Prodi</th>
                                <th>Akreditas Kampus</th>
                                <th>Akreditas Prodi</th>
                                <th>Asal Jurusan SLTA</th>
                                <th>SPP</th>
                                <th>Fasilitas</th>
                                <th>Nilai Akhir</th>
                                <th>Nama Universitas</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>

                            <td><?php echo $kd_prodi ?></td>
                            <td><?php echo $nama_prodi ?></td>
                            <td><?php echo $subkriteria1 ?></td>
                            <td><?php echo $subkriteria2 ?></td>
                            <td><?php echo $subkriteria3 ?></td>
                            <td><?php echo $subkriteria4 ?></td>
                            <td><?php echo $subkriteria5 ?></td>

                            <?php if ($hasil > 0.5) {?>
                            <td class="bg-success"><?php echo $hasil ?></td>
                            <?php } else {?>
                            <td><?php echo $hasil ?></td>
                            <?php }?>

                            <td><?php echo $dat['nama_pts'] ?></td>
                            <td>
                                <?php

    ?>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                    data-target="#testing">Testing</button>

                                <div class="modal fade" id="testing" tabindex="-1" role="dialog"
                                    aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detail PTS</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group row">
                                                        <label for="staticEmail"
                                                            class="col-sm-4 col-form-label  text-left">Nama
                                                            Universitas</label>
                                                        <div class="col-sm-8">
                                                            <textarea readonly
                                                                class="form-control-plaintext">: <?=$dat['nama_pts'];?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="staticEmail"
                                                            class="col-sm-4 col-form-label  text-left">Akreditasi</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="staticEmail" value=": <?=$dat['akreditasi'];?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="staticEmail"
                                                            class="col-sm-4 col-form-label  text-left">Alamat</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="staticEmail" value=": <?=$dat['alamat'];?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="staticEmail"
                                                            class="col-sm-4 col-form-label  text-left">Kode
                                                            Pos</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="staticEmail" value=": <?=$dat['kode_pos'];?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="staticEmail"
                                                            class="col-sm-4 col-form-label  text-left">Telepon</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="staticEmail" value=": <?=$dat['no_telepon'];?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="staticEmail"
                                                            class="col-sm-4 col-form-label  text-left">Email</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="staticEmail" value=": <?=$dat['email'];?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="staticEmail"
                                                            class="col-sm-4 col-form-label  text-left">Website</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="staticEmail" value=": <?=$dat['laman_web'];?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="staticEmail"
                                                            class="col-sm-4 col-form-label  text-left">Fasilitas</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control-plaintext"
                                                                id="staticEmail"
                                                                value=": <?=$dat['fasilitas_kampus'];?>">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
        <!-- /.container-fluid -->






        <!-- Logout Modal-->
        <div class="modal fade" id="hasil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hasil Metode Smart</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

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
<script src="pts/vendor/jquery/jquery.min.js"></script>
<script src="pts/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="pts/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="pts/vendor/chart.js/Chart.min.js"></script>
<script src="pts/vendor/datatables/jquery.dataTables.js"></script>
<script src="pts/vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scriKriteria for all pages-->
<script src="pts/js/sb-admin.min.js"></script>

<!-- Demo scriKriteria for this page-->
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

<?php }?>