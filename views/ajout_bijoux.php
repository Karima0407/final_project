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
        <div><input type="file" name="img_bijoux" id=""></div>
        <label for="">Ajoutez une description</label>
        <div><textarea name="description-bijoux" id="" cols="30" rows="10"></textarea></div>
        <div><input type="number" name="prix" id=""></div>
        <button name="ajout-bijoux">Ajoutez nouveau bijoux</button>

    </form>
</body>

</html>