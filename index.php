<?php

    ob_start();
    $pageTitle = "RedStore";
    include('init.php'); ?>

        <!----- Categories ----->
        <div class="categories">
            <div class="small-container">
                <div class="row">
                    <div class="n-col-3">
                        <img src="<?php echo $imgs ?>category-1.jpg">
                    </div>
                    <div class="n-col-3">
                        <img src="<?php echo $imgs ?>category-2.jpg">
                    </div>
                    <div class="n-col-3">
                        <img src="<?php echo $imgs ?>category-3.jpg">
                    </div>
                </div>
            </div>
        </div>
        <!----- End Categories ----->
        
        <!----- Start Products ----->
        <div class="small-container">
            <?php
                $stmt = $con->prepare("SELECT * FROM products");
                
            ?>
            <!-- Featured Products start -->
            <h2 class="title">Featured Products</h2>
            <div class="row">
                <div class="n-col-4">
                    <img src="<?php echo $imgs ?>product-1.jpg">
                    <a href="product/index.html"><h4>Red Printed Tshirt</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="n-col-4">
                    <img src="<?php echo $imgs ?>product-2.jpg">
                    <a href="product/index.html"><h4>Red Printed Tshirt</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="n-col-4">
                    <img src="<?php echo $imgs ?>product-3.jpg">
                    <a href="product/index.html"><h4>Red Printed Tshirt</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="n-col-4">
                    <img src="<?php echo $imgs ?>product-4.jpg">
                    <a href="product/index.html"><h4>Red Printed Tshirt</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>

            </div>
            <!-- Featured Products end -->

            <!-- Latest Products start -->
            <h2 class="title">Latest Products</h2>
            <div class="row">
                <div class="n-col-4">
                    <img src="<?php echo $imgs ?>product-5.jpg">
                    <a href="product/index.html"><h4>Red Printed Tshirt</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="n-col-4">
                    <img src="<?php echo $imgs ?>product-6.jpg">
                    <a href="product/index.html"><h4>Red Printed Tshirt</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="n-col-4">
                    <img src="<?php echo $imgs ?>product-7.jpg">
                    <a href="product/index.html"><h4>Red Printed Tshirt</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="n-col-4">
                    <img src="<?php echo $imgs ?>product-8.jpg">
                    <a href="product/index.html"><h4>Red Printed Tshirt</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
            </div>
            <div class="row">
                <div class="n-col-4">
                    <img src="<?php echo $imgs ?>product-9.jpg">
                    <a href="product/index.html"><h4>Red Printed Tshirt</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="n-col-4">
                    <img src="<?php echo $imgs ?>product-10.jpg">
                    <a href="product/index.html"><h4>Red Printed Tshirt</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="n-col-4">
                    <img src="<?php echo $imgs ?>product-11.jpg">
                    <a href="product/index.html"><h4>Red Printed Tshirt</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="n-col-4">
                    <img src="<?php echo $imgs ?>product-12.jpg">
                    <a href="product/index.html"><h4>Red Printed Tshirt</h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>

            </div>
            <!-- Latest Products End -->

        </div>

        <!-- offer start -->
        <div class="offer">
            <div class="small-container">
                <div class="row">
                    <div class="n-col-2">
                        <img src="<?php echo $imgs ?>exclusive.png" class="offer-img">
                    </div>
                    <div class="n-col-2">
                        <p>Exclusively Available on RedStore</p>
                        <h1>Smart Band 4</h1>
                        <small>The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3) AMOLED color full-touch display with adjustable brightness, so everything is clear as can be.</small><br>
                        <a href="" class="btn">Buy Now &#8594;</a>
                    </div>
                </div>
            </div>
        </div>
        <!----- offer end ----->


        <!-- TESTIMONIAL -->
        <div class="testimonial">
            <div class="small-container">
                <div class="row">
                    <div class="n-col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni quaerat inventore maxime ipsum ab, asperiores dolorem! Repellat adipisci molestiae qui officia consectetur.</p>
                        
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <img src="<?php echo $imgs ?>user-1.png">
                        <h3>Sean Parker</h3>
                    </div>
                    <div class="n-col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni quaerat inventore maxime ipsum ab, asperiores dolorem! Repellat adipisci molestiae qui officia consectetur.</p>
                        
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <img src="<?php echo $imgs ?>user-2.png">
                        <h3>Mike Smith</h3>
                    </div>
                    <div class="n-col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni quaerat inventore maxime ipsum ab, asperiores dolorem! Repellat adipisci molestiae qui officia consectetur.</p>
                        
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <img src="<?php echo $imgs ?>user-3.png">
                        <h3>Mabel Joe</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial end -->

        <!-- brands start -->
        <div class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="n-col-5">
                        <img src="<?php echo $imgs ?>logo-godrej.png">
                    </div>
                    <div class="n-col-5">
                        <img src="<?php echo $imgs ?>logo-oppo.png">
                    </div>
                    <div class="n-col-5">
                        <img src="<?php echo $imgs ?>logo-coca-cola.png">
                    </div>
                    <div class="n-col-5">
                        <img src="<?php echo $imgs ?>logo-paypal.png">
                    </div>
                    <div class="n-col-5">
                        <img src="<?php echo $imgs ?>logo-philips.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- brands end -->


    <?php
    include($temps . "footer.php");
    ob_end_flush();