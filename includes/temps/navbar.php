    <!-- Main Menu Section -->
    <section class="menu">
        <nav class="navbar navigation">
            <div class="container">
                <div class="navbar-header">
                    <h2 class="menu-title">Main Menu</h2>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div><!-- / .navbar-header -->

                <!-- Navbar Links -->
                <div id="navbar" class="navbar-collapse collapse text-center">
                    <ul class="nav navbar-nav">

                        <!-- Home -->
                        <li class="dropdown ">
                            <a href="index.php">Home</a>
                        </li><!-- / Home -->


                        <!-- Elements -->
                        <li class="dropdown dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">Shop <span
                                    class="tf-ion-ios-arrow-down"></span></a>
                            <div class="dropdown-menu">
                                <div class="row">

                                    <!-- Basic -->
                                    <div class="col-lg-6 col-md-6 mb-sm-3">
                                        <ul>
                                            <li class="dropdown-header">By Category</li>
                                            <li role="separator" class="divider"></li>
                                            <?php
                                                // get Categories
                                                $cats = getCats();

                                                foreach($cats AS $cat){
                                                    ?>
                                                    <li><a href="category.php?cat=<?= $cat['ID'] ?>"><?= $cat['Name'] ?></a></li>
                                                    <?php
                                                }
                                            ?>

                                        </ul>
                                    </div>

                                    <!-- Layout -->
                                    <div class="col-lg-6 col-md-6 mb-sm-3">
                                        <ul>
                                            <li class="dropdown-header">All</li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="product-single.html">Shop All products</a></li>

                                        </ul>
                                    </div>

                                </div><!-- / .row -->
                            </div><!-- / .dropdown-menu -->
                        </li><!-- / Elements -->

                        <?php
                            // get Categories
                            $cats = getCats();

                            foreach($cats AS $cat){
                                ?>
                                <li><a href="category.php?cat=<?= $cat['ID'] ?>"><?= $cat['Name'] ?></a></li>
                                <?php
                            }
                        ?>
                    </ul><!-- / .nav .navbar-nav -->

                </div>
                <!--/.navbar-collapse -->
            </div><!-- / .container -->
        </nav>
    </section>
