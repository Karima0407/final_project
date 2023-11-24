<?php
include_once "./inc/nav.php";
require_once "../model/bijouxModel.php";
$listBijoux = Bijoux::listBijoux();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<h1 class="titre_page">Une large gamme de bijoux pour une beauté incontournable </h1>
<section>


    <?php foreach ($listBijoux as $bijoux) { ?>

        <div class="container-vetements">
            <div class="invisible"></div>
            <div><img src="./assets/img/<?= $bijoux['imageBijoux']; ?>" alt="" width="300" height="300"></div>

            <h4><?= $bijoux['description']; ?></h4>


            <div>
                <a href="">Ajouter au Panier</a>
                <i class="fa-solid fa-cart-shopping"></i>
            </div>

            <button class="voir_detail">Voir Plus de détails sur ce produit</button>





        </div>




    <?php } ?>
</section>