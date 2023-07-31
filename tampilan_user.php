<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="./js/loader.js"></script>
    <title>BookBook's - Home</title>
    <link rel="icon" href="assets/img/books.png" type="image/png">
</head>

<body class="hidden">
    <?php
    session_start();
    ?>
    <header>
        <!-- Navbar -->
        <nav class="navbar">
            <div class="container">

                <nav class="navbar fixed-top navbar-expand-lg navbar-light p-md-3">
                    <div class="container">
                        <div class="navbar-brand">
                            <a href="index.php" class="navbar-brand text-dark" style="font-size: 20px;">
                                <img src="assets/img/logo.png" alt="Logo PetHouse" style="margin-right: 5px;"
                                    width="200">
                            </a>
                        </div>
                        <button type="button" class="navbar-toggler" data-bs-target="#navbarNav"
                            data-bs-toggle="collapse" aria-expanded="false" aria-label="Toggle Navbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse nav-btn" id="navbarNav">
                            <div class="mx-auto"></div>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="tampilan_user.php" class="nav-link text-dark">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tampilan_user.php?page=list_booking" class="nav-link text-dark">List
                                        Booking</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tampilan_user.php?page=about" class="nav-link text-dark">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tampilan_user.php?page=contactus" class="nav-link text-dark">Contact Us</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link text-dark" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown">
                                        <?= $_SESSION['username'] ?><i class="bi bi-caret-down-fill"></i>
                                    </a>
                                    <ul class="dropdown-menu" id="menu1">
                                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            </div>
            </div>
        </nav>
    </header>

    <main>

        <section>
            <div class="m-0">
                <?php
                include "menu.php";
                ?>
            </div>
        </section>

    </main>
    <!--footer-->
    <section class="footer" >
        <div class="container" id="ftr">
            <div class="row row-cols-2 row-cols-md-2 g-3 py-5">
                <div class="col-md-6 col-lg-3">
                    <h5>Menu</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="index.php?page=index" class="nav-link1 p-0 text-muted">Home</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="index.php?page=list_booking" class="nav-link1 p-0 text-muted">List Booking</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="index.php?page=about" class="nav-link1 p-0 text-muted">About</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="index.php?page=contactus" class="nav-link1 p-0 text-muted">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h5>Category</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link1 p-0 text-muted">Fiksi</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link1 p-0 text-muted">Novel</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link1 p-0 text-muted">Comic</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link1 p-0 text-muted">Academic</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <form>
                        <h5>Subcribe to our newsletter</h5>
                        <p>Mounthly digest of whats new and exciting from us.</p>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" id="btn-sub" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex justify-content-between border-top">
                <p>© 2022 Boobook's. All rights reserved<br>create by Boobook's</p>
                <ul class="list-unstyled d-flex sosmed">
                    <li class="ms-3">
                        <a href="https://www.instagram.com/anisaftr.18/" target="_blank"><i
                                class="bi bi-twitter"></i></a>
                    </li>
                    <li class="ms-3">
                        <a href="https://www.instagram.com/anisaftr.18/" target="_blank"><i
                                class="bi bi-instagram"></i></a>
                    </li>
                    <li class="ms-3">
                        <a href="https://www.facebook.com/nissa.fitrianida/" target="_blank"><i
                                class="bi bi-facebook"></i></a>
                    </li>
                    <li class="ms-3">
                        <a href="https://www.youtube.com/channel/UCR4XM5TL6of3eSZEBix1vBw" target="_blank"><i
                                class="bi bi-youtube"></i></a>
                    </li>
                    <li class="ms-3">
                        <a href="mailto:2010631170003@student.unsika.ac.id"><i class="bi bi-envelope-fill"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Footer End -->

    <!-- Scroll To Top -->
    <div onclick="scrollToTop()" class="scrollTop"><i class="bi bi-chevron-double-up"></i></div>
    <!-- Scroll To Top -->
    <!-- Javascript -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/lightbox-plus-jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
</body>

</html>