<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoeversity | Products</title>


    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav-footer.css">
    <!-- CSS -->

    <!-- Jquery/Bootstrap/Font-Awesome -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/d6a8902b29.js" crossorigin="anonymous"></script>
    <!-- Jquery/Bootstrap/Font-Awesome -->


    <!-- Font-Style -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <!-- Font-Style -->
</head>

<body>


<!-- Nav Header -->
<ul class="navbar-ul">

    <li class="nav-burger navbar-items"><a href="#/" id="Nav-button"><i class="fa-solid fa-bars"></i></a></li>
    <li class="nav-burger navbar-items"><a href="#" id="burger-text"><h1 ><i class="fa-solid fa-shoe-prints"></i>Shoeversity</h1></a></li>

    <li class="nav-text navbar-items"><a href="index.html">Home</a></li>
    <li class="nav-text navbar-items"><a href="products.php">Explore Products</a></li>
    <li class="nav-text navbar-items"><a href="CustomerSupport.html#About-Us">AboutUs</a></li>
    <li class="nav-text navbar-items"><a href="CustomerSupport.html#Contact-Us">ContactUS</a></li>
    <li class="nav-text navbar-items"><a href="CustomerSupport.html#FAQs">FAQs</a></li>
    <li class="nav-text navbar-items"><a href="partners.html">Sell your Shoes</a></li>
</ul>
<ul class="navbar-ul-mobile hidburger ">
    <li class="nav-text-m navbar-items"><a href="index.html">Home</a></li>
    <li class="nav-text-m navbar-items"><a href="products.php">Explore Products</a></li>
    <li class="nav-text-m navbar-items"><a href="CustomerSupport.html#About-Us">AboutUs</a></li>
    <li class="nav-text-m navbar-items"><a href="CustomerSupport.html#Contact-Us">ContactUS</a></li>
    <li class="nav-text-m navbar-items"><a href="CustomerSupport.html#FAQs">FAQs</a></li>
    <li class="nav-text-m navbar-items"><a href="partners.html">Sell your Shoes</a></li>
</ul>
<header id="header1">
    <h1><i class="fa-solid fa-shoe-prints"></i>Shoeversity</h1>
</header>
<!-- Nav Header -->



<div id="product-header">
    <h2 id="product-header-1">Explore Our Products</h2>
</div>

<a id="show-filter" href="#/">Hide Filters +</a>


<div class="product-section product-section-grid">
    
    <div class="products-filters"><!-- product-none -->
        <ul id="filter-brands">
            <li class=""><p id="select-brand">Select Brand:   <a class="clear-brand-filters" href="#/"> clear filters</a></p></li> 
            <li class="brand-filters"><a id="addidas-brand" href="#/">Addidas</a></li>
            <li class="brand-filters"><a id="puma-brand" href="#/">Puma</a></li>
            <li class="brand-filters"><a id="converse-brand" href="#/">Converse</a></li>
            <li class="brand-filters"><a id="nike-brand" href="#/">Nike</a></li>
        </ul>  
    </div>

    <div class="products-list">
        <?php 
            
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,'shoes');
            $query = " SELECT * FROM `shoes`";
            $query_run = mysqli_query($connection,$query);
            
            while ($row = mysqli_fetch_array($query_run))
            {
                ?>

        <div class="product-card <?php echo $row['shoebrand'] ?>">
            <div class="product-card-img-text" >
                <a href="#/" id="product-text-h4-a">
                        <?php echo 
                        '<img class="product-image" alt="N/A" src="productimage'.$row['shoeimage_url'].'" >' 
                        ?>;
                        <h4 class="h4hyperlink"><?php echo $row['shoename'] ?></h4>
                        <p>est Price: <?php echo $row['shoeprice'] ?> Php</p>
                </a>
            </div>
            <div class="link-container">
                <a href="<?php echo $row['shoelazada'] ?>" target="_blank" class="lazsho-img"><img src="media/lazada.png" alt="N/A"></a>
                <a href="<?php echo $row['shoeshopee'] ?>" target="_blank" class="lazsho-img"><img src="media/shopee.png" alt="N/A"></a>
            </div>
        </div>


                <?php
            }
            ?>
    </div>
</div>






<!-- Footer -->
<div id="footer-section">
    <div class="footer-grid">
        <div class="FG-1">
            <h1>
                <i class="fa-solid fa-shoe-prints"></i> Shoeversity
            </h1>
                <p> ???Shoes transform your <br>body language and attitude.<br> They lift you physically <br>and emotionally.??? <br><br> ??? Christian Louboutin.</p>
        </div>
        
        <div class="FG-2">
            <h1>Customer Support</h1>
            <p class="customer-support-text" id="emailcopy">
                <i class="fa-solid fa-envelope" ></i><a href="#/" class="theemail">Shoeversity00@gmail.com</a>
            </p>
            <p class="customer-support-text padding-left-FG-2">
                <a href="CustomerSupport.html#About-Us">About Us</a>
            </p>
            <p class="customer-support-text padding-left-FG-2">
                <a href="CustomerSupport.html#Contact-Us">Contact Us</a>
            </p>
            <p class="customer-support-text padding-left-FG-2">
                <a href="CustomerSupport.html#TOS">Terms of Use</a>
            </p>
            <p class="customer-support-text padding-left-FG-2">
                <a href="CustomerSupport.html#FAQs">Frequently Asked Questions</a>
            </p>
            <input id="temp-input" type="text" value="Shoeversity00@gmail.com">
        </div>

        <div class="FG-3">
            <h1>Follow us</h1>
            <div class="footer-socials">
                <p>
                    <a href="https://www.facebook.com/Shoeversity-108272401875703" target="_blank" class="footer-icons-text">
                        <i class="fa-brands fa-facebook "></i>Facebook
                    </a>
                </p>
                <p>
                    <a href="https://twitter.com/Shoeversity" target="_blank" class="footer-icons-text">
                        <i class="fa-brands fa-twitter"></i>Twitter
                    </a>
                </p>
                <p>
                    <a href="https://www.youtube.com/channel/UCY5VJQHVMqt1rpv2YyujyfQ" target="_blank" class="footer-icons-text">
                        <i class="fa-brands fa-youtube"></i>Youtube
                    </a>
                </p>
                <p>
                    <a href="https://www.instagram.com/shoe.versity/" target="_blank" class="footer-icons-text">
                        <i class="fa-brands fa-instagram-square"></i>Instagram
                    </a>
                </p>
            </div>
        </div>
        <div class="FG-4">
            <h1>Community</h1>
            <p><a href="career.html" class="footer-team-text">Career</a></p>
            <p><a href="partners.html" class="footer-team-text">Sell your Shoes</a></p>
            <p><a href="https://goo.gl/maps/CuMFEPs5QnSrxRE68"  target="_blank" class="footer-team-text">Location (Get Via Googlemaps)</a></p>
        </div>
    </div>
        <footer class="ending-footer wow-footer" >
            @2022 Shoeversity
        </footer>
</div>
<!-- Footer -->
<!-- bot-Scrips -->


<script src="js/nav-footer.js"></script>
<script src="js/script.js"></script>
<!-- bot-Scrips -->

</body>
</html>