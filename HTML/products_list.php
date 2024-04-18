<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Liste des produits</title>
</head>
<body>

<div class="container py-2">
    <h2>Liste des produits</h2>
    <a href="addproduct.php" class="btn btn-primary">Ajouter produit</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Image</th>
                <th>Date de création</th>
                <th>Opérations</th>
            </tr>
        </thead>
        <tbody>
        <?php
       include "config.php";
        $produits = $cnx->query("SELECT * FROM product")->fetchAll(PDO::FETCH_OBJ);
        foreach ($produits as $produit){
            $prix = $produit->price;
          
            ?>
            <tr>
                <td><?= $produit->id ?></td>
                <td><?= $produit->name ?></td>
                <td><?= $prix ?> <i class="fa fa-solid fa-dollar"></i></td>
                <td><img class="img-fluid" width="90" src="C:\xampp\htdocs\Gamixs\<?= $produit->image ?>" alt="<?= $produit->name?>"></td>
                <td><?= $produit->date ?></td>
                <td>
                    <a class="btn btn-primary" href="modif_product.php?id=<?php echo $produit->id ?>">Modifier</a>
                    <a class="btn btn-danger" href="delete_product.php?id=<?php echo $produit->id ?>" onclick="return confirm('Voulez vous vraiment supprimer le produit <?php echo $produit->libelle?> ?')">Supprimer</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>