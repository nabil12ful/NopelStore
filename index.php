<?php

    ob_start();
    session_start();
    $title = "NopelStore";
    include('init.php');
    include_once(_TEMPS_.'slider.php'); ?>
<? //content ?>

    <section class="product-category section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title text-center">
                        <h2>New Products</h2>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="category-box">
                        <a href="#!">
                            <img src="<?= echoPath(_IMGS_, 'shop/category/category-1.jpg') ?>" alt="" />
                            <div class="content">
                                <h3>Clothes Sales</h3>
                                <p>Shop New Season Clothing</p>
                            </div>
                        </a>
                    </div>
                    <div class="category-box">
                        <a href="#!">
                            <img src="<?= echoPath(_IMGS_, 'shop/category/category-2.jpg') ?>" alt="" />
                            <div class="content">
                                <h3>Smart Casuals</h3>
                                <p>Get Wide Range Selection</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="category-box category-box-2">
                        <a href="#!">
                            <img src="<?= echoPath(_IMGS_, 'shop/category/category-3.jpg') ?>" alt="" />
                            <div class="content">
                                <h3>Jewellery</h3>
                                <p>Special Design Comes First</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="products section bg-gray">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h2>Trendy Products</h2>
                </div>
            </div>
            <div class="row">
                <?php 
                    $stmt = $con->prepare("SELECT products.*, categories.Name, employee.Username, product_image.Image_Path AS Images FROM `products`
                                        INNER JOIN categories ON categories.ID = products.Category
                                        INNER JOIN product_image ON Product_ID = products.ID
                                        INNER JOIN employee ON employee.ID = products.By_Emp WHERE product_image.Flag = 1
                                        LIMIT 15");
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
                                            <li class="addToCard">
                                                <a href="#!"><i class="tf-ion-android-cart" onclick="openPopup()"></i></a>
                                              
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
                <div class="popup" id="popup">

                    <img src="layout\tow\images/true.png" alt="" >
                     <h2 class="">Thank You!</h2>
                     <p  class="pp">تم اضافه الي السله بنجاح</p>
                     <button type="button" onclick="closePopup()">حسنا</button>
                </div>

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
                                        <a href="cart.html" class="btn btn-main addToCard">Add To Cart</a>
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


    <script>
       let  popup = document.getElementById("popup");
       function openPopup(){
        popup.classList.add("open-popup");
       }
       function closePopup(){
        popup.classList.remove("open-popup");
       }
    </script>
    <?php
    include(_TEMPS_."footer.php");
    ob_end_flush();