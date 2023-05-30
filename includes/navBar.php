<?php
$select = "SELECT coffeeshop_products.item_name , categories.category_type FROM categories JOIN coffeeshop_products ON categories.category_id = coffeeshop_products.category_id;";
// $select = "SELECT * FROM categories WHERE category_id = product_id;";
$s = mysqli_query($conn, $select);

$rows = mysqli_fetch_assoc($s);

?>





<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between position-relative">
        <div class="logo">
            <h1 class="text-light"><a href="index.php"><span>Arabica☕</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
        <nav id="navbar" class="navbar">
            <ul>

                <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                <li><a class="nav-link scrollto" href="#services">Categories</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>

                <li><a class="nav-link scrollto" href="Products.php">
                        Products</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <!-- <li><a class="nav-link scrollto" href="search.php">
                        SEARCH </a></li> -->
                <li><a class="nav-link scrollto" href="login.php">
                        LOGIN </a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>

        </nav>

    </div>
</header>