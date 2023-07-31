<?php
if (isset($_GET['page'])) {
    include 'lib/koneksi.php';
    $page = $_GET['page'];

    switch ($page) {
        case 'login':
            include 'login.php';
            break;
        case 'proses_login':
            include 'proses_login.php';
            break;
        case 'regis':
            include 'regis.php';
            break;
        case 'proses_regis':
            include 'proses_regis.php';
            break;
        case 'home':
            include 'home.php';
            break;
        case 'book':
            include 'book.php';
            break;
        case 'booking':
            include 'booking.php';
            break;
        case 'proses_booking':
            include 'proses_booking.php';
            break;
        case 'list_booking':
            include 'list_booking.php';
            break;
        case 'contactus':
            include 'contactus.php';
            break;
        case 'about':
            include 'about.php';
            break;

        default:
            echo "halaman tidak ditemukan";
            break;
    }
} else {
    include 'home.php';
}