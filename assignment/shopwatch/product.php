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

    <style type="text/css">
                    .form-style-5{
                        max-width: 500px;
                        padding: 10px 20px;
                        background: #f4f7f8;
                        margin: 10px auto;
                        padding: 20px;
                        background: #f4f7f8;
                        border-radius: 8px;
                        font-family: Georgia, "Times New Roman", Times, serif;
                    }
                    .form-style-5 fieldset{
                        border: none;
                    }
                    .form-style-5 legend {
                        font-size: 1.4em;
                        margin-bottom: 10px;
                    }
                    .form-style-5 label {
                        display: block;
                        margin-bottom: 8px;
                    }
                    .form-style-5 input[type="text"],
                    .form-style-5 input[type="date"],
                    .form-style-5 input[type="datetime"],
                    .form-style-5 input[type="email"],
                    .form-style-5 input[type="number"],
                    .form-style-5 input[type="search"],
                    .form-style-5 input[type="time"],
                    .form-style-5 input[type="url"],
                    .form-style-5 textarea,
                    .form-style-5 select {
                        font-family: Georgia, "Times New Roman", Times, serif;
                        background: rgba(255,255,255,.1);
                        border: none;
                        border-radius: 4px;
                        font-size: 15px;
                        margin: 0;
                        outline: 0;
                        padding: 10px;
                        width: 100%;
                        box-sizing: border-box; 
                        -webkit-box-sizing: border-box;
                        -moz-box-sizing: border-box; 
                        background-color: #e8eeef;
                        color:#8a97a0;
                        -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
                        box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
                        margin-bottom: 30px;
                    }
                    .form-style-5 input[type="text"]:focus,
                    .form-style-5 input[type="date"]:focus,
                    .form-style-5 input[type="datetime"]:focus,
                    .form-style-5 input[type="email"]:focus,
                    .form-style-5 input[type="number"]:focus,
                    .form-style-5 input[type="search"]:focus,
                    .form-style-5 input[type="time"]:focus,
                    .form-style-5 input[type="url"]:focus,
                    .form-style-5 textarea:focus,
                    .form-style-5 select:focus{
                        background: #d2d9dd;
                    }
                    .form-style-5 select{
                        -webkit-appearance: menulist-button;
                        height:35px;
                    }
                    .form-style-5 .number {
                        background: #1abc9c;
                        color: #fff;
                        height: 30px;
                        width: 30px;
                        display: inline-block;
                        font-size: 0.8em;
                        margin-right: 4px;
                        line-height: 30px;
                        text-align: center;
                        text-shadow: 0 1px 0 rgba(255,255,255,0.2);
                        border-radius: 15px 15px 15px 0px;
                    }

                    .form-style-5 input[type="submit"],
                    .form-style-5 input[type="button"]
                    {
                        position: relative;
                        display: block;
                        padding: 19px 39px 18px 39px;
                        color: #FFF;
                        margin: 0 auto;
                        background: #1abc9c;
                        font-size: 18px;
                        text-align: center;
                        font-style: normal;
                        width: 100%;
                        border: 1px solid #16a085;
                        border-width: 1px 1px 3px;
                        margin-bottom: 10px;
                    }
                    .form-style-5 input[type="submit"]:hover,
                    .form-style-5 input[type="button"]:hover
                    {
                        background: #109177;
                    }
</style>
    
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
                
            <?php 
                $query = "SELECT * FROM `category`";
                $result = mysqli_query($conn,$query);
                
            ?>

    <main>
        <!--? Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Add Product</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--? Hero Area End-->
        <!-- ================ contact section start ================= -->
        <div class="form-style-5">
            <form action="productcheck.php" method="POST">
                <fieldset>
                <legend><span class="number">1</span> Category Info</legend>
                <input type="text" name="cname" placeholder="Name">
                <textarea name="des" placeholder="Description"></textarea>
                </fieldset>
                <fieldset>
                <legend><span class="number">2</span> Product Info</legend>
                <input type="text" name="pname" placeholder="Name">
                <input type="email" name="pquantity" placeholder="Quantity">
                <input type="email" name="pprice" placeholder="Price">
                <label for="job">Category:</label>
                <select id="job" name="category">
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                        <?php } ?>
                </select>      
                </fieldset>
                <br>
                <fieldset>
                <legend><span class="number">3</span>Image of Product</legend>
                <input type="file" name="pimage"></input>
                </fieldset>
                <br>
                <input type="submit" name="ADD" value="Apply" />
            </form>
        </div>
        <!-- ================ contact section end ================= -->
    </main>
    
    
       <?php include "javascriptfile.php"; ?> 
</body>

</html>