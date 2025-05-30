<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Description Page</title>
    <link rel="stylesheet" href="../style/description.css">
</head>
<body>

<?php
include '../structure/header.html';
?>

    <div class="container">
        <div class="image-gallery">
            <img id="main-image" src="../photos/bfe13d60120129f48941c0f3323a74dd.jpg" alt="Main Product Image">
            <div class="product-description">
                <span>Please wear me! </span> <br> 
                <!-- <span></span> -->
            </div>
        </div>
        <div class="product-details">
            <h1>Premium Peanut Butter</h1>
            <div class="rating">
                &#9733; &#9733; &#9733; &#9733; &#9734; (150 Reviews)
            </div>
            <div class="price">$5.00</div>
            <p>Celebrate the legacy of Manchester United with this official T-shirt. Featuring the iconic crest and bold team colors, it's designed for true fans who live and breathe football. Made from high-quality, breathable fabric, it’s perfect for match days or casual outings."</p>
            <div class="options">
                <label for="size">Size:</label>
                <div class="size-options">
                    <button data-size="S">S</button>
                    <button class="active" data-size="M">M</button>
                    <button data-size="L">L</button>
                </div>
            </div>
            <div class="quantity">
                <button id="decrease">-</button>
                <input type="text" id="quantity" value="1">
                <button id="increase">+</button>
            </div>
            <div class="buttons">
                <button class="buy-now">Buy Now</button>
            </div>
        </div>
    </div>

    <div class="overlay" id="form-overlay">
        <div class="form-container">
            <h2>Order Details</h2>
            <form id="order-form" action="../php/pl_order.php"  method="post">
                <input type="email"name="email" id="email" placeholder="Your Email" required>
                <input type="password" name="password" id="password" placeholder="Your Password" required>
                <button type="submit" name="submit">Start Processing</button>
            </form>
            
        </div>
    </div>
    <!-- Javascript -->
     <script  src="../function/Descriptioin.js"></script>
</body>
</html>
