<?php
session_start();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="Homepage.css">
<link rel="stylesheet" href="style.css">
<body>
<header class="header">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <div class="logo"><img src="../../image/shop_icon.png" class = "shop_icon"></div>
    <div class="link">
        <a href="" class="item">Dress</a>
        <a href="./dressView.php" class="item">Shirts</a>
        <a href="" class="item">Coats</a>
        <a href="" class="item">Jeans</a>
    </div>
    <div class = "search_box">
        <button type = "submit" class="icon"><i class="fa fa-search"></i></button>
        <input class="search"></input>
    </div>
</header>


<div class="hero_area">
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src=<?php echo "../../image/product/".$_SESSION['productAllShirt'][0]['image']?> alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    <?php echo $_SESSION['productAllShirt'][0]['name']?>
                                </h6>
                                <h6>
                                    Price
                                    <span>
                                    <?php echo $_SESSION['productAllShirt'][0]['price']?> vnd
                                    </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span>
                                    <?php echo $_SESSION['productAllShirt'][0]['size']?>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            <div class="btn-box">
                <a href="">
                    View All Products
                </a>
            </div>
        </div>
    </section>
<!--    <div id="intro" class="intro">-->
<!--        <div  class="sale">-->
<!--            <p class="sale1">Sale<br></p>-->
<!--            <p class="sale2">Up To 50% Off<br> </p>-->
<!--        </div>-->
<!--    </div>-->

</div>

<footer class = 'footer'>
    <div class = 'link'>
        <div class = 'about_store'><p class="title"> About The Store <br></p> News <br> Career <br> Investors <br> </div>
        <div class = 'get_help'><p class="title"> Help <br></p> Order Status <br> Delivery <br> Payment Options</div>
    </div>
    <div class="icon">
        <i class="fa-facebook-square item"></i>
        <i class="fa-instagram-square item"></i>
        <i class="fa-twitter-square item"></i>
        <i class="fa-mail-bulk item"></i>
    </div>
</footer>
</body>
</html>