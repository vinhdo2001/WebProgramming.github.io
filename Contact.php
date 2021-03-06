<?php include 'deleteInstall.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simba Contact Page</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="store.css">
    <link rel="stylesheet" href="contact.css">
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
    <div class="container">
        <div style="text-align:center">
            <h2>Contact Us</h2>
        </div>
        <div class="row">
            <div class="column">
            <form action="AfterContact.php"  id="form-contact">
                <label for="contact-purpose">Contact Purpose</label>
                <select id="contact-purpose" name="contact-purpose">
                    <option value="australia">Order</option>
                    <option value="canada">Complain</option>     
                </select>
                <div class="form-control">
                <label for="name">Full Name</label>
                <small></small>
                <input type="text" id="fname" name="name" placeholder="Your name..">
                </div>
                
                <div class="form-control">
                <label for="email">Email</label>
                <small></small>
                <input type="text" id="email" name="email" placeholder="Your email..">
                </div>    
                
                <div class="form-control">
                <label for="phone">Phone</label>
                <small></small> 
                <input type="text" id="phone" name="phone" placeholder="Your phone number..">
                </div>

                <div class="form-control">
                <label for="contact-method">Preferred Contact Method</label> <br>
                <small></small> <br>
                <input type="radio" id="method1" name="method" value="email">
                <label for="method1">Email</label>
                <input type="radio" id="method2" name="method" value="phone">
                <label for="method2">Phone</label>
                </div>

                <div class="form-control">
                <p style="padding-top: 20px;">Contact Day</p>
                <small></small> <br>
                <input type="checkbox" id="day1" name="day1" value="Monday">
                <label for="day1"> Monday </label>

                <input type="checkbox" id="day2" name="day2" value="Tuesday">
                <label for="day2"> Tuesday </label>

                <input type="checkbox" id="day3" name="day3" value="Wednesday">
                <label for="day3"> Wednesday </label>

                <input type="checkbox" id="day4" name="day4" value="Thursday">
                <label for="day4"> Thursday </label>

                <input type="checkbox" id="day5" name="day5" value="Friday">
                <label for="day5"> Friday </label>

                <input type="checkbox" id="day6" name="day6" value="Saturday">
                <label for="day6"> Saturday </label>

                <input type="checkbox" id="day7" name="day7" value="Sunday">
                <label for="day7"> Sunday </label>
                </div>
            
                
                
                <div class="form-control">
                <p style="padding-top: 20px;">Message</p> <p style="font-weight: bold;" id="charNum">Enter 50 - 500 characters</p>

                <textarea name="message" placeholder="Write something.." style="height:170px" onkeyup="countChars(this);"></textarea>
                </div>

                <input type="submit" onsubmit="return validateInput()" value="Submit">
                <input type="reset" value="Clear">

            </form>
            </div>
        </div>
    </div>
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
<script src="contact.js"></script>
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
   
</body>

</html>