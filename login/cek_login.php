<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

$admin = "admin";

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn, "SELECT * FROM pts WHERE username= '$username' AND password= '$password' ");
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['username'] == "$admin" and $data['password'] == "$admin") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['nama_pts'] = $data['nama_pts'];
        // alihkan ke halaman dashboard editor
        header("location:../admin/");

        // cek jika user login sebagai editor
    } else if ($data['username'] == "$username" and $data['password'] == "$password") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['nama_pts'] = $data['nama_pts'];
        $_SESSION['kd_pts'] = $data['kd_pts'];
        // alihkan ke halaman dashboard editor
        header("location:../pts/");

    } else {

        // alihkan ke halaman login kembali
        header("location:index.php?pesan=gagal");
    }

} else {
    header("location:index.php?pesan=gagal");
}