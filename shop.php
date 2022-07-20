<?php

ob_start();
$title = "NopelStore | Shop";
include('init.php'); ?>
<? //content 
?>

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h1 class="page-name">Shop</h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">shop</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="products section">
    <div class="container">
        <div class="row">

            <?php
            // Pagination
                if (!isset ($_GET['page']) ) {  
                    $page = 1;  
                } else {  
                    $page = $_GET['page'];  
                }
                $stmt = $con->prepare('SELECT * FROM products');
                $stmt->execute();
                $products = $stmt->rowCount(); 
        
                $results_per_page = 10;  
                $page_first_result = ($page-1) * $results_per_page;  
        
                //determine the total number of pages available  
                $number_of_page = ceil ($products / $results_per_page);
                $stmt = $con->prepare("SELECT products.*, categories.Name, employee.Username, product_image.Image_Path AS Images FROM `products`
                                    INNER JOIN categories ON categories.ID = products.Category
                                    INNER JOIN product_image ON Product_ID = products.ID
                                    INNER JOIN employee ON employee.ID = products.By_Emp WHERE product_image.Flag = 1
                                    LIMIT $page_first_result,$results_per_page");
                $stmt->execute();
                $prods = $stmt->fetchAll();
                foreach($prods AS $prod){ ?>

                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="product-thumb">
                                <!-- <span class="bage">Sale</span> -->
                                <img class="img-responsive" src="<?= echoPath(_UPLAODS_, $prod['Images']) ?>" alt="product-img" />
                                <div class="preview-meta">
                                    <ul>
                                        <li class="viewItem" data-id="<?= $prod['ID'] ?>">
                                            <span data-toggle="modal" data-target="#product-modal">
                                                <i class="tf-ion-ios-search-strong"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <a href="#!"><i class="tf-ion-ios-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-single.html"><?= $prod['Title'] ?></a></h4>
                                <p class="price">EGP <?= $prod['Price'] ?></p>
                            </div>
                        </div>
                    </div>

            <?php } ?>


            <!-- Modal -->
            <div class="modal product-modal fade" id="product-modal">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="tf-ion-close"></i>
                </button>
                <div class="modal-dialog " role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row" id='item'>
                                <div class="col-md-8 col-sm-6 col-xs-12">
                                    <div class="modal-image">
                                        <img class="img-responsive" src="<?= echoPath(_IMGS_, 'shop/products/modal-product.jpg') ?>" alt="product-img" />
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-short-details">
                                        <h2 class="product-title" id='title'>GM Pendant, Basalt Grey</h2>
                                        <p class="product-price" id='price'>$200</p>
                                        <p class="product-short-description" id='desc'>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo laborum numquam rem aut officia dicta cumque.
                                        </p>
                                        <a href="cart.html" class="btn btn-main">Add To Cart</a>
                                        <a href="product-single.html" class="btn btn-transparent">View Product Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal -->

        </div>
    </div>
</section>
    
    <!-- BTN -->
    <div class="btns <?= $results_per_page >= $products ? 'd-none' : '' ?>">
        <ul>
            <?php
            if(!isset($_GET['page'])){
                $_GET['page'] = 1;
            }
            $nextPage = $page+1;
            $prevPage = $page-1;
            $p = 0;
            for($page = 1; $page<=$number_of_page; $page++){ 
                $p++;
                if($_GET['page'] != 1 && $p == 1){ ?>
                    <li> 
                        <a href="?page=<?= $prevPage ?>" class="nav-btn">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                    </li>
                <?php } ?>
                <li>
                    <a href="?page=<?= $page ?>" class="nav-btn <?= $page == $_GET['page'] ? 'active' : '' ?>">
                        <?= $page ?>
                    </a>
                </li>
                <?php if($_GET['page'] != $number_of_page && $page == $number_of_page){ ?>
                    <li>
                        <a href="?page=<?= $nextPage ?>" class="nav-btn">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </li>
                <?php } ?>
            <?php } ?>
        
        </ul>
    </div>


<?php
include(_TEMPS_ . "footer.php");
ob_end_flush();
