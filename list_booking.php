<div class="container" style="margin-top: 5rem">
    <h2 class="py-3"><span class="bottom__border"></span>LIST BOOKING</h2>
    <figure>
        <blockquote class="blockquote">
            <h4>Selamat datang <strong><?= $_SESSION['nama_lengkap']; ?></strong></h4>
        </blockquote>
        <h4 class="lead">Berikut ini merupakan daftar buku yang telah anda booking</h4>
    </figure>
    <button class="btn btn-primary mb-4" id="btn" style="margin-left:980px ;" onclick="cetak()">Cetak Kartu Booking</button>
    <div class="table-responsive">
        <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Buku</th>
                        <th>Nama Pengarang</th>
                        <th>Tanggal Booking</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'lib/koneksi.php';
                    $id = $_SESSION['id_user'];
                    $query = "SELECT * FROM booking WHERE id_user=$id;";
                    $sql = mysqli_query($koneksi, $query);
                    $no = 0;
                    while ($result = mysqli_fetch_assoc($sql)) {
                    ?>
                    <tr>
                        <td>
                            <center><?php echo ++$no; ?></center>
                        </td>
                        <td><?php echo $result['nama_buku']; ?></td>
                        <td><?php echo $result['pengarang']; ?></td>
                        <td><?php echo $result['tgl_booking']; ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
