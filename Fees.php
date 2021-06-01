<?php include 'deleteInstall.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | Simba</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="NavBar.css">
    <link rel="stylesheet" href="cart.css">
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
                    <a href="index.html">
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


    <div class="products-in-cart">

        <!-- <div class="row"> -->
        <div class="flex-container" id="header-table">
            <div class="boldText">
                <h3>Sold Products</h3>
            </div>
            <div class="boldText">
                <h3>Product Name</h3>
            </div>
            <div class="boldText">
                <h3>Commission Fee/ 1 Product</h3>
            </div>
            <div class="boldText">
                <h3>Quantity</h3>
            </div>

        </div>
        <div class="flex-container">
            <div><img src="https://i.imgur.com/mxa2mlS.png" alt="pant"></div>
            <div>Blue dress</div>
            <div>vnd 34.000</div>
            <div><input type="number" placeholder="Quantity"></div>
        </div>
        <div class="flex-container">
            <div><img src="https://i.imgur.com/BwV5Cvx.png" alt="pant"></div>
            <div>Blue dress</div>
            <div>vnd 34.000</div>
            <div><input type="number" placeholder="Quantity"></div>
        </div>

        <div class="flex-container">
            <div><img src="https://i.imgur.com/o0Lhluh.png" alt="pant"></div>
            <div>Blue dress</div>
            <div>vnd 34.000</div>
            <div><input type="number" placeholder="Quantity"></div>
        </div>
        <div class="flex-container">
            <div><img src="https://i.imgur.com/jfULO2A.png" alt="pant"></div>
            <div>Blue dress</div>
            <div>vnd 34.000</div>
            <div><input type="number" placeholder="Quantity"></div>
        </div>
        <div class="flex-container">
            <div>Total Commission Price: </div>
            <div></div>
            <div></div>
            <div>647.000 VND</div>
        </div>
        <div class="flex-container">
            <div>Renting Fees:</div>
            <div></div>
            <div></div>
            <div> 1.989.089 VND</a></div>
        </div>
        <div class="flex-container">
            <div>Total Fees: </div>
            <div></div>
            <div></div>
            <div>2.098.890 VND</div>
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