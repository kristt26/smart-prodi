<?php 

include 'header.php';

 ?>

<div id="wrapper">


    <div id="content-wrapper">

        <div class="container">

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="btn" href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a class="btn" href="#prodi">Pilih Program Studi</a>
                </li>
            </ol>
            <div class="row">
                <div class="col-md-12 mb-3">
                  <div class="card bg-light">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-body">
                      <h4 class="card-title text-center">SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN PROGRAM STUDI PADA PERGURUAN TINGGI SWASTA DI KOTA JAYAPURA MENGGUNAKAN METODE SMART BERBASIS WEB</h4>
                      <!-- <p class="card-text">Text</p> -->
                    </div>
                  </div>
                </div>
            </div>
        </div>
        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="pts/vendor/jquery/jquery.min.js"></script>
<script src="pts/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="pts/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="pts/vendor/chart.js/Chart.min.js"></script>
<script src="pts/vendor/datatables/jquery.dataTables.js"></script>
<script src="pts/vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="pts/js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
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