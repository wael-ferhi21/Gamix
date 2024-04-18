<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Modifier produit</title>
</head>
<body>

<div class="container py-2">
    <h4>Modifier produit</h4>
    <?php
    $id = $_GET['id'];
     include "config.php";
    $sqlState = $cnx->prepare('SELECT * from product WHERE id=?');
    $sqlState->execute([$id]);
    $produit = $sqlState->fetch(PDO::FETCH_OBJ);;
    if (isset($_POST['modifier'])) {
        $nom= $_POST['name'];
        $prix = $_POST['price'];
        $description = $_POST['description'];

        $filename = '';
        if (!empty($_FILES['image']['name'])) {
            $image = $_FILES['image']['name'];
            $filename = uniqid() . $image;
          // move_uploaded_file($_FILES['image']['tmp_name'], 'C:\xampp\htdocs\Gamix\HTML' . $filename);
        }


        if (!empty($nom) && !empty($prix)) {

            if (!empty($filename)) {
                $query = "UPDATE product SET name=? ,price=? ,description=?,image=? WHERE id = ? ";
                $sqlState = $cnx->prepare($query);
                $updated = $sqlState->execute([$nom, $prix, $description, $filename, $id]);
            } else {
                $query = "UPDATE product SET name=? ,price=? ,description=? WHERE id = ? ";
                $sqlState = $cnx->prepare($query);
                $updated = $sqlState->execute([$nom, $prix, $description, $id]);
            }
            
            if ($updated) {
                header('location: products_list.php');
            } else {

                ?>
                <div class="alert alert-danger" role="alert">
                    Database error (40023).
                </div>
                <?php
            }
        } else {
            ?>
            <div class="alert alert-danger" role="alert">
              Nom du produit et prix sont obligatoires.
            </div>
            <?php
        }

    }
    ?>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $produit->id ?>">
        <label class="form-label">Nom du produit </label>
        <input type="text" class="form-control" name="name" value="<?= $produit->name ?>">

        <label class="form-label">Prix</label>
        <input type="number" class="form-control" step="0.1" name="price" min="0" value="<?= $produit->price?>">


        <label class="form-label">Description</label>
        <textarea class="form-control" name="description"><?= $produit->description ?></textarea>

        <label class="form-label">Image</label>
        <input type="file" class="form-control" name="image">
        <img width="250" class="img img-fluid" src="upload/produit/<?= $produit->image ?>"><br>
        <?php

        ?>
     <input type="submit" value="Modifier produit" class="btn btn-primary my-2" name="modifier">
    </form>
</div>

</body>
</html>