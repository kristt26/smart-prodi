<?php

include 'koneksi.php';

//tambah data
if (isset($_POST['proses1'])) {

    $cari_no = mysqli_query($conn, "SELECT MAX(kd_pts) AS kode FROM pts"); //mengambil nilai max kode terakhir
    $cari_no1 = mysqli_fetch_array($cari_no); //ubah dalam bentuk array

    $kode = substr($cari_no1['kode'], 4, 3); //memotong nilai dari kode kelompok,untuk ditambahkan

    $tambah = $kode + 1; //nilai kode ditambah 1

    if ($tambah < 10) {

        $id = "PTS-00" . $tambah;

    } else {

        $id = "PTS-0" . $tambah;

    }

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

    $sql = mysqli_query($conn, "INSERT INTO pts VALUES ('$id','$nama_pts','$alamat','$kota','$kode_pos','$no_telepon','$email','$laman_web','$akreditasi', '$fasilitas', '$username','$password' )");

    if ($sql) {
        echo "
			<script>
			alert('Data baru telah ditambah');
			document.location.href = 'data-pts.php';
			</script>";
    } else {
        echo "
			<script>
			alert('Gagal Ditambah, TOLONG ISI DENGAN BENAR !!!');
			document.location.href = 'data-pts.php';
			</script>
		";
    }
}

//=================================================================================================================
//=================================================================================================================

//tambah data
if (isset($_POST['user'])) {

    $password = $_POST['password'];
    $username = $_POST['username'];
    $level = $_POST['level'];

    $sql = mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$password','$level' )");

    if ($sql) {
        echo "
			<script>
			alert('Data baru telah ditambah');
			document.location.href = 'data-user.php';
			</script>";
    } else {
        echo "
			<script>
			alert('Gagal Ditambah, TOLONG ISI DENGAN BENAR !!!');
			document.location.href = 'data-user.php';
			</script>
		";
    }
}

//=================================================================================================================
//=================================================================================================================

//tambah data
if (isset($_POST['proses2'])) {

    $cari_no = mysqli_query($conn, "SELECT MAX(kd_prodi) AS kode FROM prodi"); //mengambil nilai max kode terakhir
    $cari_no1 = mysqli_fetch_array($cari_no); //ubah dalam bentuk array

    $kode = substr($cari_no1['kode'], 4, 3); //memotong nilai dari kode kelompok,untuk ditambahkan

    $tambah = $kode + 1; //nilai kode ditambah 1

    if ($tambah < 10) {

        $id = "P-S-00" . $tambah;

    } else if ($tambah > 99) {

        $id = "P-S-" . $tambah;

    } else {

        $id = "P-S-0" . $tambah;

    }

    $nama_prodi = $_POST['nama_prodi'];
    $jenjang = $_POST['jenjang'];
    $akreditasi = $_POST['akreditasi'];
    $kelebihan = $_POST['kelebihan'];
    $visi = $_POST['visi'];
    $misi = $_POST['misi'];
    $kd_pts = $_POST['kd_pts'];
    $spp = $_POST['spp'];

    $sql = mysqli_query($conn, "INSERT INTO prodi VALUES ('$id','$kd_pts','$nama_prodi','$akreditasi','$kelebihan', '$visi', '$misi', '$spp', '$jenjang' )");

    if ($sql) {
        echo "
			<script>
			alert('Data baru telah ditambah');
			document.location.href = 'data-prodi.php';
			</script>";
    } else {
        echo "
			<script>
			alert('Gagal Ditambah, TOLONG ISI DENGAN BENAR !!!');
			document.location.href = 'data-prodi.php';
			</script>
		";
    }
}

//=================================================================================================================
//=================================================================================================================

//tambah data
if (isset($_POST['proses3'])) {

    $cari_no = mysqli_query($conn, "SELECT MAX(kd_kriteria) AS kode FROM kriteria"); //mengambil nilai max kode terakhir
    $cari_no1 = mysqli_fetch_array($cari_no); //ubah dalam bentuk array

    $kode = substr($cari_no1['kode'], 4, 3); //memotong nilai dari kode kelompok,untuk ditambahkan

    $tambah = $kode + 1; //nilai kode ditambah 1

    if ($tambah < 10) {

        $id = "KRI-00" . $tambah;

    } else {

        $id = "KRI-0" . $tambah;

    }

    $nama_kriteria = $_POST['nama_kriteria'];
    $bobot = $_POST['bobot'];

    $hit = mysqli_query($conn, "SELECT sum(bobot) AS kode FROM kriteria ");
    $hip = mysqli_fetch_array($hit);

    if ($hip['kode'] >= 126) {
        echo "
			<script>
			alert('Gagal !!, karena Jumlah Bobot Yang anda Masukan Lebih dari 126');
			document.location.href = 'data-kriteria.php';
			</script>";
    } else {

        $sql = mysqli_query($conn, "INSERT INTO kriteria VALUES ('$id','$nama_kriteria','$bobot' )");

        if ($sql) {
            echo "
			<script>
			alert('Data baru telah ditambah');
			document.location.href = 'data-kriteria.php';
			</script>";
        } else {
            echo "
			<script>
			alert('Gagal Ditambah, TOLONG ISI DENGAN BENAR !!!');
			document.location.href = 'data-kriteria.php';
			</script>
		";
        }

    }

}

