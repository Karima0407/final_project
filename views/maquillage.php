<?php
include_once "./inc/nav.php";
require_once "../model/maquillageModel.php";
$listMakeup = Maquillage::listMaquillage();
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

<body>

    <h1 class="titre_page">Vous trouverez un large choix de Make Up pour une beauté impréssionnante !</h1>
    <div class="recherche">
        <input type="text" id="searchInput" placeholder="Tapez votre produit">
        <div id="searchResults"></div>
    </div>
    <section>


        <div>
            <h2>Mascara</h2>
            <?php foreach ($listMakeup as $makeup) { ?>
                <?php if (str_contains($makeup['description'], 'Mascara')) { ?>
                    <div class="container-vetements">
                        <div class="invisible"></div>
                        <form action="./panier.php" method="post">
                            <input type="hidden" name="product_id" value="<?= $makeup['id_maquillage']; ?>">
                            <input type="hidden" name="product_img" value="<?= $makeup['imageMakeup']; ?>">
                            <input type="hidden" name="product_description" value="<?= $makeup['description']; ?>">
                            <input type="hidden" name="product_prix" value="<?= $makeup['prix']; ?>">

                            <div><img src="./assets/img/<?= $makeup['imageMakeup']; ?>" alt="" width="300" height="300"></div>

                            <h4><?= $makeup['description']; ?></h4>

                            <div>
                                <button type="submit" name="add_to_cart">Ajouter au Panier</button>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                        </form>
                        <a href="details_maquillage.php?id=<?= $makeup['id_maquillage']; ?>" class="voir_detail">Voir Plus de détails sur ce produit</a>
                    </div>
            <?php }
            } ?>
        </div>
        <div>
            <h2>Rouge à Levres</h2>
            <?php foreach ($listMakeup as $makeup) {
                if (str_contains($makeup['description'], 'Rouge')) { ?>
                    <div class="container-vetements">
                        <div class="invisible"></div>
                        <form action="./panier.php" method="post">
                            <input type="hidden" name="product_id" value="<?= $makeup['id_maquillage']; ?>">
                            <input type="hidden" name="product_img" value="<?= $makeup['imageMakeup']; ?>">
                            <input type="hidden" name="product_description" value="<?= $makeup['description']; ?>">
                            <input type="hidden" name="product_prix" value="<?= $makeup['prix']; ?>">

                            <div><img src="./assets/img/<?= $makeup['imageMakeup']; ?>" alt="" width="300" height="300"></div>

                            <h4><?= $makeup['description']; ?></h4>

                            <div>
                                <button type="submit" name="add_to_cart">Ajouter au Panier</button>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                        </form>
                        <a href="details_maquillage.php?id=<?= $makeup['id_maquillage']; ?>" class="voir_detail">Voir Plus de détails sur ce produit</a>
                    </div>
            <?php }
            } ?>
        </div>
        <div>
            <h2>Fond de Teint</h2>
            <?php foreach ($listMakeup as $makeup) {
                if (str_contains($makeup['description'], 'Fond')) { ?>
                    <div class="container-vetements">
                        <div class="invisible"></div>
                        <form action="./panier.php" method="post">
                            <input type="hidden" name="product_id" value="<?= $makeup['id_maquillage']; ?>">
                            <input type="hidden" name="product_img" value="<?= $makeup['imageMakeup']; ?>">
                            <input type="hidden" name="product_description" value="<?= $makeup['description']; ?>">
                            <input type="hidden" name="product_prix" value="<?= $makeup['prix']; ?>">

                            <div><img src="./assets/img/<?= $makeup['imageMakeup']; ?>" alt="" width="300" height="300"></div>

                            <h4><?= $makeup['description']; ?></h4>

                            <div>
                                <button type="submit" name="add_to_cart">Ajouter au Panier</button>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                        </form>
                        <a href="details_maquillage.php?id=<?= $makeup['id_maquillage']; ?>" class="voir_detail">Voir Plus de détails sur ce produit</a>
                    </div>
            <?php }
            } ?>
        </div>
    </section>
    <script src="./assets/index.js"></script>
</body>