<?php include 'deleteInstall.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
    <title>Simba | FAQs</title>
    <link rel="stylesheet" href="style2.css">
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
    <div class="faqs">
        <div class="container">
            <h1>Frequently Asked Questions</h1>
            <div class="question">
                <details>
                    <summary>   <strong>How do I register for an account of the website?</strong> </summary>
                        <p>To create an <strong>Simba</strong> account, simply click this <strong><a href="Register.php">link.</a></strong></p>
                </details> 
                <hr id="IndicatorQuestion"><br>
                <details>
                    <summary>  <strong>Does Simba ship internationally?</strong> </summary>
                        <p> Unfortunately, <strong>Simba</strong> now ships in Vietnam only.</strong></p>
                </details> 
                <hr id="IndicatorQuestion"><br>
                <details>
                    <summary>    <strong>Who is the creator of Simba | Online shopping mall?</strong> </summary>
                        <p>You can check out the creators of Simba via this <strong><a href="AboutUs.php">link</a></strong>.</p>
                </details> 
                <hr id="IndicatorQuestion"><br>
                <details>
                    <summary>   <strong>Will this webpage receive an HD from the professor?</strong> </summary>
                        <p>Yes, it will.</p>
                </details>
                <hr id="IndicatorQuestion"> <br>

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
</body>
</html> 