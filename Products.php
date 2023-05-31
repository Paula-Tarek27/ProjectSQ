<?php

require_once("includes/connection.php");
require_once("includes/header.php");
require_once("includes/navBar.php");



$select = "SELECT * FROM coffeeshop_products";
$s = mysqli_query($conn, $select);

$rows = mysqli_fetch_assoc($s);

?>

<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h1>Products</h1>
            <p>We have menu of coffee & bakery shop varied and offer something for everyone. You want to
                have a variety of coffee drinks, as well as a selection of pastries, cakes, and other baked goods </p>
        </div>

        <div class="row" data-aos="fade-in">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <!-- <li data-filter=".filter-app">Coffee☕</li>
                    <li data-filter=".filter-card">Baked&Donuts🍩</li>
                    <li data-filter=".filter-web">Coffee Beans</li> -->
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">
            <?php foreach ($s as $data) : ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?= $data['coffeeshop_item_images'] ?>" class="img-fluid" alt="nooooo">

                        <div class="portfolio-links">
                            <a href="<?= $data['coffeeshop_item_images'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $data['item_name'] ?>">
                                <i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.php?show=<?= $data['item_id'] ?>" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                    <h2><?= $data['item_name'] ?></h2>
                </div>
            <?php endforeach; ?>
        </div>


    </div>
</section>


<?php
include './includes/script.php';
?>