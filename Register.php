<?php
session_start();
?>
<?php include 'deleteInstall.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0" />
    <title>Simba | Register</title>

    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="NavBar.css">
    <link href="Vinh's/cookie.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&family=Montserrat:wght@100&display=swap" rel="stylesheet">
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
    <div class="account-register">
        <div class="cointainer">
            <div class="form-register">
                <div class="form-btn">
                    <span>Register</span>
                    <hr id="Indicator">
                </div>
                <?php
                if (isset($_SESSION['email_used']) && $_SESSION['email_used'] ==  true) {
                    echo "<p style='color:red;'>Email has already been used</p>";
                    unset($_SESSION['email_used']);
                };

                if (isset($_SESSION['phone_used']) && $_SESSION['phone_used'] ==  true) {
                    echo "<p style='color:red;'>Phone number has already been used</p>";
                    unset($_SESSION['phone_used']);
                };
                ?>

                <form class="form" id="form-register" method="post" action="server.php">
                    <div class="form-control">
                        <input defaultValue="" type="text" placeholder="First name" id="fname" name="fname">
                        <?php
                        if (isset($_SESSION['fname_error']) && $_SESSION['fname_error'] ==  true) {
                            echo "<p style='color:red;'>First name must be at least 3 letters</p>";
                            unset($_SESSION['fname_error']);
                        };
                        ?>
                    </div>
                    <div class="form-control">
                        <input defaultValue="" type="text" placeholder="Last name" id="lname" name="lname">
                        <?php
                        if (isset($_SESSION['lname_error']) && $_SESSION['lname_error'] ==  true) {
                            echo "<p style='color:red;'>Last name must be at least 3 letters</p>";
                            unset($_SESSION['lname_error']);
                        };
                        ?>
                    </div>
                    <div class="form-control">
                        <input defaultValue="" type="tel" placeholder="Phone number" id="phone" name="phone">
                        <?php
                        if (isset($_SESSION['phone_error']) && $_SESSION['phone_error'] ==  true) {
                            echo "<p style='color:red;'>Invalid phone number</p>";
                            unset($_SESSION['phone_error']);
                        };
                        ?>
                    </div>
                    <div class="form-control">
                        <input defaultValue="" type="text" placeholder="Email" id="email" name="email">
                        <?php
                        if (isset($_SESSION['email_error']) && $_SESSION['email_error'] ==  true) {
                            echo "<p style='color:red;'>Invalid email</p>";
                            unset($_SESSION['email_error']);
                        };
                        ?>
                    </div>
                    <div class="form-control">
                        <input defaultValue="" type="password" name="password" placeholder="Password" id="password">
                        <?php
                        if (isset($_SESSION['password_error']) && $_SESSION['password_error'] ==  true) {
                            echo "<p style='color:red;'>Invalid password</p>";
                            unset($_SESSION['password_error']);
                        };
                        ?>
                    </div>
                    <div class="form-control">
                        <input defaultValue="" type="password" name="conpassword" placeholder="Confirm password" id="conpassword">
                        <?php
                        if (isset($_SESSION['conpassword']) && $_SESSION['conpassword'] ==  true) {
                            echo "<p style='color:red;'>Password does not match</p>";
                            unset($_SESSION['conpassword']);
                        };
                        ?>
                    </div>
                    <small>Profile picture</small>
                    <input type='file' class="custom-file-input" name='picture' placeholder="Choose your profile picture">
                    <div class="form-control">
                        <input defaultValue="" type="text" name="address" placeholder="Address" id="address">
                        <?php
                        if (isset($_SESSION['address_error']) && $_SESSION['address_error'] ==  true) {
                            echo "<p style='color:red;'>Address must be at least 3 letters</p>";
                            unset($_SESSION['address_error']);
                        };
                        ?>
                    </div>
                    <div class="form-control">
                        <input defaultValue="" type="text" name="city" placeholder="City" id="city">
                        <?php
                        if (isset($_SESSION['city_error']) && $_SESSION['city_error'] ==  true) {
                            echo "<p style='color:red;'>City must be at least 3 letters</p>";
                            unset($_SESSION['city_error']);
                        };
                        ?>
                    </div>
                    <div class="form-control">
                        <input defaultValue="" type="text" name="zipcode" placeholder="Zip code (4 to 6 digits)" id="zipcode">
                        <?php
                        if (isset($_SESSION['zipcode_error']) && $_SESSION['zipcode_error'] ==  true) {
                            echo "<p style='color:red;'>Zipcode must be from 4 to 6 digits</p>";
                            unset($_SESSION['zipcode_error']);
                        };
                        ?>
                        <br> </br>
                    </div>

                    <select defaultValue="" name="country">
                        <option value="" id="country"> <label for="country"> Select Country </label></option>
                        <option value="VN" id="VN"> <label for="VN"> Vietnam </label></option>
                        <option value="US" id="US"> <label for="US"> The United States of America </label></option>
                        <option value="JP" id="JP"> <label for="JP"> Japan </label></option>
                        <option value="KR" id="KR"> <label for="KR"> Korea </label></option>
                    </select>
                    <div class="form-control">
                        <div class="category" id="account_type">
                            <input type="radio" onclick="javascript:optionCheck()" name="account_type" value="storeowner" id="storeowner"><label for="storeowner">Store Owners</label>

                            <input type="radio" onclick="javascript:optionCheck()" name="account_type" value="shopper" id="shopper"><label for="shopper">Shoppers</label> </br>
                            <?php
                            if (isset($_SESSION['account_error']) && $_SESSION['account_error'] ==  true) {
                                echo "<p style='color:red;'>One account type must be chosen</p>";
                                unset($_SESSION['account_error']);
                            };
                            ?>
                        </div>
                    </div>
                    <div id="owneroption" style="visibility:hidden">
                        <input type="text" name="business" value="Business name" placeholder="Business name">
                        <input type="text" name="store" value="Store name" placeholder="Store name">
                        <select name="category" id="category">
                            <option value=""> <label for="category"> Select Category </label></option>
                            <option value="ds" id="ds"> <label for="ds"> Department Store </label></option>
                            <option value="gs" id="gs"> <label for="gs"> Grocery Store </label></option>
                            <option value="res" id="res"> <label for="res"> Restaurant </label></option>
                            <option value="cs" id="cs"> <label for="cs"> Clothing Store </label></option>
                            <option value="as" id="as"> <label for="as"> Accessory Store </label></option>
                            <option value="ph" id="ph"> <label for="ph"> Pharmacies </label></option>
                            <option value="ts" id="ts"> <label for="ts"> Technology Store </label></option>
                            <option value="ps" id="ps"> <label for="ps"> Pet Store </label></option>
                            <option value="tys" id="tys"> <label for="tys"> Toy Store </label></option>
                            <option value="ss" id="ss"> <label for="ss"> Specialty Store </label></option>
                            <option value="ths" id="ths"> <label for="ths"> Thrift Store </label></option>
                            <option value="sv" id="sv"> <label for="sv"> Service </label></option>
                            <option value="kk" id="kk"> <label for="kk"> Kiosk </label></option>
                        </select>
                    </div>
                    <input type="hidden" name="type" value="2" />
                    <button type="submit" class="button">Register</button>
                    <button type="reset" class="button">Clear</button>
                </form>
            </div>
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
    <script type="text/javascript" src="verify.js"></script>
</body>

</html>