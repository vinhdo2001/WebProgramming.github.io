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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simba | Terms of Service</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="NavBar.css">
    <link href="Vinh's/cookie.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&family=Montserrat:wght@100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    

    <div class="ToS">
        <h2>Terms of Service</h2>
        <h3>Agreement to terms</h3>
        <?php

        $file_name = 'ToS.csv';
        $fp = fopen($file_name, 'r');
        $ToS = fgetcsv($fp);

     
        echo"
        
            <h4>$ToS[0]</h4>
        ";
       
    ?>


    </div>

    <div> 
        <form method="post" >
            <input type="text" name="content" placeholder="Please edit the file"  required>
            
            <button type="submit" class="button">Login</button>

        </form>
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