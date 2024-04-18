<?php
session_start();


if(isset($_POST['add_to_cart']) && isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];

    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

  
    $_SESSION['cart'][] = $productId;
}

include "config.php";
$produits = $cnx->query("SELECT * FROM product")->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="css/featherlight.min.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
    <title>Home</title>
</head>
<body>
    <header id="top">
        <div class="wrapper">
            <img class="logo" src="https://cdn.stockmediaserver.com/smsimg31/pv/IsignstockContributors/ISS_18907_18510.jpg?token=KmSkzo5lcVD8-6-CWs64Cbcw61VQcLR40DZfXUdbXuo&class=pv&smss=52&expires=4102358400" alt="">
            <nav>
                <ul id="navigation">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Products</a></li>
                    <li><a href="#products">Top Sales</li>
                    <li><a class="nav-cta" href="#">Try Now</a></li>
                    <a class="nav-cta" href="panier.php"><img id="cart" src="cart.png" alt=""></a>
                    <li><a class="nav-cta" href="deconnexion.php">Logout</a></li>

                </ul>
            </nav>
        </div>
    </header>
    <section id="banner2"><a name="home"></a>
        <div class="wrapper">
            <h2>Gamix</h2>
            <p class="subtitle">Clean, Minimal Landing Page Template</p>
            <div class="buttons">
                <a href="#" class="button-1">Try Now</a>
                <a href="#" class="button-2">Learn More</a>
            </div>
        </div>
    </section>
    <section id="products">
        <?php foreach ($produits as $produit) { ?>
            <div class='container-fluid'>
                <div class="card mx-auto col-md-3 col-10 mt-5">
                    <img class='mx-auto img-thumbnail'
                         src="<?= $produit->image ?>"
                         width="auto" height="auto"/>
                    <div class="card-body text-center mx-auto">
                        <div class='cvp'>
                            <h5 class="card-title font-weight-bold"><?= $produit->name ?></h5>
                            <p class="card-text"><?= $produit->price ?></p>
                            
                            <form action="#" method="post">
                                <input type="hidden" name="product_id" value="<?= $produit->id ?>">
                                <button type="submit" name="add_to_cart" class="btn cart px-auto">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>
</body>
</html>
