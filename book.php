<?php
if (isset($_GET['id'])) {
    $id_buku = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id_buku'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
<div class="container film py-5 mt-5">
    <section class="sec_bg">
        <div class="card mb-3" style="max-width: 1250px;">
            <div class="row g-0">
                <input type="hidden" name="id" value="<?= $id_buku ?>">
                <div class="col-md-3">
                    <img src="assets/img/<?= $data['thumbnail'] ?>" style="width : 750px; height : 450px;"
                        class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h2 class="card-title"><?= $data['nama_buku'] ?></h2>
                        <small><?= $data['pengarang'] ?>
                        </small>
                        <br><br><br>
                        <h5>Sinopsis</h5>
                        <p class="card-text"><?= $data['sinopsis'] ?></p>
                        <small> Penerbit : <?= $data['penerbit'] ?>
                        </small><br>
                        <small> Tanggal terbit : <?= $data['tgl_terbit'] ?>
                        </small>
                        <br><br>
                        <a href="tampilan_user.php?page=booking&id=<?= $data['id_buku'] ?>"><button type="button"
                                class="btn btn-outline-dark">Booking</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
    }
}
?>