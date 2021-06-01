<?php 
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0" />
    <title>install.php</title>
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
    <div class="account-login">
        <div class="cointainer">
            <div class="row">
                <div class="col-2">
                    <div class="form-login">
                        <div class="form-btn">
                            <span>Admin Register</span>
                            <hr id="Indicator">
                        </div>

                        <form method="post" action="server.php">
                            <input type="email" name="ademail" placeholder="Email" id="email" required>
                            <input type="password" name="adpassword" placeholder="Password" id="password" required>
                            <input type="password" name="adconpassword" placeholder="Password Confirm" id="conpassword" required>
                            <?php
                            if (isset($_SESSION['conpassword']) && $_SESSION['conpassword'] ==  true) {
                                echo "<p style='color:red;'>Password doesn't match</p>";
                                unset($_SESSION['conpassword']);
                            };
                            ?>                            
                            <input type="hidden" name="type" value="3" required/>
                            <button type="submit" class="button">Register</button>
                        </form>
                    </div>
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
</body>

</html>