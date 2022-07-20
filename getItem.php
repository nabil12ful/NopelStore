<?php
define("_FUNCS_", "includes/funcs/");
define("_UPLAODS_", "data/uploads/");

// includes
include(_FUNCS_ . "func.php");
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $stmt = $con->prepare('SELECT products.*, product_image.Image_Path AS Images FROM `products`
                            INNER JOIN product_image ON Product_ID = products.ID WHERE product_image.Flag = 1 AND products.ID = ?');
    $stmt->execute([$_GET['id']]);
    $item = $stmt->fetch(); ?>

    <div class="col-md-8 col-sm-6 col-xs-12">
        <div class="modal-image">
            <img class="img-responsive" src="<?= echoPath(_UPLAODS_, $item['Images']) ?>" alt="<?= $item['Title'] ?>" />
        </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product-short-details">
            <h2 class="product-title"><?= $item['Title'] ?></h2>
            <p class="product-price"><?= $item['Price'] ?></p>
            <p class="product-short-description">
                <?= $item['Description'] ?>
            </p>
            <a href="cart.php" class="btn btn-main">Add To Cart</a>
            <a href="product.php?id=<?= $item['ID'] ?>" class="btn btn-transparent">View Product Details</a>
        </div>
    </div>
<?php
}
