<?php 
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0" />
    <title>Simba | Login</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="NavBar.css">
    <link href="Vinh's/cookie.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&family=Montserrat:wght@100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="checkVisitedLink.js" async></script>

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
                            <a href="product.php">Product Browser</a>
                        </li>
                    </ul>
                </nav>

            </div>
            
        </div>
    </div>
    <div class="account-login">
        <div class="cointainer">
            <div class="row">
                <!-- <div class="col-2"> <img src="Image/ecommerce_Image.png" width="50%">
                </div> -->
                <div class="col-2">
                    <div class="form-login">
                        <div class="form-btn">
                            <span>Login</span>
                            <hr id="Indicator">
                        </div>

                        <form method="post" action="server.php">
                            <?php 
                              if(isset($_SESSION['error_message']) && $_SESSION['error_message'] ==  true){
                                  echo "<p style='color:red;'>Wrong Username/Password</p>";
                                  unset($_SESSION['error_message']);
                              };
                             ?>
                            <input type="email" name="email" placeholder="Email" id="email" required>
                            <input type="password" name="password" placeholder="Password" id="password" required>
                            <?php
                            if (isset($_SESSION['login_error']) && $_SESSION['login_error'] ==  true) {
                                echo "<p style='color:red;'>Login credentials can't be blank</p>";
                                unset($_SESSION['login_error']);
                            };
                            ?>                            
                            <input type="hidden" name="type" value="0" required/>
                            <button type="submit" class="button">Login</button>
                            <h5><a href="ForgotPassword.php">Forgot password</a></h5>
                            <a href="Register.php" class="button">Register</a>
                        </form>
                    </div>
                </div>
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
    <script src="checkLogin.js"></script>
</body>

</html>