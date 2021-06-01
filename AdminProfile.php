<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simba | Personal Profile</title>
    <link rel="stylesheet" href="index2.css">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="NavBar.css">
    <link href="Vinh's/cookie.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&family=Montserrat:wght@100&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- <div class="header"> -->
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
                            </li>
                        </ul>
                    </nav>
    
                </div>
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


    <div class="profile">
        <div class="userInfo">
            <p> <b>
                <?php  
                if(isset($_SESSION['user']) && $_SESSION['user'] == true){
                    echo '    <h2 class="h2">
                    Personal Information</h2>';
                    echo $_SESSION["email"];  
                    echo '<img src="Image/Vinh.jpg"> </br>';
                    echo '<form method="post" action="http://localhost:4000/server.php">
                        <button type="submit" class="button">Logout</button>
                        <input type="hidden" name="type" value="1" required/>
                        </form>';
                } else {
                    echo '<strong>You need to <a href="Login.php">login</a> to see your account</strong>';
                }
                ?>
                </p> </b>

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