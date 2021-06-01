<?php include 'deleteInstall.php';
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simba | Product Details</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="NavBar.css">
    <link rel="stylesheet" href="Vinh's/AU.css">
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
                        <img src="productImages/Logo.png" alt="Logo" width="65%">
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
    </div>
    <div class="information">
        <div class="TeamInformation">
            <h2> Team Information</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum laudantium doloribus aliquam alias
                tempore,
                neque obcaecati qui dignissimos doloremque! Exercitationem ducimus doloribus voluptate odit atque sit
                perferendis blanditiis repellat ipsam.</p>
        </div>
        <h2> Member</h2>
    </div>
    <div class="small-container" >
        <div class="row"id="blur">
            <div class="col-4">
                <img src="Image/Nguyen.jpg" alt="product Image" class="project-image">
                <h4>Khoi Nguyen</h4>
                <p>Guitarist</p>
            </div>
            <div class="col-4">
                <img src="Image/Phuong.jpg" alt="product Image" class="project-image">
                <h4>Lam Phuong</h4>
                <p>Need information</p>
            </div>
            <div class="col-4">
                <img src="Image/Tram.jpg" alt="product Image" class="project-image">
                <h4>Ngoc Tram</h4>
                <p>Need information</p>
            </div>
            <div class="col-4">
                <img src="Image/Vinh.jpg" alt="product Image" class="project-image">
                <h4>Thanh Vinh</h4>
                <p>futbol lover</p>
            </div>
            <div class="overlay">
                <div class="overlay-inner">
                    <button class="close">Close X</button>
                    <img src="">
                </div>
            </div> 
        </div>
    </div>
    <script type="text/javascript">
        const buttons = document.querySelectorAll('.col-4');
        const overlay = document.querySelector('.overlay');
        const overlayImage = document.querySelector('.overlay-inner  img');

        function toggle(){
            var blur = document.getElementById('blur');
            blur.classList.toggle('active')
        }
        function open(e) {
            overlay.classList.add('open');
            const src = e.currentTarget.querySelector('img').src;
            overlayImage.src = src;
        } 
        function close(){
            overlay.classList.remove('open');
        }
            buttons.forEach(button => button.addEventListener('click',open));
            overlay.addEventListener('click',close);
    </script>
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