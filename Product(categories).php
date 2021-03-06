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
    <!-- <div class="header"> -->
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
                            <a href="Contact.htmphpl">Contact</a>
                        </li>
                        <li>
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
                    <a href="product.php" class="btn">Explore now &#8594;</a>
                </div>
                <div class="col-2">
                    <a href="order-placement.php"><img src="productImages/ecommerce_Image.png" id="ecommerce_Image"
                            alt="ecommerce_Image"></a>

                </div>

            </div>
        </div>
    </div>



    <!-- featured productes -->
    <div class="small-container">
        <!-- <h2 class="title">Featured Products</h2> -->
        <div class="row row-2">
            <h2 id="all-product">All Products</h2>
            <select onChange="window.location.href=this.value">
                <option value="Product(categories).php">Sort by categories</option>
                <option value="T-Shirt.php">
                    T-Shirt
                </option>
                <option value="Sneakers.php">
                    Sneakers
                </option>
                <option value="Sweatpants.php">
                    Sweatpants
                </option>
                <option value="Watch.php">
                    Watch
                </option>
                <option value="product.php">
                    Default Sorting
                </option>
            </select>
        </div>
        <h1><a href="T-Shirt.php">T-Shirts<a></h1>
        <div class="row">
            <div class="col-4">
                <a href="ProductDetails.php">
                    <img src="productImages//product-1.jpg" alt="">
                </a>
                <h4>Red T-shirt</h4>
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
                    <img src="productImages/product-4.jpg" alt="">
                </a>
                <h4>T-Shirt</h4>
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
                <img src="productImages//product-2.jpg" alt="">
                <h4>Black T-Shirt</h4>
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
                    <img src="productImages//product-3.jpg" alt="">
                </a>
                <h4>Skull T-shirt</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                </div>
                <p>$50.00</p>
            </div>
        </div>

        <h1><a href="Sneakers.php">Sneakers</a></h1>
        <div class="row">
            <div class="col-4">
                <img src="productImages//product-2.jpg" alt="">
                <h4>HRX Sneakers</h4>
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
                <img src="productImages/product-5.jpg" alt="">
                <h4>Sneakers</h4>
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
                <img src="productImages/product-10.jpg" alt="">
                <h4>Sneakers</h4>
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
                <img src="productImages/product-11.jpg" alt="">
                <h4>Sneakers </h4>
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

        <h1><a href="Sweatpants.php">Sweatpants</a></h1>
        <div class="row">
            <div class="col-4">
                <img src="productImages//product-3.jpg" alt="">
                <h4>Sweatpants</h4>
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
                <img src="productImages/product-12.jpg" alt="">
                <h4>Sweatpants </h4>
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
                <img src="productImages/product-14.jpg" alt="">
                <h4>Sweatpants </h4>
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
                <img src="productImages/product-15.jpg" alt="">
                <h4>Sweatpants </h4>
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

        <h1><a href="Watch.php"> Watch </a></h1>
        <div class="row">
            <div class="col-4">
                <img src="productImages//product-8.jpg" alt="">
                <h4>Fossil Watch</h4>
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
                <img src="productImages/product-9.jpg" alt="">
                <h4>Roadster Watch</h4>
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
                <img src="productImages/product-16.jpg" alt="">
                <h4>Daniel Wellington Watch</h4>
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
                <img src="productImages/product-17.jpg" alt="">
                <h4>Daniel Wellington Watch</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                </div>
                <p>$50.00</p>
            </div>
        </div>
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>&#8594;</span>
        </div>

        <!-- Latest Products -->
        <!-- <h2 class="title">Latest Products</h2> -->

        <!-- offer 2:09 -->
        <!-- brand 2:27 -->
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
    <!-------footer---->
    <div class="footer">
        <div class="container">
            <div class="row">

                <div class="footer-col-1">
                    <img src="productImages/Logo.png" alt="">
                </div>
                <div class="footer-col-2">
                    <a href="ToS.php">
                        <p>ToS (Term of Service)</p>
                    </a>

                </div>
                <div class="footer-col-3">
                    <a href="PrivacyPolicy.php">
                        <p>Privacy Policy</p>
                    </a>

                </div>

                <div class="footer-col-4">
                    <a href="CopyRight.php">
                        <p>Copy right 2021</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>