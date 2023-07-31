<?php
if (isset($_GET['id'])) {
    $id_buku = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id_buku'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
<div class="container">
    <div class="card" style="margin: 100px;">
        <div class="card-body text-center">
            <h3>Konfirmasi Booking Buku</h3>
            <hr>
            <form method="POST" action="tampilan_user.php?page=proses_booking">
                <div class="mb-3 row">
                    <div class="col-sm-10">
                        <input type="number" name="id_booking" class="form-control bg-white" id="id"
                            <?= isset($_GET['booking']) ? "readonly value='" . $_GET['booking'] . "'" : "" ?> hidden>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama_buku" class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_buku" class="form-control bg-white" readonly
                            value="<?= $data['nama_buku'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                    <div class="col-sm-10">
                        <input type="text" name="pengarang" class="form-control bg-white" readonly
                            value="<?= $data['pengarang'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tgl_booking" class="col-sm-2 col-form-label">Tanggal booking</label>
                    <div class="col-sm-10">

                        <input type="date" name="tgl_booking" class="form-control bg-white"
                            <?= isset($_GET['booking']) ? "value=''" : "" ?>>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col">
                        <button type="submit" name="booking" value="booking" class="btn btn-primary"><i
                                aria-hidden="true"></i>Lanjutkan</button>

                        <a href="tampilan_user.php" type="button" class="btn btn-danger"><i
                                aria-hidden="true"></i>Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    }
}
?>