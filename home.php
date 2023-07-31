    <!-- banner -->
    <section id="showoff-2" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-5" style="text-align: justify;">
                    <br><br><br><br>
                    <h2 class="py-3"><span class="bottom__border"></span>BooBook's</h2>
                    <p class="lead"><strong style="font-weight:900px ;">BooBook's</strong> adalah sebuah website
                        pelayanan online gratis bagi
                        masyarakat yang ingin
                        meminjam atau booking buku maupun novel. Di dalam website ini anda bisa memilih buku atau novel
                        favorite anda untuk dipinjam ataupun di
                        booking. Anda bisa mencetak bukti booking untuk dibawa ke toko official kami agar bisa
                        mendapatkan buku
                        yang akan di pinjam atau di booking.</p>
                </div>
                <div class="col-md-6">
                    <img src="assets/img/hero-background.png" alt="Laptop" class="img-fluid mb-3">
                </div>
            </div>
        </div>
    </section>
    <!-- Our Books -->
    <section class="book" id="books">
        <div class="container">
            <!-- Title -->
            <br><br>
            <h3 class="title"><span class="left__border"> </span>RECOMMENDED</h3>
            <!-- Book Item -->
            <div class="owl-carousel">
                <?php
                include "lib/koneksi.php";
                $query = mysqli_query($koneksi, "SELECT * FROM buku");
                foreach ($query as $data) {
                ?>
                <a class="py-1 px-1 d-flex justify-content-center text-dark"
                    href="tampilan_user.php?page=book&id=<?= $data['id_buku'] ?>">
                    <div class="book__item">
                        <img src="assets/img/<?= $data['thumbnail'] ?>" style="height: 300px; width: 200px;" alt="">
                        <h5 class="py-3"><span class="bottom__border"></span><?= $data['nama_buku'] ?></h5>
                        <p class="mt-2" style="font-size: 15px;"><b><?= $data['pengarang'] ?></b></p>
                    </div>
                </a>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <div class="container">
        <section id="showoff" class="py-5">
            <!-- Title -->
            <h3 class="title"><span class="left__border"> </span>OUR BOOKS</h3>
            <a href="tampilan_user.php?page=book&id=<?= $data['id_buku'] ?>" class="text-dark"
                style="text-decoration: none;">
                <div class="row">
                    <?php
                    include "lib/koneksi.php";
                    $query = mysqli_query($koneksi, "SELECT * FROM buku");
                    foreach ($query as $data) {
                    ?>
                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5">
                        <a href="tampilan_user.php?page=book&id=<?= $data['id_buku'] ?>" class="text-dark"
                            style="text-decoration: none;">
                            <div class="card" style="border: 0;">
                                <img src="assets/img/<?= $data['thumbnail'] ?>" style="height: 300px; width: 200px;"
                                    alt="">
                                <h5 class="py-3"><span class="bottom__border"></span><?= $data['nama_buku'] ?></h5>
                                <p class="mt-2" style="font-size: 15px;"><b><?= $data['pengarang'] ?></b></p>
                            </div>
                        </a>
                    </div>
                    <?php
                    }
                    ?>
                </div>

        </section>
    </div>