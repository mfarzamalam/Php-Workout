<?php include "connection.php"?>

<!doctype html>
<html lang="zxx">
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
   
            <?php include "header.php"; ?>
 
 
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Register</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!--================login_part Area =================-->
            <form action="registercheck.php" method="POST">
                <section class="login_part section_padding ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="login_part_text text-center">
                                    <div class="login_part_text_iner">
                                        <h2>Already have an account ?</h2>
                                        <a href="login.php" class="btn_3">Sign in</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="login_part_form">
                                    <div class="login_part_form_iner">
                                        <h3>Welcome ! <br>
                                            Please Register in now </h3>
                                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                                            <div class="col-md-12 form-group p_star">
                                                <input type="text" class="form-control" id="name" name="name"  value=""
                                                    placeholder="Username" required>
                                            </div>
                                            <div class="col-md-12 form-group p_star">
                                                <input type="email" class="form-control" id="email" name="email" value=""
                                                    placeholder="Email" required>
                                            </div>

                                            <div class="col-md-12 form-group p_star">
                                                <input type="password" class="form-control" id="password" name="password" value=""
                                                    placeholder="Password" required>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <button type="submit" value="submit" name="submit" class="btn_3">
                                                    Sign up
                                                </button>
                                                <a class="lost_pass" href="#">forget password?</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        <!--================login_part end =================-->
    </main>

    <?php include "javascriptfile.php"; ?> 

</body>
    
</html>