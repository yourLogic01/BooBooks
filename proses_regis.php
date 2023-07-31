<?php
include 'lib/koneksi.php';
if (isset($_POST['regis'])) {
    $username = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['username']))));
    $password = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['password']))));
    $nama_lengkap = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['nama_lengkap']))));
    $no_telp = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['no_telp']))));



    $password = sha1($password);

    $query = mysqli_query(mysql: $koneksi, query: "INSERT INTO user VALUES (null,'$nama_lengkap','$username','$password','$no_telp')");

    if ($query) {
        header("location: login.php");
    } else {
        echo "Gagal";
    }
}