//=================================================================================================================
//=================================================================================================================

//tambah data
if (isset($_POST['proses4'])) {

    $cari_no = mysqli_query($conn, "SELECT MAX(kd_sub) AS kode FROM subkriteria"); //mengambil nilai max kode terakhir
    $cari_no1 = mysqli_fetch_array($cari_no); //ubah dalam bentuk array

    $kode = substr($cari_no1['kode'], 4, 3); //memotong nilai dari kode kelompok,untuk ditambahkan

    $tambah = $kode + 1; //nilai kode ditambah 1

    if ($tambah < 10) {

        $id = "SUB-00" . $tambah;

    } else if ($tambah > 99) {

        $id = "SUB-" . $tambah;

    } else {

        $id = "SUB-0" . $tambah;

    }

    $kd_kriteria = $_POST['kd_kriteria'];
    $nama_sub = $_POST['nama_sub'];
    $nilai = $_POST['nilai'];

    $sql = mysqli_query($conn, "INSERT INTO subkriteria VALUES ('$id','$kd_kriteria','$nama_sub','$nilai' )");

    if ($sql) {
        echo "
			<script>
			alert('Data baru telah ditambah');
			document.location.href = 'data-sub-kriteria.php';
			</script>";
    } else {
        echo "
			<script>
			alert('Gagal Ditambah, TOLONG ISI DENGAN BENAR !!!');
			document.location.href = 'data-sub-kriteria.php';
			</script>
		";
    }
}

//=================================================================================================================
//=================================================================================================================

//=================================================================================================================
//=================================================================================================================

//tambah data
if (isset($_POST['proses6'])) {

    $cari_no = mysqli_query($conn, "SELECT MAX(kd_alternatif) AS kode FROM alternatif_kriteria"); //mengambil nilai max kode terakhir
    $cari_no1 = mysqli_fetch_array($cari_no); //ubah dalam bentuk array

    $kode = substr($cari_no1['kode'], 4, 3); //memotong nilai dari kode kelompok,untuk ditambahkan

    $tambah = $kode + 1; //nilai kode ditambah 1

    if ($tambah < 10) {

        $id = "ALT-00" . $tambah;

    } else if ($tambah > 99) {

        $id = "ALT-" . $tambah;

    } else {

        $id = "ALT-0" . $tambah;

    }

    $subkriteria1 = explode(',', $_POST['a_kampus']);
    $subkriteria2 = explode(',', $_POST['a_prodi']);
    $subkriteria3 = explode(',', $_POST['asal_jurusan']);
    $subkriteria4 = explode(',', $_POST['spp']);
    $subkriteria5 = explode(',', $_POST['fasilitas']);
    $subkriteria6 = explode(',', $_POST['kd_prodi']);

    $bobot1 = $subkriteria1[0];
    $nilai1 = $subkriteria1[1];

    $bobot2 = $subkriteria2[0];
    $nilai2 = $subkriteria2[1];

    $bobot3 = $subkriteria3[0];
    $nilai3 = $subkriteria3[1];

    $bobot4 = $subkriteria4[0];
    $nilai4 = $subkriteria4[1];

    $bobot5 = $subkriteria5[0];
    $nilai5 = $subkriteria5[1];

    $nilaia = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5;

    $bobota = $bobot1 + $bobot2 + $bobot3 + $bobot4 + $bobot5;

    $kd_prodi = $subkriteria6[0];
    $nama_prodi = $subkriteria6[1];

    $kd_pts = $_POST['kd_pts'];

    $sql = mysqli_query($conn, "INSERT INTO alternatif_kriteria VALUES ('$id','$kd_prodi','$nama_prodi','$bobot1','$bobot2','$bobot3','$bobot4','$bobot5','$nilai1','$nilai2','$nilai3','$nilai4','$nilai5','$bobota','$kd_pts' )");

    if ($sql) {
        echo "
			<script>
			alert('Data baru telah ditambah');
			document.location.href = 'data-alternatif.php';
			</script>";
    } else {
        echo "
			<script>
			alert('Gagal Ditambah, TOLONG ISI DENGAN BENAR !!!');
			document.location.href = 'data-alternatif.php';
			</script>
		";
    }
}

//=================================================================================================================
//=================================================================================================================