<?php
    // include_once('connect.php');
    $total = 0;
    if(isset($_SESSION['customer_id'])){
        $stmt = $con->prepare('SELECT * FROM customers WHERE ID = ?');
        $stmt->execute([$_SESSION['customer_id']]);
        $cust = $stmt->fetch();
    }
    if(isset($_SESSION['card']['products'])){
        $arr = array_slice($_SESSION['card']['products'], -2, 2, true);
        $arr = resortingArry($arr);
        
        $total = getTotal($_SESSION['card']['products']);
    }elseif(!isset($_SESSION['card']['products'])){
        $_SESSION['card']['products'] = [];
    }
    // $stmt->close();
?>
<body id="body">
    <!-- Start Top Header Bar -->
    <section class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <div class="contact-number">
                        <i class="tf-ion-ios-telephone"></i>
                        <span>0129- 12323-123123</span>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <!-- Site Logo -->
                    <div class="logo text-center">
                        <a href="index.php">
                            <!-- replace logo here -->
                            <svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                    font-size="40" font-family="AustinBold, Austin" font-weight="bold">
                                    <g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
                                        <text id="AVIATO">
                                            <tspan x="108.94" y="325">NOPEL</tspan>
                                        </text>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <!-- Cart + account -->
                   
                    <ul class="top-menu text-right list-inline">
                        <!-- account -->
                        <li class="dropdown cart-nav dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                                    class="fa fa-user"></i><?= isset($_SESSION['customer_id']) ? $cust['Full_Name'] : 'Account' ?></a>
                            <div class="dropdown-menu cart-dropdown text-center" id="mo">
                                <!-- account Item -->
                                
                                <?php
                                    if(isset($_SESSION['customer_id'])){?>
                                    <ul class="text-center cart-buttons">
                                        <li><a href="profile.php" class="btn btn-small btn-solid-border">Profile</a></li>
                                        <li><a href="logout.php" class="btn btn-small btn-solid-border">Logout</a></li>
                                    </ul>
                                    <?php
                                    }else{
                                ?>
                                    <ul class="text-center cart-buttons">
                                        <li><a href="signup.php" class="btn btn-small btn-solid-border">Register</a></li>
                                        <li><a href="login.php" class="btn btn-small btn-solid-border">Login</a></li>
                                    </ul>
                                <?php } ?>
                                
                            </div>
                        </li>
                        <!-- /account -->
                         <!-- cart -->
                        <li class="dropdown cart-nav dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                                    class="tf-ion-android-cart"></i>cart</a>
                            <div class="dropdown-menu cart-dropdown">
                                <div class="items">
                                    <?php
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
                                            <a href="#!" class="remove"><i class="tf-ion-close"></i></a>
                                        </div><!-- / Cart Item -->
                                    <?php } ?>
                                </div>
                                <div class="cart-summary">
                                    <span>Total</span>
                                    <span class="total-price"><?= $total ?></span>
                                </div>
                                <ul class="text-center cart-buttons">
                                    <li><a href="cart.html" class="btn btn-small">View Cart</a></li>
                                    <li><a href="checkout.html" class="btn btn-small btn-solid-border">Checkout</a></li>
                                </ul>
                            </div>

                        </li>
                        <!-- /cart -->

                        <!-- Search -->
                        <li class="dropdown search dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                                    class="tf-ion-ios-search-strong"></i> Search</a>
                            <ul class="dropdown-menu search-dropdown">
                                <li>
                                    <form action="post"><input type="search" class="form-control"
                                            placeholder="Search..."></form>
                                </li>
                            </ul>
                        </li><!-- / Search -->

                        <!-- Languages -->
                        <li class="commonSelect">
                            <select class="form-control">
                                <option>EN</option>
                                <option>AR</option>
                            </select>
                        </li><!-- / Languages -->

                    </ul>
                    <!-- / .nav .navbar-nav .navbar-right -->
                </div>
            </div>
        </div>
    </section><!-- End Top Header Bar -->
