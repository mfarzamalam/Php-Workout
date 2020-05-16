
<header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="shop.php">shop</a></li>
                                    <li><a href="contact.php">Contact</a></li>
    
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <?php if(!isset($_SESSION['name'])) { ?>
                                    <li> <a href="login.php"><span class="flaticon-user"></span></a></li>
                                <?php } else { ?>

                                    <li><a href="product.php"><span>Add Product</span></a></li>
                                    <li><a href="logoutcheck.php"><span>logout</span></a></li>
                                
                                <?php } ?>
                                
                                <li><a href="cart.php"><span class="flaticon-shopping-cart"></span></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
