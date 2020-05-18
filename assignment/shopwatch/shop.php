<?php include "connection.php"?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Watch shop | eCommers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

</head>

<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    
            <?php include "header.php"; ?>
 

    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Watch Shop</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!-- Latest Products Start -->

        <?php 
            $query = "SELECT * FROM `product`";
            $result = mysqli_query($conn,$query);
        
        ?>
        <section class="popular-items latest-padding">
            <div class="container">
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <?php while($row = mysqli_fetch_assoc($result)) {?>

                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                            <div class="single-popular-items mb-50 text-center">
                                                <div class="popular-img">
                                                    <img src="assets/img/gallery/popular1.png" alt="">
                                                    <div class="img-cap">
                                                        <?php if(isset($_SESSION['name'])) { ?>
                                                            <span><a href="product.php?id=<?php echo $row['id'] ?>">Edit / </a><a href="productdel.php?id=<?php echo $row['id'] ?>"> Delete</a></span>
                                                        <?php } else { ?>

                                                            <span><a href="cart.php?id=<?php echo $row['id']?>">Add to cart</a></span>
                                                        <?php }  ?>
                                                    </div>
                                                    <div class="favorit-items">
                                                        <span class="flaticon-heart"></span>
                                                    </div>
                                                </div>
                                                <div class="popular-caption">
                                                    <h3><?php echo $row['name']?></h3>
                                                    <span><?php echo $row['price']?></span>
                                                </div>
                                            </div>
                                        </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->

        <?php include "javascriptfile.php"; ?> 

</body>
</html>