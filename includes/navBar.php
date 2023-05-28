<?php
$select = "SELECT item_name , category_type FROM categories JOIN coffeeshop_products ON category_id = item_category_id;";
$s = mysqli_query($conn, $select);

$rows = mysqli_fetch_assoc($s);

?>





<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between position-relative">
        <div class="logo">
            <h1 class="text-light"><a href="index.php"><span>padeso☕</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
        <nav id="navbar" class="navbar">
            <ul>

                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto" href="#portfolio">Products</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li class="dropdown megamenu"><a href="#"><span>Mega Menu</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <?php foreach ($s as $data) : ?>
                            <li>
                                <h4><?= $data['category_type'] ?></h4>
                                <a href="#"><?= $data['item_name'] ?></a>

                            </li>
                        <?php endforeach; ?>
                        <!-- <li>
                            <strong>Column 2</strong>
                            <a href="#">Column 2 link 1</a>
                            <a href="#">Column 2 link 2</a>
                            <a href="#">Column 3 link 3</a>
                        </li>
                        <li>
                            <strong>Column 3</strong>
                            <a href="#">Column 3 link 1</a>
                            <a href="#">Column 3 link 2</a>
                            <a href="#">Column 3 link 3</a>
                        </li>
                        <li>
                            <strong>Column 4</strong>
                            <a href="#">Column 4 link 1</a>
                            <a href="#">Column 4 link 2</a>
                            <a href="#">Column 4 link 3</a>
                        </li>
                        <li>
                            <strong>Column 5</strong>
                            <a href="#">Column 5 link 1</a>
                            <a href="#">Column 5 link 2</a>
                            <a href="#">Column 5 link 3</a>
                        </li> -->
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li><a class="nav-link scrollto" href="login.php">
                        LOGIN </a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>

        </nav>

    </div>
</header>