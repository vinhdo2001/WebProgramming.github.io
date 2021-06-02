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
                        <li><img src="https://i.imgur.com/vPyCGZZ.png" width="30px" height="30px" alt=""></li>
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
                <!-- <img src="https://i.imgur.com/vPyCGZZ.png" width="30px" height="30px" alt=""> -->
                <!-- <img src="https://i.imgur.com/OA07E9Y.png" class="menu-icon"> -->

            </div>
        </div>
    </div>

    <div class="panel-wrapper">
				<div class="panel-head">
					Terms of Service
				</div>
				<div class="panel-body">

                
                    <?php 
                    if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
                        echo '<form  method = "post" >';
                        if(isset($_POST['submitData'])){
                            $content1 = $_POST['text'];
                            $path = "ToS.txt";
                            file_put_contents($path,$content1);
                        }
                        $path = "ToS.txt";
                    $file= file_get_contents($path);
                    $content = explode(" - ", $file);
                    echo '<p class="text1" style= "border: solid 1px;margin-right: 774px;margin-top: 10px; width: 100%">'.$content[0].'</p>';
                    echo '<textarea  name="text" style="margin-top:20px;display:none" class="text" cols="40" rows="10" >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates ducimus odio porro perspiciatis. Eligendi quae iste mollitia est, rerum dolorem veritatis sint, culpa totam quam voluptates vero maxime. Libero, dolore.</textarea>
                    <br>
                    
                    <p style="cursor: pointer;
                            border: solid 2px black;
                            margin-right: 1055px;
                            padding-left: 10px;
                            color: blue;" 
                         id="buttonEdit" class="edit" >Edit
                    </p>
                    <button name="submitData" style="color: blue;padding: 5px;padding-left: 15px;padding-right: 15px;margin-top: 20px;">Update</button>
                    
                </form>';
                    } 
                    else if(isset($_SESSION['user']) && $_SESSION['user'] == true){
                        $path = "ToS.txt";
                    $file= file_get_contents($path);
                    $content = explode(" - ", $file);
                        echo '<p class="text1" style= "border: solid 1px;margin-right: 774px;margin-top: 10px; width: 100%">'.$content[0].'</p>';
                    }
                    ?>
                <?php
                    
                    ?>
                    
                    <br>
                    
                    <?php
                    ?>
                    
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
<script>
            var text = document.getElementsByClassName("text");
            var text1 = document.getElementsByClassName("text1");
            var edits = document.getElementsByClassName("edit");
            for(let i=0;i<edits.length;i++){
                edits[i].addEventListener("click",function(){
                text1[i].style.display="none";
                text[i].style.display="block";
                })
            }


        
        $(document).ready(function() {
        $('.nav-btn').on('click', function(event) {
            event.preventDefault();
            /* Act on the event */
            $('.sidebar').slideToggle('fast');

            window.onresize = function(){
                if ($(window).width() >= 768) {
                    $('.sidebar').show();
                } else {
                    $('.sidebar').hide();
                }
            };
        });
        });
    </script>
</body>
</html>