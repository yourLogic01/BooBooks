<div class="container p-5 style=" max-width:600px; border-radius: 2%; margin-top:4.5rem">
    <?php
    include 'lib/koneksi.php';
    if (isset($_POST['booking'])) {
        $id_user = $_SESSION['id_user'];
        $id = $_POST['id_booking'];
        $buku = $_POST['nama_buku'];
        $pengarang = $_POST['pengarang'];
        $tanggal = $_POST['tgl_booking'];
        if ($_POST['booking'] == "booking") {

            $query = mysqli_query($koneksi, "INSERT INTO booking VALUES ('$id_user',null,'$buku','$pengarang','$tanggal')");

            if ($query) {
    ?>
    <div class="container p-5">
        <div class="card cardLog border-0 shadow rounded-3 my-5">
            <div class="login p-4 p-sm-5">
                <h1 class="card-title text-center mb-5 fs-1"><strong><i class="bi bi-check2-circle px-2"
                            style="font-size:100px ; color:green;"></i><br>Booking Telah Berhasil</strong></h1>
                <hr class="w-25 mx-auto">
                <div class="text-muted">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nama Buku</td>
                                <td>: <?= $buku ?></td>
                            </tr>
                            <tr>
                                <td>Nama Pengarang</td>
                                <td>: <?= $pengarang ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Booking</td>
                                <td>: <?= $tanggal ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-md btn-primary py-2 px-2" href="tampilan_user.php?page=home" role="button">Kembali
                        ke menu utama</a>
                    <a class="btn btn-md btn-warning py-2 px-2" href="tampilan_user.php?page=list_booking"
                        role="button">View
                        List
                        Booking</a>

                </div>
            </div>
        </div>
    </div>

    </section>

    <?php
            } else {
                echo $query;
                printf("Error : %s\n", mysqli_error($conn));
            }
        }
    }
    ?>