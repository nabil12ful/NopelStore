    <body>
        <header>
            <div class="n-container">
                <div class="navbar">
                    <div class="logo">
                        <img src="<?php echo $imgs ?>logo.png">
                    </div>
                    <nav>
                        <ul id="menu">
                            <li><a class="active" href="index.php">Home</a></li>
                            <li><a href="Products/index.html">Products</a></li>
                            <li class="sub-menu"><a href="#">Categories</a>
                                <ol class="menu">
                                    <?php
                                        foreach(getCats() as $cat){
                                            echo "<li><a href='#'>" . $cat['Name'] . "</a></li>";
                                        }
                                    ?>
                                </ol>
                            </li>
                            <li><a href="">About</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="account/index.html">Account</a></li>
                        </ul>
                    </nav>
                    <a href="cart/index.html"><img src="<?php echo $imgs ?>cart.png" width="30px" height="30px"></a>
                    <img src="<?php echo $imgs ?>menu.png" class="menu-icon" onclick="menutoggle()">
                </div>
                <div class="row">

                    <div class="n-col-2">
                        <h1>Give Your Workout<br>A New Style!</h1>
                        <p>Success isn't always about greatness. It's about consistency. Consistent<br>hard work gains success. Greatness will come.</p>
                        <a href="" class="btn">Explore Now &#8594;</a>
                    </div>
                    <div class="n-col-2">
                        <img src="<?php echo $imgs ?>image1.png">  
                    </div>

                </div>

            </div>
        </header>
