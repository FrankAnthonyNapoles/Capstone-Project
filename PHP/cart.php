<?php 
    include 'startsession.php';
    // Redirects to homepage if there's no active account
    include 'redirect_index_if_not_loggedin.php'; 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Cart</title>
        <link rel="stylesheet" href="../css/styles_cart.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
    <?php include 'navbar.php'?>
        <h2 id="headerpage">Your Cart</h2>
        <div id="item-cart">
            <div class="cart-heading">
                <span id="head-holder-forty-padded"><h4 class="heading-word">Product</h4></span>
                <span class="head-holder-fifteen"><h4 class="heading-word">Price</h4></span>
                <span class="head-holder-twenty"><h4 class="heading-word">Quantity</h4></span>
            </div>
            <hr>
            
            <div class="item">
                <h4 id="pharmacy-name">Pharmacy Name</h4>
                <div class="item-row">
                    <div id="head-holder-ten"><img src="..\images\box.jpg" alt="Medicine Sample" id="med-image"></div>
                    <span id="head-holder-forty"><p class="item-row-value">Sample Medicine Name 200mg</p></span>
                    <span class="head-holder-fifteen"><p class="item-row-value">P 100.00</p></span>
                    <span class="head-holder-twenty"><input type="number" value="1" id="input-quantity" min="1" max="10"></span>
                </div>
                <div class="item-row">
                    <div id="head-holder-ten"><img src="..\images\box.jpg" alt="Medicine Sample" id="med-image"></div>
                    <span id="head-holder-forty"><p class="item-row-value">Sample Medicine Name 200mg</p></span>
                    <span class="head-holder-fifteen"><p class="item-row-value">P 100.00</p></span>
                    <span class="head-holder-twenty"><input type="number" value="1" id="input-quantity" min="1" max="10"></span>
                </div>

                <h4 id="pharmacy-name">Pharmacy Name</h4>
                <div class="item-row">
                    <div id="head-holder-ten"><img src="..\images\box.jpg" alt="Medicine Sample" id="med-image"></div>
                    <span id="head-holder-forty"><p class="item-row-value">Sample Medicine Name 200mg</p></span>
                    <span class="head-holder-fifteen"><p class="item-row-value">P 100.00</p></span>
                    <span class="head-holder-twenty"><input type="number" value="1" id="input-quantity" min="1" max="10"></span>
                </div>
                <div class="item-row">
                    <div id="head-holder-ten"><img src="..\images\box.jpg" alt="Medicine Sample" id="med-image"></div>
                    <span id="head-holder-forty"><p class="item-row-value">Sample Medicine Name 200mg</p></span>
                    <span class="head-holder-fifteen"><p class="item-row-value">P 100.00</p></span>
                    <span class="head-holder-twenty"><input type="number" value="1" id="input-quantity" min="1" max="10"></span>
                </div>
            </div>
        </div>
    </body>
</html>