<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simba | All Products</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="NavBar.css">
    
    <link href="Vinh's/cookie.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&family=Montserrat:wght@100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                <?php
                    echo "
                    <a href='/index.php'>
                        <img src='https://i.imgur.com/WnDfSUO.png' alt='Logo' width='65%'>
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
                            <a href="MyAccount(logged-in).html">Account</a>
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
        </div>
    </div>


    <!-- featured productes -->
    <div class="small-container">
        <!-- <h2 class="title">Featured Products</h2> -->
        <div class="row row-2">
            <h2 id="all-product">All Products</h2>
            <select onChange="window.location.href=this.value">
                <option value="ProductBrowser.html">Default Sorting</option>
                <option value="Product(categories).html">
                    Sort by categories
                </option>
                <option value="Product(Newest).html">
                    Sort by time (newest)
                </option>
                <option value="Product(Oldest).html">
                    Sort by time (oldest)
                </option>
            </select>
        </div>

        <div class="row">
        
        <?php
        require 'phpForHomepage/store_functions.php';
        $featured_products_names=array();
        $featured_products= read_featured_products();
        $featured_products_images= [
            
            'https://i.imgur.com/JZAUg1W.png',
            'https://i.imgur.com/wPs4HIR.png',
         
           
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
            if ($featured_products_count == 2 ) {
              break;
            }
      }
    ?>
        </div>
        <br><br>

        <div class="page-btn">
            <a href="index.php">
                <span>&#8592;</span>
           
            <a href="ProductBrowser.html">
                <span>&#8594;</span>
            </a>
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