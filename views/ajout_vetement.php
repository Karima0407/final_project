<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../traitement/traitement.php" method="post" enctype="multipart/form-data">
        <label for="">Ajoutez l'image du produit</label>
        <div> <input type="file" name="img" id=""></div>
        <label for="">Ajoutez une description</label>
        <div><input type="text" name="description-produit" id=""></div>
        <label for="">Ajoutez une description détaillée du produit</label>
        <div><textarea name="description-detaille" id="" cols="30" rows="10"></textarea></div>
        <label for="">Ajoutez le prix</label>
        <div><input type="number" name="prix" id=""></div>
        <button name="ajout-vetement">Ajoutez nouveau vetement</button>

    </form>
</body>

</html>