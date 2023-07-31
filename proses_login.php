<?php
if (isset($_POST['login'])) {
    session_start();

    include 'lib/koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = sha1($password);

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' && password='$password'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['username'] = $data['username'];
        header("location: tampilan_user.php");
    } else {
        $_SESSION['error'] = "Username atau password salah";
        header("Location:login.php");
    }
}