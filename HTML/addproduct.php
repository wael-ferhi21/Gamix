<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container py-2">
    <h4>Ajouter produit</h4>
    <?php
    include "config.php";

  
   if (isset($_POST['add'])) {
        $nom= $_POST['name'];
        $prix = $_POST['price'];
        $description = $_POST['description'];
        $date = date('Y-m-d');

        $filename = 'produit.png';
        if (!empty($_FILES['image']['name'])) {
            $image = $_FILES['image']['name'];
            $filename = uniqid() . $image;
           // move_uploaded_file($_FILES['image']['tmp_name'], 'C:\xampp\htdocs\Gamix\HTML' . $filename);
        }

        if (!empty($nom) && !empty($prix)) {
           
        $sqlState = $cnx->prepare('INSERT INTO product VALUES (null,?,?,?,?,?)');
        $inserted = $sqlState->execute([$nom,$prix,$filename,$description,$date]);
            if ($inserted) {
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
                Nom du produit et prix , sont obligatoires.
            </div>
            <?php
        }

    }
    ?>
    <form method="post" enctype="multipart/form-data">
        <label class="form-label">Nom du produit</label>
        <input type="text" class="form-control" name="name">

        <label class="form-label">Prix</label>
        <input type="number" class="form-control" step="0.1" name="price" min="0">

        <label class="form-label">Description</label>
        <textarea class="form-control" name="description"></textarea>

        <label class="form-label">Image</label>
        <input type="file" class="form-control" name="image">

       
        


        <input type="submit" value="Ajouter produit" class="btn btn-primary my-2" name="add">
    </form>
</div>
 
</body>
</html>