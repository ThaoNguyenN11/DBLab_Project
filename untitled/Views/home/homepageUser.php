<?php
    session_start();
    ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="Homepage.css">
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
    <button type="button" class="cart"><i class="fa-cart-shopping cart-icon"></i></button>
    <div>Xin chao <?php echo $_SESSION['username'] ?></div>
    <a href="homepage.html">
        <?php $_SESSION['username'] = null;?>
        <button type="button" class="user" ><i class="fa-user user-icon"></i></button>
    </a>
</header>


<div class="content">

    <div id="intro" class="intro">
        <div  class="sale">
            <p class="sale1">Sale<br></p>
            <p class="sale2">Up To 50% Off<br> </p>
        </div>
    </div>

    <div class="reference">
        <div class="woman">
            <img src="../../image/Fashion_Week_02.jpg"/>
            <div class="text">Coats</div>
        </div>

        <div class="man">
            <img src="../../image/dress2.png"/>
            <div  class="text">Dress</div>
        </div>
    </div>
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