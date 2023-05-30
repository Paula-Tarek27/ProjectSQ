<?php
include_once('includes/header.php');
include_once('includes/navBar.php');
include_once('includes/connection.php');

$id = $_GET['des'];
$select = "SELECT * FROM categories WHERE category_id = $id";
$s = mysqli_query($conn, $select);

$rows = mysqli_fetch_assoc($s);

$select2 = "SELECT * FROM coffeeshop_products WHERE category_id = $id";
$d = mysqli_query($conn, $select2);

$rows2 = mysqli_fetch_assoc($d);

?>
<!-- col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row portfolio-container" data-aos="fade-up">

            <div class="row portfolio-container" data-aos="fade-up">
                <?php foreach ($d as $data) : ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="<?= $data['coffeeshop_item_images'] ?>" class="img-fluid" alt="nooooo">
                            <div class="portfolio-links">
                                <a href="<?= $data['coffeeshop_item_images'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $data['item_desc'] ?>">
                                    <i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.php?show=<?= $data['item_id'] ?>" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                        <h2><?= $data['item_name'] ?></h2>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>


<?php
include './includes/script.php';
?>