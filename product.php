<?php
session_start();
require "productprocessing.php";
$all_products = getAllProducts($_SESSION["storeID"]);
$number_of_products = count($all_products);
$limit = 2;
$page = (isset($_GET['page']) && is_numeric($_GET['page']) ) ? $_GET['page'] : 1;
$paginationStart = ($page - 1) * $limit;
$no_of_lines = $number_of_products;
$new_arrivals = ["", "", "", "",""];
$allRecrods = $no_of_lines;
// Calculate total pages
$totalPages = ceil($allRecrods / $limit);
// Prev + Next
$prev = $page - 1;
$next = $page + 1;
$path = "products.csv";
$last_product = $paginationStart + $limit;
$sort_value = 1;
if(isset($_GET['sort'])){
    $sort_products = sortSelect($_GET['sort']);
}
else{
    $sort_products = sortCSVFile($path);
}
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simba | All Products</title>
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
                            <a href="product.php">Product Browser</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>


    <!-- featured productes -->
    <div class="small-container">
        <!-- <h2 class="title">Featured Products</h2> -->
        <div class="row row-2">
            <h2 id="all-product">All Products</h2>
            <select onchange="sort_products()" id="sort_select">
                    <option value="1" <?php echo ($sort_value == 1) ? "selected" : ""; ?>>Sort by default</option>
                    <option value="2" <?php echo ($sort_value == 2) ? "selected" : ""; ?>>Sort A-Z</option>
                    <option value="3" <?php echo ($sort_value == 3) ? "selected" : ""; ?>>Sort by Price</option>
                    <option value="4" <?php echo ($sort_value == 4) ? "selected" : ""; ?>>Sort by time (newest)</option>
                    <option value="5" <?php echo ($sort_value == 5) ? "selected" : ""; ?>>Sort by time (oldest)</option>
                </select>
        </div>

        <div class="row">
            
        <?php
                $sort_products = $all_products;
                $path = "products.csv";
                if(isset($_GET['sort'])){
                    $sort_value = $_GET['sort'];

                    if($sort_value == 1){
                        $sort_products = sortCSVFile($path);
                    } else if($sort_value == 2){
                        $sort_products = sortCSVFile($path, 1);
                    } else if($sort_value == 3){
                        $sort_products = sortCSVFile($path, 2);
                    } else if($sort_value == 4){
                        $sort_products = sortCSVFile($path, 3, false);
                    }else if($sort_value == 5){
                        $sort_products = sortCSVFile($path, 3);
                    } else{
                        $sort_products = sortCSVFile($path);
                    }
                } else{
                    $sort_products = sortCSVFile($path);
                }
                for ($i=0; $i < count($sort_products); $i++) {
                    $link = "";
                   if($i != 0){
                        if(($i > $paginationStart) && ($i < $last_product + 1)){
                            $data = $sort_products[$i];
                            $name = $data[1];
                            $price = $data[2];
                            if($i%2 == 0){
                                $img ="https://i.imgur.com/eNzg9Tj.png";
                            }
                            else{
                                $img ="https://i.imgur.com/X3TOrCf.png";
                            }
                            if($i%2 == 0){
                                $link ="productdetail.php";
                            }
                            else{
                                $link ="productdetail.php";
                            }
            ?>
            
            <div class="col-product-4">
                <a href= <?php echo $link?>>
                    <img src="<?php echo $img; ?>" alt="<?php echo $name; ?>">
                </a>
                <h3><?php echo $name; ?></h3>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$<?php echo $price; ?></p>
            </div>
            
            <?php
                        }
                   }
                }
            ?>
        </div>
        <div class="page-btn">
            <?php 
            if($page == 1){ 
        ?>
            <span class="active_pagination"><i class="fa fa-arrow-left"></i></span>
            <?php
            } else{
        ?>
            <span class="pagination_span"
                onclick="window.location.href='<?php echo "product.php?sort=".$sort_value."&page=". $prev; ?>'"><i
                    class="fa fa-arrow-left"></i></span>
            <?php
            }
        ?>
            <?php for($i = 1; $i <= $totalPages; $i++ ): 

            if($page == $i){
                ?>
            <span class="active_pagination" onclick="window.location.href='#'"><?php echo $i; ?></span>
            <?php
            } else{
                ?>
            <span class="pagination_span"
                onclick="window.location.href='product.php?sort=<?php echo $sort_value ?>&page=<?php echo $i; ?>'"><?php echo $i; ?></span>
            <?php
            }
        ?>
            <?php endfor; ?>
            <?php 
            if($page >= $totalPages){ 
        ?>
            <span class="active_pagination"><i class="fa fa-arrow-right"></i></span>
            <?php
            } else{
        ?>
            <span class="pagination_span"
                onclick="window.location.href='<?php echo "product.php?sort=".$sort_value."&page=". $next; ?>'"><i
                    class="fa fa-arrow-right"></i></span>
            <?php
            }
        ?>
        </div>
       
          
       
      }
  


    ?>


                

            
        
      

           
        </div>
        <br><br>


                

            
        
      

           
        </div>
        <br><br>

       


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
    <script src="main.js"></script>
        <script src="product.js"></script>
</body>

</html>