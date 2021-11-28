<?php

include 'koneksi.php';

//tambah data
if (isset($_POST['proses1'])) {

    $kd_pts = $_POST['kd_pts'];
    $nama_pts = $_POST['nama_pts'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $kode_pos = $_POST['kode_pos'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    $laman_web = $_POST['laman_web'];
    $akreditasi = $_POST['akreditasi'];
    $fasilitas = $_POST['fasilitas_kampus'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($conn, "UPDATE pts SET
			nama_pts = '$nama_pts',
			alamat = '$alamat',
			kota = '$kota',
			kode_pos = '$kode_pos',
			no_telepon = '$no_telepon',
			email = '$email',
			laman_web = '$laman_web',
			akreditasi = '$akreditasi',
			fasilitas_kampus = '$fasilitas',
			username = '$username',
			password = '$password' WHERE kd_pts = '$kd_pts' ");

    if ($sql) {
        echo "
			<script>
			alert('Data Telah dirubah');
			document.location.href = 'data-pts.php';
			</script>";
    } else {
        echo "
			<script>
			alert('Data Homestay gagal dirubah, TOLONG ISI DENGAN BENAR !!!');
			document.location.href = 'data-pts.php';
			</script>
		";
    }
}
if (isset($_POST['proses2'])) {

    $nama_prodi = $_POST['nama_prodi'];
    $akreditasi = $_POST['akreditasi'];
    $kelebihan = $_POST['kelebihan'];
    $visi = $_POST['visi'];
    $misi = $_POST['misi'];
    $kd_prodi = $_POST['kd_prodi'];
    $spp = $_POST['spp'];

    $sql = mysqli_query($conn, "UPDATE prodi SET
			nama_prodi = '$nama_prodi',
			akreditasi = '$akreditasi',
			visi = '$visi',
			misi = '$misi',
			spp = '$spp',
			kelebihan = '$kelebihan' WHERE kd_prodi = '$kd_prodi' ");

    if ($sql) {
        echo "
			<script>
			alert('Data Telah dirubah');
			document.location.href = 'data-prodi.php';
			</script>";
    } else {
        echo "
			<script>
			alert('Data gagal dirubah, TOLONG ISI DENGAN BENAR !!!');
			document.location.href = 'data-prodi.php';
			</script>
		";
    }
}