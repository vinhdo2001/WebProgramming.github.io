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
                <?php
                echo"
                <a href='/index.php'>
                <img src='https://i.imgur.com/WnDfSUO.png' alt='Logo' width='65%'></img>
                </a>";
                
                ?>
                    
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
                            <a href="MyAccount(logged-in).php">Account</a>
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

                            <a href="product.php">Product Browser</a>


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
            require_once 'phpForHomepage/store_functions.php';
            $new_stores=read_newest_stores();
            // $new_store_names=array();
            $new_store_count=0;
            foreach($new_stores as $new_store){
                $new_stores_name=$new_store['name'];
                echo"
                    <div class='slider-item1'>
                        <a href=''>
                            <div class='img-div1'></div>
                            <h4>$new_stores_name</h4>
                            <div class='rating'>
                            <span class='fa fa-star checked'></span>
                            <span class='fa fa-star checked'></span>
                            <span class='fa fa-star checked'></span>
                            <span class='fa fa-star '></span>
                            <span class='fa fa-star '></span>
                        </div>
                        </a>
                    </div>
                    ";
                $new_store_count++;
                if ($new_store_count==10){
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
            require_once 'phpForHomepage/product_functions.php';
            $new_products=read_newest_products();
            $new_product_count=0;
            foreach($new_products as $new_product){
                $new_products_id=$new_product['id'];
                $new_products_name=$new_product['name'];
                $price_new_products=$new_product['price'];
                    echo"
                    <div class='slider-item1'>
                        <a href='/ProductDetail2.php?name={$new_products_name}&price={$price_new_products}'>
                            <div class='img-div'></div>
                            <h4>$new_products_name </h4>
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
            'https://product.hstatic.net/1000370106/product/5.2.1_c28c5cd9049c4a00b2471938b1f67a03_master.jpg',
            'https://product.hstatic.net/1000370106/product/19.2.1_3fc47167084a4c7f852ff16b6a6c4abb_master.jpg',
            'https://product.hstatic.net/1000370106/product/9.1_ab24be97f37444aaa5c676ddae699125_master.jpg',
            'https://product.hstatic.net/1000370106/product/16.2.1_28aa5cfe2b394ddba01c4845bbd81739_master.jpg',
            'https://product.hstatic.net/1000370106/product/20.1_e61991eeb4bb4d00b1f9cef214f87946_master.jpg',
            'https://product.hstatic.net/1000370106/product/8.2_058fb4153d984e4cae66dc1769393d09_master.jpg',
            'https://product.hstatic.net/1000370106/product/19.1_f07eeeae858845a38a37873ee317fda1_master.jpg',
            'https://product.hstatic.net/1000370106/product/10.2.1_64d6a07edbc54c74ba0f61e21c9ad09a_master.jpg',
            'https://product.hstatic.net/1000370106/product/25.1_d5cf847088434116804d8fa484aac20c_master.jpg',
          ];
          $featured_stores_count = 0;
      foreach($featured_stores as $featured_store){
        $featured_store_name = $featured_store['name'];
        
        echo"
        <a href='hnoss.html'>
            <div class='.col-3'>
                <img src='$featured_stores_images[$featured_stores_count]' alt=''>
            </div>
            <h4>$featured_store_name</h4>
        </a>
        ";
        $featured_stores_count++;
        // if ($featured_stores_count == 10) {
        //   break;
        // }
      }
     ?>
    </div>
    <a href="ProductBrowser.html">
        <h2 class="title">Featured Products</h2>
    </a>
    <div class="row">
    <?php
        require_once 'phpForHomepage/product_functions.php';

    $featured_products_names=array();
    $featured_products= read_featured_products();
    $featured_products_images= [
        'http://www.simpleimageresizer.com/_uploads/photos/82a3d6fe/Screen_Shot_2021-05-31_at_10.50.55_50.png',
        'https://product.hstatic.net/1000370106/product/12.1.1_c1b1a19b8a734a2e9a4c365e0a030bb9_master.jpg',
        'https://product.hstatic.net/1000370106/product/4.1_7143819b4290477d8d3ab42da4d1602c_master.jpg',
        'https://product.hstatic.net/1000370106/product/16.2.1_28aa5cfe2b394ddba01c4845bbd81739_master.jpg',
        'https://product.hstatic.net/1000370106/product/9.1_ab24be97f37444aaa5c676ddae699125_master.jpg',
        'https://product.hstatic.net/1000370106/product/5.1.1_424f4c4f983643b4933aab96782f86c3_master.jpg',
        'https://product.hstatic.net/1000370106/product/16.1.1_5a39e1ab6f234bb398b608a56a2c639e_master.jpg',
        'https://product.hstatic.net/1000370106/product/18.1_f6ff8ba828ab4f13a86b4fb1b31081b3_master.jpg',
        'https://product.hstatic.net/1000370106/product/19.1_f07eeeae858845a38a37873ee317fda1_master.jpg',
        'https://product.hstatic.net/1000370106/product/12.1.1_82a94763da854f5bb10c2014c823b9ab_master.jpg',

      ];
      $featured_products_count = 0;
      foreach($featured_products as $featured_product){
        $id_featured_product = $featured_product['id'];
        $name_featured_product = $featured_product['name'];
        $price_featured_product = $featured_product['price'];
        echo"
        <a href='/ProductDetail2.php?name={$name_featured_product}&price={$price_featured_product}'>
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