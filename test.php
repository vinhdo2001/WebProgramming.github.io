<?php 
    session_start();
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
    

    <div class="panel-wrapper">
				<div class="panel-head">
					Copyright
				</div>
				<div class="panel-body">
                <form  method = "post" >
                <?php
                    if(isset($_POST['submitData'])){
                        $content1 = $_POST['text'];
                        $path = "ToS.txt";
                        file_put_contents($path,$content1);
                    }
                    ?>
                    Section: <input name="section" style="font-size:15px; padding:10px" type="text" value ="ToS" disabled>
                    <br>
                    
                    <?php
                    $path = "ToS.txt";
                    $file= file_get_contents($path);
                    $content = explode(" - ", $file);
                    echo '<p class="text1" style= "border: solid 1px;margin-right: 774px;margin-top: 10px;">'.$content[0].'</p>'
                        ;
                    ?>
                    <textarea  name="text" style="margin-top:20px;display:none" class="text" cols="40" rows="10" >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates ducimus odio porro perspiciatis. Eligendi quae iste mollitia est, rerum dolorem veritatis sint, culpa totam quam voluptates vero maxime. Libero, dolore.</textarea>
                    <br>
                    
                    <p style="cursor: pointer;
                            border: solid 2px black;
                            margin-right: 1055px;
                            padding-left: 10px;
                            color: blue;" 
                         id="buttonEdit" class="edit" >Edit
                    </p>
                    <button name="submitData" style="color: blue;padding: 5px;padding-left: 15px;padding-right: 15px;margin-top: 20px;">Update</button>
                    
                </form>
          
    
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