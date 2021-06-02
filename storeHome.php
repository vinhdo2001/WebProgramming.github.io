<!DOCTYPE html>
<<<<<<< HEAD
 <html lang="en">
 <?php

require 'phpForHomepage/store_functions.php';
if(isset($_GET["submitName"]) || isset(($_GET["submitCatagory"]))){
        $sortedArray = setSortItems();
} else{
    $_GET["submitName"] = True;
    $_GET["store_name"] = "A";
    $sortedArray = setSortItems();
}

?>

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Simba | Online Shopping Mall</title>
     <link rel="stylesheet" href="Home.css">
     <link rel="stylesheet" href="store.css">
     <!-- <link rel="stylesheet" href="index2.css"> -->
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
                             <a href="order-placement.html">Cart</a>
                         <li>
                         <li>
                             <a href="AboutUs.html">About us</a>
                         </li>
                         <li>
                             <a href="MyAccount(logged-in).html">Account</a>
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
=======
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simba | Online Shopping Mall</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="store.css">
    <!-- <link rel="stylesheet" href="index2.css"> -->
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
                            <a href="MyAccount(logged-in).html">Account</a>
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
>>>>>>> parent of aa68943 (phuong edit)


 <div class="categories">
     <div class="small-container">
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
<<<<<<< HEAD
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
                                echo "<a href='storeHome.php?storeID={$mallID}'><img class='mallimg' src='New_products/mall4.jpg'></a>";
                                echo "<a href='sport/index.php?storeID={$mallID}'><h2>{$mallName}</h2></a>";
                            }else{
                                echo "<a href='game/index.php?storeID={$mallID}'><img class='mallimg' src='New_products/mall4.jpg'></a>";
                                echo "<a href='game/index.php?storeID={$mallID}'><h2>{$mallName}</h2></a>";

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
=======
        </div>
    </div>



    <!-- <img class="center-fit"
        src='https://vn-test-11.slatic.net/shop/43098843db2b4b8c2573171760477e70.jpeg_1800x1800q90.jpg_.webp?width=1400'> -->
 
<div class="categories">
    <div class="small-container">
    <?php 
    require_once 'phpForHomepage/product_functions.php';

    $all_products=read_all_products();

    $product_images= [
        'https://product.hstatic.net/1000370106/product/8.2_058fb4153d984e4cae66dc1769393d09_master.jpg',
        'https://product.hstatic.net/1000370106/product/5.2.1_c28c5cd9049c4a00b2471938b1f67a03_master.jpg',
        'https://product.hstatic.net/1000370106/product/19.2.1_3fc47167084a4c7f852ff16b6a6c4abb_master.jpg',
        'https://product.hstatic.net/1000370106/product/9.1_ab24be97f37444aaa5c676ddae699125_master.jpg',
        'https://product.hstatic.net/1000370106/product/16.2.1_28aa5cfe2b394ddba01c4845bbd81739_master.jpg',
        'https://product.hstatic.net/1000370106/product/20.1_e61991eeb4bb4d00b1f9cef214f87946_master.jpg',
        'https://product.hstatic.net/1000370106/product/8.2_058fb4153d984e4cae66dc1769393d09_master.jpg',
        'https://product.hstatic.net/1000370106/product/19.1_f07eeeae858845a38a37873ee317fda1_master.jpg',
        'https://product.hstatic.net/1000370106/product/10.2.1_64d6a07edbc54c74ba0f61e21c9ad09a_master.jpg',
        'https://product.hstatic.net/1000370106/product/25.1_d5cf847088434116804d8fa484aac20c_master.jpg',
        'https://product.hstatic.net/1000370106/product/12.1.1_82a94763da854f5bb10c2014c823b9ab_master.jpg',

    ];

    $store_name=$_GET['name'];
    $store_id=$_GET['id'];
    echo"
        <div class='row row-2'>
            <h2>$store_name</h2>
            <select onChange='window.location.href=this.value'>
                <option value='/storeHome.php?id={$store_id}&name={$store_name}'>Default Sorting</option>
                <option value='/newProductInStoreHome.php?id={$store_id}&name={$store_name}'>New Product </option>
                <option value='hnoss-newest.html'>Featured Product </option>
            </select>
        </div>
        
    ";
    ?>
  
    <div class='row'> 
    <?php
        $count = 0;
        foreach($all_products as $product){
            $product_id=$product['id'];
            $product_name = $product['name'];
            $product_price = $product['price'];
            $store=$product['store_id'];
            if ($store==$store_id){
>>>>>>> parent of aa68943 (phuong edit)

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