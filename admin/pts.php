

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
              <a href="#">FORM</a>
            </li>
            <li class="breadcrumb-item active">PTS</li>
          </ol>

          <!-- Icon Cards-->
          


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-edit"> </i>
              Form PTS</div>
            <div class="card-body">

              
          <form action="proses.php" method="POST">

            <div class="form-group row">
              <label class="col-md-4"><b>Nama Perguruan Tinggi Swasta</b></label>
                <input type="text"  class="form-control col-md-8" name="nama_pts">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Alamat</b></label>
                <input type="text"  class="form-control col-md-8" name="alamat">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Kota</b></label>
                <input type="text"  class="form-control col-md-8" name="kota">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Kode pos</b></label>
                <input type="number"  class="form-control col-md-8" name="kode_pos">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Nomor Telepon</b></label>
                <input type="number"  class="form-control col-md-8" name="no_telepon">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Email</b></label>
                <input type="email"  class="form-control col-md-8" name="email">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Halaman Web</b></label>
                <input type="text"  class="form-control col-md-8" name="laman_web">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Akreditasi</b></label>
                <input type="text"  class="form-control col-md-8" name="akreditasi">
            </div><hr>
            <div class="form-group row">
              <label class="col-md-4"><b>Fasilitas Kampus</b></label>
                <textarea type="text"  class="form-control col-md-8" name="fasilitas_kampus"></textarea>
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Username</b></label>
                <input type="text"  class="form-control col-md-8" name="username">
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Password</b></label>
                <input type="text"  class="form-control col-md-8" name="password">
            </div><hr>

            <button class="btn btn-success btn-block" name="proses1" type="submit">Tambah</button>

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
