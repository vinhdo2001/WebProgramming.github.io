<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simba | Online Shopping Mall</title>
    <link rel="stylesheet" href="index2.css">
    <link rel="stylesheet" href="NavBar.css">
    <link href="Vinh's/cookie.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&family=Montserrat:wght@100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="checkVisitedLink.js" async></script>
    <script src="Slider1.js" async></script>
    <script src="Slider2.js" async></script>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                <?php
                echo"
                <a href='/index.php'>
                <img src='https://i.imgur.com/WnDfSUO.png' alt='Logo' width='65%'></img>
                </a>";
                ?>
                    
                </div>
                <nav>
                    <input type="checkbox" id="menu-icon">
                    <label for="menu-icon">Menu</label>
                    <ul id="MenuItems">
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
                            <a href="ProductBrowser.html">Browse</a>

                        </li>
                    </ul>
                </nav>

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
   
<?php
require "commonphp.php";
require "browseproductsprocessing.php";
if(isset($_GET["submitName"]) || isset(($_GET["submitCatagory"]))){
        $sortedArray = setSortItems();
} else{
    $_GET["submitName"] = True;
    $_GET["store_name"] = "A";
    $sortedArray = setSortItems();
}

// Load template

$cssArr = ["headerandfooter","mallSort","cookies"];
$fileTitle = "Contact Us";



?>


<main>
    <section>
        <div class="container1">
            <div class="card">
                <h1 class="name">Browse Stores by Category</h1>
                <form method="get" action="browseproducts.php">
                    <select class="catagories_name" name="store_catagories">
                        <option value="" selected disabled hidden>Select a store category</option>
                        <option value="1">Department stores</option>
                        <option value="2">Grocery stores</option>
                        <option value="3">Restaurants</option>
                        <option value="4">Clothing stores</option>
                        <option value="5">Accessory stores</option>
                        <option value="6">Pharmacies</option>
                        <option value="7">Technology stores</option>
                        <option value="8">Pet stores</option>
                        <option value="9">Toy stores</option>
                        <option value="10">Specialty stores</option>
                        <option value="11">Thrift stores</option>
                        <option value="12">Services</option>
                        <option value="13">Kiosks</option>
                    </select>
                    <input type="submit" name="submitCatagory" value="Browse">
                </form>
            </div>
            <div class="card">
                <h1 class="name">Browse Stores by Name</h1>
                <form method="get" action="browseproducts.php">
                    <select class="catagories_name" name="store_name">
                        <option value="" selected disabled hidden>Select a letter for the store name.</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        <option value="G">G</option>
                        <option value="H">H</option>
                        <option value="I">I</option>
                        <option value="J">J</option>
                        <option value="K">K</option>
                        <option value="L">L</option>
                        <option value="M">M</option>
                        <option value="N">N</option>
                        <option value="O">O</option>
                        <option value="P">P</option>
                        <option value="Q">Q</option>
                        <option value="R">R</option>
                        <option value="S">S</option>
                        <option value="T">T</option>
                        <option value="U">U</option>
                        <option value="V">V</option>
                        <option value="W">W</option>
                        <option value="X">X</option>
                        <option value="Y">Y</option>
                        <option value="Z">Z</option>
                    </select>
                    <input type="submit" name="submitName" value="Browse">
                </form>
            </div>
        </div>
    </section>
    <section>
        <?php
                if(isset($sortedArray)){
                    echo "<div class='mallDiv'>";
                    $num = 0;
                    if(!empty($sortedArray)){
                        foreach($sortedArray as $mallInfo){
                            $mallName = $mallInfo["name"];
                            $mallID = $mallInfo["id"];
                            echo "<div class='mallCont'>";
                            if($num % 2 == 0){
                                echo "<a href='/storeHome.php?id={$mallID}&name={$mallName}'><img class='mallimg' src='https://product.hstatic.net/1000370106/product/12.1.1_c1b1a19b8a734a2e9a4c365e0a030bb9_master.jpg'></a>";
                                echo "<a href='/storeHome.php?id={$mallID}&name={$mallName}'><h2>{$mallName}</h2></a>";
                            }else{
                                echo "<a href='/storeHome.php?id={$mallID}&name={$mallName}'><img class='mallimg' src='https://product.hstatic.net/1000370106/product/4.1_7143819b4290477d8d3ab42da4d1602c_master.jpg'></a>";
                                echo "<a href='/storeHome.php?id={$mallID}&name={$mallName}'><h2>{$mallName}</h2></a>";

                            }
                            $num ++;
                            
                            echo "</div>";
                        }
                    } else{
                        echo "<p>There is no matched data.</p>";
                    }
                    echo "</div>";
                }
            ?>
    </section>
    <?php
  
    $jsArr = ["cookies"];
          
?>
</main>
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
