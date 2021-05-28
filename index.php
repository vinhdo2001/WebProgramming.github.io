<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simba | Online Shopping Mall</title>
    <link rel="stylesheet" href="index2.css">
    <link rel="stylesheet" href="NavBar.css">
    <link href="Vinh's/cookie.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&family=Montserrat:wght@100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="checkVisitedLink.js" async></script>
    <script src="Slider1.js" async></script>
    <script src="Slider2.js" async></script>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html">
                        <img src="https://i.imgur.com/WnDfSUO.png" alt="Logo" width="65%">
                    </a>
                </div>
                <nav>
                    <input type="checkbox" id="menu-icon">
                    <label for="menu-icon">Menu</label>
                    <ul id="MenuItems">
                        <li>
                            <a href="order-placement.html">Cart</a>
                        <li>
                        <li>
                            <a href="AboutUs.html">About us</a>
                        </li>
                        <li>
                            <a href="Login.html">Account</a>
                        </li>
                        <li>
                            <a href="Fees.html">Fees</a>
                        </li>

                        <li>
                            <a href="FAQs.html">FAQs</a>
                        </li>
                        <li>
                            <a href="Contact.html">Contact</a>
                        </li>
                        <li>
                            <a href="ProductBrowser.html">Product Browser</a>
                        </li>
                    </ul>
                </nav>

            </div>
            <div class="row">
                <div class="col-2">
                    <h1 id="slogan">Favorite brands and <br> hottest trends</h1>
                    <p id="header-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Earum laudantium doloribus aliquam alias tempore, neque obcaecati qui dignissimos doloremque!
                        Exercitationem ducimus doloribus voluptate odit atque sit perferendis blanditiis repellat ipsam.
                    </p>
                    <a href="ProductBrowser.html" class="btn">Explore now &#8594;</a>
                </div>
                <div class="col-2">
                    <a href="order-placement.html"><img src="productImages/ecommerce_Image.png" id="ecommerce_Image"
                            alt="ecommerce_Image"></a>
                </div>

            </div>
        </div>
    </div>
    <a href="store.html">
        <h2 class="title">New Stores</h2>
    </a>
    
    <div class="slider-wrap1">
        <div class="slider1">
            <?php
            require 'phpForHomepage/store_functions.php';
            $new_stores=read_newest_stores();
            $new_store_names=array();
            $new_store_count=0;
            foreach($new_stores as $new_store){
                $name=$new_store['name'];
                echo"
                    <div class='slider-item1'>
                        <a href='hnoss.html'>
                            <div class='img-div1'></div>
                            <h4>$name</h4>
                        </a>
                    </div>
                    ";
                $new_store_count++;
                if ($new_store_count==5){
                    break;
                }
            }
            ?>
        </div>
    </div>
    <a href="store.html">
        <h2 class="title">New Products</h2>
    </a>
    <div class="slider-wrap">
        <div class="slider">
            <?php
            // require 'phpForHomepage/product_functions.php';
            $new_products=read_newest_products();
            $new_product_names=array();
            $new_product_count=0;
            foreach($new_products as $new_product){
                $name_new_products=$new_product['name'];
                $price_new_products=$new_product['price'];
                echo"

                
                    <div class='slider-item1'>
                        <a href='ProductDetails.html'>
                            <div class='img-div'></div>
                            <h4>$name_new_products </h4>
                            <div class='rating'>
                                <span class='fa fa-star checked'></span>
                                <span class='fa fa-star checked'></span>
                                <span class='fa fa-star checked'></span>
                                <span class='fa fa-star '></span>
                                <span class='fa fa-star '></span>
                            </div>
                            <p>$price_new_products</p>
                        </a>
                    </div>
                    ";
                $new_product_count++;
                if ($new_product_count==10){
                    break;
                }
            }
            ?>
            
        </div>
    </div>


    <a href="store.html">
        <h2 class="title">Featured Stores</h2>
    </a>
    <div class="row">
        <?php
        $featured_stores_names=array();
        $featured_stores= read_featured_stores();
        $featured_stores_images= [
            'https://product.hstatic.net/1000370106/product/8.2_058fb4153d984e4cae66dc1769393d09_master.jpg',
            'https://i.imgur.com/3jOolCX.png',
            'https://i.imgur.com/vIBzeJ6.png',
            'https://i.imgur.com/WjvtOcr.png',
            'https://product.hstatic.net/1000370106/product/16.2.1_28aa5cfe2b394ddba01c4845bbd81739_master.jpg',
            'productImages//product-1.jpg',
            'https://product.hstatic.net/1000370106/product/8.2_058fb4153d984e4cae66dc1769393d09_master.jpg',
            'https://i.imgur.com/3jOolCX.png',
            'https://i.imgur.com/vIBzeJ6.png',
            'https://i.imgur.com/WjvtOcr.png',
          ];
          $featured_stores_count = 0;
      foreach($featured_stores as $featured_store){
        $name_featured_store = $featured_store['name'];
        
        echo"
        <a href='hnoss.html'>
            <div class='.col-3'>
                <img src='$featured_stores_images[$featured_stores_count]' alt=''>
            </div>
            <h4>Bad Rabbit</h4>
        </a>
        ";
        $featured_stores_count++;
        if ($featured_stores_count == 10) {
          break;
        }
      }
     ?>
        


    </div>
    <a href="ProductBrowser.html">
        <h2 class="title">Featured Products</h2>
    </a>
    <div class="row">
    <?php
    $featured_products_names=array();
    $featured_products= read_featured_products();
    $featured_products_images= [
        'https://product.hstatic.net/1000370106/product/8.2_058fb4153d984e4cae66dc1769393d09_master.jpg',
        'https://i.imgur.com/3jOolCX.png',
        'https://i.imgur.com/vIBzeJ6.png',
        'https://i.imgur.com/WjvtOcr.png',
        'https://product.hstatic.net/1000370106/product/16.2.1_28aa5cfe2b394ddba01c4845bbd81739_master.jpg',
        'productImages//product-1.jpg',
        'https://product.hstatic.net/1000370106/product/8.2_058fb4153d984e4cae66dc1769393d09_master.jpg',
        'https://i.imgur.com/3jOolCX.png',
        'https://i.imgur.com/vIBzeJ6.png',
        'https://i.imgur.com/WjvtOcr.png',
      ];
      $featured_products_count = 0;
      foreach($featured_products as $featured_product){
        $id_featured_product = $featured_product['id'];
        $name_featured_product = $featured_product['name'];
        $price_featured_product = $featured_product['price'];
        echo"
        <a href='ProductDetail2.html'>
            <div class='.col-3'>
                <img src='$featured_products_images[$featured_products_count]'
                    alt=''>
            </div>
            <h4>$name_featured_product</h4>
            <div class='rating'>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star '></span>
                <span class='fa fa-star '></span>
            </div>
            <p>$price_featured_product</p>
        </a> 
        ";
        $featured_products_count++;
        if ($featured_products_count == 10) {
          break;
        }
      }
    ?>
    </div>

    <div class="row">
        <a href="ProductDetail2.html">
            <div class=".col-3">
                <img src="https://product.hstatic.net/1000370106/product/9.1_ab24be97f37444aaa5c676ddae699125_master.jpg"
                    alt="">
            </div>
            <h4>Dress</h4>
            <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star "></span>
            </div>
            <p>vnd 148.500</p>
        </a>
        <a href="ProductDetails.html">
            <div class=".col-3">
                <img src="https://product.hstatic.net/1000370106/product/20.1_e61991eeb4bb4d00b1f9cef214f87946_master.jpg"
                    alt="">
                <h4>Brown Crochet Cardigan</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                </div>
                <p>vnd 148.500</p>
            </div>
        </a>
        <a href="ProductDetails.html">
            <div class=".col-3">
                <img src="https://product.hstatic.net/1000370106/product/19.1_f07eeeae858845a38a37873ee317fda1_master.jpg"
                    alt="">
                <h4>Black Babydoll Mini Dress</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                </div>
                <p>vnd 148.500</p>
            </div>
    </div>

    </div>
    <div class="cookie-container">
        <h2>I use cookies</h2>
        <p>
            My website uses cookies necessary for its basic functioning.
            By continuing browsing, you consent to my use of cookies
            and other technologies.
        </p>
        <button class="cookie-btn">
            I Understand
        </button>
        <a href="PrivacyPolicy.html"> Learn more</a>
    </div>
    <script src="Vinh's/cookie.js"></script>
    <!-------footer---->
    <div class="footer">
        <div class="container">
            <div class="row">

                <div class="footer-col-1">
                    <img src="productImages/Logo.png" alt="">
                </div>
                <div class="footer-col-2">
                    <a href="ToS.html">
                        <p>ToS (Term of Service)</p>
                    </a>

                </div>
                <div class="footer-col-3">
                    <a href="PrivacyPolicy.html">
                        <p>Privacy Policy</p>
                    </a>

                </div>

                <div class="footer-col-4">
                    <a href="CopyRight.html">
                        <p>Copy right 2021</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>