<?php

session_start();

if (!isset($_SESSION['card']['products'])) {
    $_SESSION['card']['products'];
}
include_once('includes/funcs/func.php');
// add item
if (isset($_GET['add'])) {
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (!isset($_SESSION['card']['products'][$_POST['id']])) {
            $id = $_POST['id'];
            $_SESSION['card']['products']["$id"] = array(
                'id'        => $_POST['id'],
                'title'     => $_POST['title'],
                'img'       => $_POST['img'],
                'price'     => $_POST['price'],
                'count'     => $_POST['count']
            );
        } else {
            $_SESSION['card']['products'][$_POST['id']]['count']++;
        }
        $total = getTotal($_SESSION['card']['products']);
        $arr = array_slice($_SESSION['card']['products'], -2, 2, true);
        foreach ($arr as $ar) { ?>
            <!-- Cart Item -->
            <div class="media">
                <a class="pull-left" href="#!">
                    <img class="media-object" src="<?= $ar['img'] ?>" alt="image" />
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><a href="#!"><?= $ar['title'] ?></a></h4>
                    <div class="cart-price">
                        <span><?= $ar['count'] ?> x</span>
                        <span><?= $ar['price'] ?></span>
                    </div>
                    <h5><strong><?= $ar['count'] * $ar['price'] ?></strong></h5>
                </div>
                <a href="#!" class="remove" data-id="<?= $ar['id'] ?>"><i class="tf-ion-close"></i></a>
            </div><!-- / Cart Item -->
        <?php
        }
        ?>
        <div class="cart-summary">
            <span>Total</span>
            <span class="total-price"><?= $total ?></span>
        </div>
<?php
    }
}

// delete item 
if(isset($_GET['delete'])){
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id = $_POST['id'];
        $products = $_SESSION['card']['products'];
        foreach($products AS $product){
            if($product['id'] == $id){
                unset($_SESSION['card']['products'][$id]);
            }
        }

        $total = getTotal($_SESSION['card']['products']);
        $arr = array_slice($_SESSION['card']['products'], -2, 2, true);
        foreach ($arr as $ar) { ?>
            <!-- Cart Item -->
            <div class="media">
                <a class="pull-left" href="#!">
                    <img class="media-object" src="<?= $ar['img'] ?>" alt="image" />
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><a href="#!"><?= $ar['title'] ?></a></h4>
                    <div class="cart-price">
                        <span><?= $ar['count'] ?> x</span>
                        <span><?= $ar['price'] ?></span>
                    </div>
                    <h5><strong><?= $ar['count'] * $ar['price'] ?></strong></h5>
                </div>
                <a href="#!" class="remove" data-id="<?= $ar['id'] ?>"><i class="tf-ion-close"></i></a>
            </div><!-- / Cart Item -->
        <?php
        }
        ?>
        <div class="cart-summary">
            <span>Total</span>
            <span class="total-price"><?= $total ?></span>
        </div>
    <?php
    }
}
