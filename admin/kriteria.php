

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
            <li class="breadcrumb-item active">Kriteria</li>
          </ol>

          <!-- Icon Cards-->
          


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-edit"> </i>
              Form Kriteria</div>
            <div class="card-body">

              
          <form action="proses.php" method="POST">
         

            <div class="form-group row">
              <label class="col-md-4"><b>Nama Kriteria</b></label>
                <select class="form-control col-md-8" name="nama_kriteria">
                  <option>Akreditasi Kampus</option>
                  <option>Asal Jurusan SLTA</option>
                  <option>SPP</option>
                  <option>Fasilitas</option>
                  <option>Akreditasi Program Studi</option>
                </select>
            </div><hr>

            <div class="form-group row">
              <label class="col-md-4"><b>Bobot Kriteria</b></label>
                <input type="text"  class="form-control col-md-8" name="bobot">
            </div><hr>

            <button class="btn btn-success btn-block" name="proses3" type="submit">Tambah</button>

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

    <!-- Custom scriKriteria for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scriKriteria for this page-->
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
