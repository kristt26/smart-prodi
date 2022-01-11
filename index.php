<?php

include 'header.php';

?>

<section id="portfolio" class="portfolio-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card bg-light">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-center">SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN PROGRAM STUDI PADA
                            PERGURUAN TINGGI SWASTA DI KOTA JAYAPURA MENGGUNAKAN METODE SMART BERBASIS WEB</h4>
                        <div class="card">
                            <img class="card-img-top" src="pts/logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container -->
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