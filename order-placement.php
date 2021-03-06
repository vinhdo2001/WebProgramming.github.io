<?php include 'deleteInstall.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | Simba</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="NavBar.css">
    <link rel="stylesheet" href="cart.css">
    <link href="Vinh's/cookie.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&family=Montserrat:wght@100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css" />
   
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

    <?php
        if(isset($_SESSION['user'])){
            if($_SESSION['user'] === true){
            }
            else{
                echo '<div id="login-modal" class="modal">
                       
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            Please login to proceed.
                            </br>
                            <span>
                                <a href="login.php" class="button">login</a>
                            </span>
                        </div>
                        </div>';
            }
        }
        else{
            echo '<div id="login-modal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        Please login to proceed.
                        </br>
                        <span>
                            <a href="login.php" class="button">login</a>
                        </span>
                    </div>
        </div>';
        }
        ?>

<?php
    function order_function(){
        if(isset($_SESSION['user'])){
            if($_SESSION['user'] === true){
            }
            else{
                echo '<div id="login-modal" class="modal">
                       
                        
                            
                            </br>
                            <span>
                                <a href="thankyou.php" class="button">order</a>
                           
                        </div>';
            }
        }
        else{
            echo '<div id="login-modal" class="modal">
                   
                       
                        </br>
                        <span>
                            <a href="login.php" class="button">order</a>
                        </span>
                   
        </div>';
        }
    }
        ?>

    <section class="container content-section">
        <h2 class="section-header">CART</h2>
        <div class="product-container">
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">NAME ITEM</span>
              
                <span class="cart-price cart-header cart-column">QUANTITY</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                

            </div>

        </div>

    
        <div class="products-here">
            <table style="width: 100%;  margin-left: 10%;" id="myTable" class="table" >
               <tbody>
                    <tr>
                        <td  id="total"></td>
                    </tr>
                </tbody>
            </table>
        
        </div>
    </section>

    <h4 style="text-align: right; margin-right: 10%;">COUPON</h4> <input style="max-width: 20%; margin-left: 70%;" type="text" id="field1"  value=""><br>
    <h4 style="text-align: right; margin-right: 10%;">Total price after coupon added:</h4> <input style="max-width: 20%; margin-left: 70%;" type="text" id="field2"><br><br>
    <button style="float: right; margin-right: 10%;" class="btn" onclick="myFunction()">Add Coupon</button>
    
        <div style="margin-top: 10%;" class="flex-container">
            <div></div>
            <div></div>
            <div></div>

            
            
            <br><br>
            <button class="btn" onclick=" <?php order_function() ?>"> </button>
            <br><br>
            <div class="btn"><a href="product.php">Continue Shopping &#8594;</a></div>
            
        </div>

    

    <div class="small-container">
        <div class="row row-2">
            <h2 id="recommended-products">Recommended Products</h2>
            <a href="product.php">
                <p id="view-more">View More</p>
            </a>
        </div>
    </div>

    <!-- -------product----- -->
    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <img src="productImages//product-1.jpg" alt="">
                <h4>Red T-shirt</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="productImages/product-2.jpg" alt="">
                <h4>Red T-shirt</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="productImages/product-3.jpg" alt="">
                <h4>Red T-shirt</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="productImages/product-4.jpg" alt="">
                <h4>Red T-shirt</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star "></span>
                </div>
                <p>$50.00</p>
            </div>
        </div>
    </div>
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
<script>
    let table = document.getElementById("myTable");


let cart = JSON.parse(localStorage.getItem('cart'));
let productContainer = document.querySelector(".products-here");
let total = 0;

cart.forEach((element, index) => {

    let row = table.insertRow(index);
    let cell0 = row.insertCell(0);
    let cell1= row.insertCell(1);
    let cell2 = row.insertCell(2);
   
    
   
    

    cell0.innerHTML = element.title;
    cell1.innerHTML = element.quantity;
    cell2.innerHTML = element.price;
    
    
    total += parseInt(element.price);
});
console.log(cart.length);
let lastRow = table.insertRow(cart.length);
console.log(lastRow);
let lastCell0 = lastRow.insertCell(0);
let lastCell1 = lastRow.insertCell(1);


lastCell0.innerHTML = "Total";
lastCell1.innerHTML = total;


console.log(discount);
console.log(total);

function myFunction() {
if(document.getElementById("field1").value == 'COSC2430-HD') {    
document.getElementById("field2").value = total*0.8;
}else if(document.getElementById("field1").value == 'COSC2430-DI'){
document.getElementById("field2").value = total*0.9;
}else{
document.getElementById("field2").value = "you must add coupon";
}
}

</script>
<script src="product.js"></script>
<script src="cart.js"></script>

</html>