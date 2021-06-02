<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Simba | Online Shopping Mall</title>
     <link rel="stylesheet" href="Home.css">
     <link rel="stylesheet" href="store.css">
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
                     echo "
                     <a href='/index.php'>
                         <img src='https://i.imgur.com/WnDfSUO.png' alt='Logo' width='65%'>
                     </a>";

                     ?>
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
                             <a href="ProductBrowser.php">Product Browser</a>
                         </li>
                     </ul>
                 </nav>

             </div>
         </div>
     </div>


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
                         <option value='/featuredProductInStoreHome.php?id={$store_id}&name={$store_name}'>Featured Product </option>
                     </select>
                 </div>
             ";
         ?>
             <div class="row">
             <?php
         $count = 0;
         foreach($all_products as $product){
             $product_id=$product['id'];
             $product_name = $product['name'];
             $product_price = $product['price'];
             $store=$product['store_id'];
             $featured_in_store=$product['featured_in_store'];

             if ($store==$store_id && $featured_in_store=="TRUE"){
                 echo"
                 <div class=''mallDiv''>
                 <div class='mallCont'>
                 <img src='$product_images[$count]'
                     alt='' class='product-img'>
                     <a href='/ProductDetail.php?id={$product_id}&name={$product_name}&price={$product_price}'>
                     <h4>$product_name </h4>
                     <div class='rating'>
                         <span class='fa fa-star checked'></span>
                         <span class='fa fa-star checked'></span>
                         <span class='fa fa-star checked'></span>
                         <span class='fa fa-star '></span>
                         <span class='fa fa-star '></span>
                     </div>
                     <a>$product_price</a>
                 </a>
                 </div>
                 </div>
                 
               ";
               $count++;
             }

         }
     ?>
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