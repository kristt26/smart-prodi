<?php
	include "koneksi.php";

if (isset($_GET['hapus1'])) {

	$hapus = $_GET['hapus1'];

	mysqli_query($conn,"DELETE FROM prodi WHERE kd_prodi = '$hapus' ");

	header('location:data-prodi.php');

}


if (isset($_GET['hapus2'])) {

	$hapus = $_GET['hapus2'];

	mysqli_query($conn,"DELETE FROM kriteria WHERE kd_kriteria = '$hapus' ");

	header('location:data-kriteria.php');

}

if (isset($_GET['hapus3'])) {

	$hapus = $_GET['hapus3'];

	mysqli_query($conn,"DELETE FROM subkriteria WHERE kd_sub = '$hapus' ");

	header('location:data-sub-kriteria.php');

}

if (isset($_GET['hapus4'])) {

	$hapus = $_GET['hapus4'];

	mysqli_query($conn,"DELETE FROM alternatif_kriteria WHERE kd_alternatif = '$hapus' ");

	header('location:data-alternatif.php');

}



?>