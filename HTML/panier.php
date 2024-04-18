<?php
session_start();

include "config.php";

function getProductDetails($productId, $cnx) {
   
    $query = $cnx->prepare("SELECT * FROM product WHERE id = ?");
    $query->execute([$productId]);
    $product = $query->fetch(PDO::FETCH_OBJ);
    return $product;
}


function calculateTotalPrice($cart, $cnx) {
    $totalPrice = 0;
    foreach($cart as $productId) {
      
        $product = getProductDetails($productId, $cnx);
        if($product) {
          
            $totalPrice += $product->price;
        }
    }
    return $totalPrice;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="panier.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col"><h4><b>Shopping Cart</b></h4></div>
                    <div class="col align-self-center text-right text-muted"> items</div>
                </div>
            </div>
            <?php
            
            if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
               
                $totalPrice = 0;
                foreach($_SESSION['cart'] as $productId) {
                   
                    $product = getProductDetails($productId, $cnx);
                    if($product) {
                        
                        ?>
                        <div class="row border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-2"><img class="img-fluid" src="<?= $product->image ?>"></div>
                                <div class="col">
                                    <div class="row text-muted"><?= $product->name ?></div>
                                    <div class="row"><?= $product->description ?></div>
                                </div>
                                <div class="col">
                                    <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                                </div>
                                <div class="col">&dollar; <?= $product->price ?> <span class="close">&#10005;</span></div>
                            </div>
                        </div>
                        <?php
                        
                        $totalPrice += $product->price;
                    } else {
                        echo "<p>Product not found</p>";
                    }
                }
                ?>
                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">TOTAL PRICE</div>
                    <div class="col text-right">&dollar; <?= $totalPrice ?></div>
                </div>
                <?php
            } else {
                echo "<p>Your cart is empty</p>";
            }
            ?>
            <div class="back-to-shop"><a href="home.php">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
        </div>
        <div class="col-md-4 summary">
        <div><h5><b>Summary</b></h5></div>
                    <hr>
                    <div class="row">
                       
                        <div class="col text-right">&dollar;<?= $totalPrice ?></div>
                    </div>
                    <form>
                        <p>SHIPPING</p>
                        <select><option class="text-muted">Standard-Delivery- &dollar;5.00</option></select>
                        <p>GIVE CODE</p>
                        <input id="code" placeholder="Enter your code">
                    </form>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right">&dollar;<?= $totalPrice+5 ?></div>
                    </div>
                    <button class="btn" id="checkoutBtn">CHECKOUT</button>

<script>
 
    const checkoutBtn = document.getElementById('checkoutBtn');

    checkoutBtn.addEventListener('click', function() {
      
        alert('Thank you for your purchase!');
        const notification = document.createElement('div');
        notification.classList.add('notification');
        notification.textContent = 'Thank you for your purchase!';
        document.body.appendChild(notification);
         setTimeout(function() {
            notification.remove();
        }, 3000); 
    });
</script>

                </div>
        </div>
    </div>
</div>
</body>
</html>
