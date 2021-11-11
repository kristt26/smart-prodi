

<?php 

include 'head-nav.php';

 ?>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Halaman</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Form</h6>
            <a class="dropdown-item" href="data-kantor.php">Kantor</a>
            <a class="dropdown-item" href="data-pegawai.php">Pegawai</a>
            <a class="dropdown-item" href="data-pensiun.php">Pensiun</a>
            <a class="dropdown-item" href="data-user.php">User</a>
            <!-- <a class="dropdown-item" href="pencarian.php">Pencarian</a> -->
          </div>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">KANTOR</li>
          </ol>

          <!-- Icon Cards-->
          


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-edit"> </i>
              Form Kantor</div>
            <div class="card-body">

<?php
      include "koneksi.php";

      $sql = mysqli_query($conn,"SELECT * FROM kantor WHERE id_kantor ='1'");

      $r = mysqli_fetch_array($sql);
?>
              
          <form action="editproses.php" method="POST">

            <input type="hidden" name="id_kantor" value="<?php echo $r['id_kantor']; ?>">

            <div class="form-group">
              <label><b>Nama Kantor :</b></label>
                <input type="text"  class="form-control" name="nama_kantor" value="<?php echo $r['nama_kantor']; ?>">
            </div>

            <div class="form-group">
              <label><b>Alamat Kantor :</b></label>
                <input type="text"  class="form-control" name="alamat_kantor" value="<?php echo $r['alamat_kantor']; ?>">
            </div>

            <div class="form-group">
              <label><b>Telepon Kantor :</b></label>
                <input type="text"  class="form-control" name="telepon_kantor" value="<?php echo $r['telepon_kantor']; ?>">
            </div>

            <div class="form-group">
              <label><b>Fax Kantor :</b></label>
                <input type="text"  class="form-control" name="fax_kantor" value="<?php echo $r['fax_kantor']; ?>">
            </div>

            <div class="form-group">
              <label><b>Email Kantor :</b></label>
                <input type="text"  class="form-control" name="email_kantor" value="<?php echo $r['email_kantor']; ?>">
            </div>

            <button class="btn btn-success btn-block" name="proses2" type="submit">Ubah</button>

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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
       $.ajax({
             url: "modal_edit.php",
             type: "GET",
             data : {modal_id: m,},
             success: function (ajaxData){
               $("#ModalEdit").html(ajaxData);
               $("#ModalEdit").modal('show',{backdrop: 'true'});
             }
           });
        });
      });
</script>



  </body>

</html>
