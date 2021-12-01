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
                <li class="breadcrumb-item active">PRODI</li>
            </ol>

            <!-- Icon Cards-->



            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    DATA PRODI
                    <a href="prodi.php" class="btn btn-success">
                        <i class="fas fa-pen"> </i>Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="text-center table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>KODE</th>
                                    <th>Nama Prodi</th>
                                    <th>Jenjang</th>
                                    <th>Akreditasi</th>
                                    <th>Visi</th>
                                    <th>Misi</th>
                                    <th>Keunggulan</th>
                                    <th>PTS</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
include 'koneksi.php';

$no = 1;

$sql = mysqli_query($conn, "SELECT pr.*, pt.* FROM prodi pr, pts pt where pr.kd_pts = pt.kd_pts order by pr.nama_prodi ASC  ");
while ($data = mysqli_fetch_array($sql)) {

    ?>

                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data['kd_prodi']; ?></td>
                                    <td><?php echo $data['nama_prodi']; ?></td>
                                    <td><?php echo $data['jenjang']; ?></td>
                                    <td><?php echo $data['akreditasi']; ?></td>
                                    <td><?php echo $data['kelebihan']; ?></td>
                                    <td><?php echo $data['visi']; ?></td>
                                    <td><?php echo $data['misi']; ?></td>
                                    <td><?php echo $data['nama_pts']; ?></td>
                                    <td class="text-center">
                                        <a href="hapus.php?hapus1=<?php echo $data['0']; ?> "
                                            onclick="return confirm('Anda yakin untuk Hapus ini  ??')" title="Hapus">
                                            <button class="btn btn-sm btn-danger"><i class="fa fa-times"> </i></button>
                                        </a>

                                        <a href="#" title="Edit" class='open_modal' id='<?php echo $data['0']; ?>'
                                            onclick="return confirm('Anda yakin untuk Edit ini  ??')">
                                            <button class="btn btn-sm btn-info">
                                                <i class="fa fa-edit"></i></button>
                                        </a>
                                    </td>

                                </tr>
                                <?php $no++;}?>
                            </tbody>

                        </table>

                    </div>
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
$(".open_modal").click(function(e) {
    var m = $(this).attr("id");
    $.ajax({
        url: "modal_prodi.php",
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
// $(document).ready(function() {});
</script>



</body>

</html>