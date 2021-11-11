<?php 

include 'koneksi.php';

//tambah data
if (isset($_POST['proses1'])) {


$nama_prodi = $_POST['nama_prodi'];
$akreditasi = $_POST['akreditasi'];
$kelebihan = $_POST['kelebihan'];
$kd_prodi = $_POST['kd_prodi'];


	$sql = mysqli_query($conn, "UPDATE prodi SET
			nama_prodi = '$nama_prodi',
			akreditasi = '$akreditasi',
			kelebihan = '$kelebihan' WHERE kd_prodi = '$kd_prodi' ");


if ($sql){
			echo "
			<script>
			alert('Data Telah dirubah');
			document.location.href = 'data-prodi.php';
			</script>";
}else {
		echo "
			<script>
			alert('Data gagal dirubah, TOLONG ISI DENGAN BENAR !!!');
			document.location.href = 'data-prodi.php';
			</script>
		";
	}
}


 ?>