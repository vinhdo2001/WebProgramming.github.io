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
                    <a href="index.php">
                        <img src="https://i.imgur.com/WnDfSUO.png" alt="Logo" width="65%">
                    </a>
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
                            <a href="ProductBrowser.php">Product Browser</a>
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
                <img src="https://product.hstatic.net/200000000131/product/xanh-nhat-2_aff2a13a0d4f430f80556527ff49da42_master.jpg"
                    id="ProductImg" alt="" width="100%">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="https://product.hstatic.net/200000000131/product/xanh-nhat-1_30a23f5ae67a44d6a19559d66094f4e3_master.jpg"
                            alt="" width="100%">
                    </div>
                    <div class="small-img-col">
                        <img src="https://product.hstatic.net/200000000131/product/xanh-nhat-4_86e05054aacc436fa4f7d155bf502197_master.jpg"
                            alt="" width="100%">
                    </div>
                    <div class="small-img-col">
                        <img src="https://product.hstatic.net/200000000131/product/xanh-nhat-3_c4e92926de70412a9778f3142ab44c31_master.jpg"
                            alt="" width="100%">

                    </div>
                    <div class="small-img-col">
                        <img src="https://product.hstatic.net/200000000131/product/xanh-nhat-2_aff2a13a0d4f430f80556527ff49da42_master.jpg"
                            alt="" width="100%">

                    </div>
                </div>
            </div>
            <div class="col-2">
                <!-- <p>Home / T-shirt</p> -->
                <section class="container content-section">
                    <div class="shop-items">
                        <div class="shop-item">
                            <span id="product-name"><h1><strong> SHORT HAND CROP LINEN SEMI</strong> </h1></strong> </h1></span>  
                            
                            <div class="shop-item-details">
                                <span id="product-price"><h4>50.00</h4></span>
                               
                                <button class="btn" id="add-button">ADD TO CART</button>
                                <button class="btn" id="buy-button" onclick="window.location.href='order-placement.php'">Buy Now</button><br>
                                
                                <span class="quantity"><input id="quantity" type="text" value="1"></span>
                            </div>
                    </section>
                
                
                <select>
                    <option>Select size</option>
                    <option>XXL</option>
                    <option>L</option>
                    <option>M</option>
                    <option>S</option>
                </select>
                <!-- <input type="number" value="1"> -->
 
                <h3>Description:</h3>
                <p>

                    Characteristics: Dynamic - Youthful - Modern.

                    Category: Streetwear.

                    Size: S / M / L.

                    Material: Synthetic linen.

                    Color: Nude - Black - Light Blue - Pink.

                    Note: Light wash, do not soak.

                    Female sample measurements: Height: 168 cm. Measurements 3 rounds: 83 - 59 - 86 (Wear size S).
                </p>
            </div>
        </div>
    </div>
    <!-- -------title----- -->
    <div class="small-container">
        <div class="row row-2">
            <a href="ProductBrowser.php">
                <h2 id="recommended-products">Recommended Products</h2>
            </a>
            <a href="ProductBrowser.php">
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
                <a href="ProductDetails.php">
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
                <a href="ProductDetails.php">
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

</html>