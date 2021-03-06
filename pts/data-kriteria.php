

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
            <li class="breadcrumb-item active">KRITERIA</li>
          </ol>

          <!-- Icon Cards-->
          


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              DATA KRITERIA
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <table class="text-center table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>KODE</th>
                      <th>Nama Kriteria</th>
                      <th>Bobot</th>
                    </tr>
                  </thead>

                  <tbody>

                <?php 
                include 'koneksi.php';

                $no = 1;

                $sql = mysqli_query($conn, "SELECT * FROM kriteria ");

$hit = mysqli_query($conn,"SELECT sum(bobot) AS kode FROM kriteria ");
$hip = mysqli_fetch_array($hit);

                while($data = mysqli_fetch_array($sql)) {

                 ?>

                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $data['kd_kriteria']; ?></td>
                      <td><?php echo $data['nama_kriteria']; ?></td>
                      <td><?php echo $data['bobot']; ?> / <?php echo $hip['kode']; ?> = <?php echo substr($data['bobot'] / $hip['kode'], 0, 5); ?></td>
                    </tr>
<?php $no++; } ?>

                  <tfoot>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><b>Total bobot</b></td>
                      <td><?php echo $hip['kode'] ?></td>
                      <td></td>
                    </tr>
                  </tfoot>  

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
              <span>Copyright ??FYS</span>
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
              <span aria-hidden="true">??</span>
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
