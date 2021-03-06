<?php include 'deleteInstall.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simba | Product Details</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="NavBar.css">
    <link href="Vinh's/cookie.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&family=Montserrat:wght@100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="cart.js" async></script>

</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                <?php
                echo"
                <a href='/index.php'>
                <img src='https://i.imgur.com/WnDfSUO.png' alt='Logo' width='65%'>
                </a>
                ";
                
                ?>
                </div>
                <nav>
                    <input type="checkbox" id="menu-icon">
                    <label for="menu-icon">Menu</label>
                    <ul id="MenuItems">
                        <li>
                            <a href="order-placement.php">Cart</a>
                        <li>
                        <li>
                            <a href="AboutUs.php">About us</a>
                        </li>
                        <li>
                            <a href="MyAccount(logged-in).php">Account</a>
                        </li>
                        <li>
                            <a href="Fees.php">Fees</a>
                        </li>

                        <li>
                            <a href="FAQs.php">FAQs</a>
                        </li>
                        <li>
                            <a href="Contact.php">Contact</a>
                        </li>
                        <li>
                            <a href="product.php">Product Browser</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
    </div>
    <!------------- single product details ----------->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="https://product.hstatic.net/200000000131/product/hong-bong-tim-1_2b9574b156aa4450a7e3780917ad7217_master.jpg"
                    id="ProductImg" alt="" width="100%">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="https://product.hstatic.net/200000000131/product/hong-bong-tim-4_79fa8a336d1b40dcad4eabb1dc42b3f0_master.jpg"
                            alt="" width="100%">
                    </div>
                    <div class="small-img-col">
                        <img src="https://product.hstatic.net/200000000131/product/hong-bong-tim-2_f2e22af71467428e9900189670104aef_master.jpg"
                            alt="" width="100%">
                    </div>
                    <div class="small-img-col">
                        <img src="https://product.hstatic.net/200000000131/product/hong-bong-tim-3_d4a2b74cdd1543439d26a90aac2b76e0_master.jpg"
                            alt="" width="100%">

                    </div>
                    <div class="small-img-col">
                        <img src="https://product.hstatic.net/200000000131/product/hong-bong-tim-4_79fa8a336d1b40dcad4eabb1dc42b3f0_master.jpg"
                            alt="" width="100%">

                    </div>
                </div>
            </div>
            <div class="col-2">
                <!-- <p>Home / T-shirt</p> -->
                <section class="container content-section">
                    <div class="shop-items">
                        <div class="shop-item">
                        <?php 
                        $product_name=$_GET['name'];
                        $product_id=$_GET['id'];
                        $product_price=$_GET['price'];

                        echo "<span id='product-name'><h1><strong> $product_name </strong> </h1></span>";
                        ?>
                            
                            <div class="shop-item-details">
                                <?php
                                echo "<span id='product-price'><h4>$product_price</h4></span>";?>
                               
                                <button class="btn" id="add-button">ADD TO CART</button>
                                <button class="btn" id="buy-button" onclick="window.location.href='order-placement.php'">Buy Now</button><br>
                                <span class="quantity"><input type="number" value="1"></span>
                            </div>
                    </section>
                
                
              
                
                <select>
                    <option>Select size</option>
                    <option>XXL</option>
                    <option>L</option>
                    <option>M</option>
                    <option>S</option>
                </select>
                
                
                <h3>Description:</h3>
                <p>
                    Characteristics: Feminine - Young - Sexy.

                    Category: Travel clothing, picnic, streetwear, party.

                    Size: S / M /L.

                    Material: Chiffon Chiffon.

                    Color: Pink purple cotton.

                    Note: Low temperature iron, light wash.

                    s </p>
            </div>
        </div>
    </div>
    <!-- -------title----- -->
    <div class="small-container">
        <div class="row row-2">
            <a href="product.php">
                <h2 id="recommended-products">Recommended Products</h2>
            </a>
            <a href="product.php">
                <p id="view-more">View More</p>
            </a>

        </div>

    </div>
    <!-- -------product----- -->
    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <a href="ProductDetails.php">
                    <img src="https://product.hstatic.net/200000000131/product/den-4_bd1da078adb84899ad7cc4029b0ed7ab_master.jpg"
                        alt="product Image">
                </a>

                <h4>Jeans Jacket</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="ProductDetail2.php">
                    <img src="https://product.hstatic.net/200000000131/product/xanh-2_7df0965bbe41413c8d88ffbca01346c0_master.jpg"
                        alt="product Image">
                </a>
                <h4>Blue Shirt</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="ProductDetails.php">
                    <img src="https://product.hstatic.net/200000000131/product/kem-4_cb95457e6cc94241ab632ba4a7b54331_master.jpg"
                        alt="product Image">
                </a>
                <h4>Beige Shirt</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="ProductDetail2.php">
                    <img src="https://product.hstatic.net/200000000131/product/xanh-oliu-4_ddacd30bf8c34e56ae1bbd965b14f1f9_master.jpg"
                        alt="product Image">
                </a>
                <h4>Oliu green Shirt</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star "></span>
                </div>
                <p>$50.00</p>
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
        <a href="PrivacyPolicy.php"> Learn more</a>
    </div>
    <script src="Vinh's/cookie.js"></script>

    <div class="footer">
        <div class="container">
            <div class="row">

                <div class="footer-col-1">
                    <img src="productImages/Logo.png" alt="">
                </div>
                <div class="footer-col-2">
                    <a href="">
                        <p>ToS (Term of Service)</p>
                    </a>

                </div>
                <div class="footer-col-3">
                    <a href="">
                        <p>Privacy Policy</p>
                    </a>

                </div>

                <div class="footer-col-4">
                    <a href="">
                        <p>Copy right 2021</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="testing.js"></script>

</html>