<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/final_project/views/inc/nav.php';
require_once "./model/maquillageModel.php";
require_once "./model/bijouxModel.php";
require_once "./model/montresModel.php";
$imageIds = [10, 7, 4, 11];
$listMakeup = Maquillage::listMaquillageAccueil($imageIds);
$imageBijouxIds = [12, 13, 14];
$listBijoux = Bijoux::listBijouxAccueil($imageBijouxIds);
$imageMontresIds = [1, 5];
$listMontres = Montres::listMontresAccueil($imageMontresIds);
$imageMontresIds2= [8, 10];

$listMontres2= Montres::listMontresAccueil2($imageMontresIds2);


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
    <link rel="stylesheet" href="./views/assets/css/style.css">
</head>
<nav>
    <ul>
        <li><a href="./views/vetements.php">Vetements</a></li>
        <div><img src="./views/assets/img/20200341-magnifique-robe-femme-logo-facile-creatif-pour-boutique-mode-magasin-logo-vecteur-gratuit-vectoriel.jpg" alt=""></div>

        <li><a href="./views/maquillage.php">Maquillage</a></li>
        <div><img src="./views/assets/img/logo-mode-maquillage-illustration-du-lettrage-phrase-calligraphie_90395-260.avif" alt=""></div>
        <li><a href="./views/bijoux.php">Bijoux</a></li>
        <div><img src="./views/assets/img/diamond-ring-icon-logo-template-illustration-design-vector.jpg" alt=""></div>
        <li><a href="./views/montres.php">Montres</a></li>
        <div><img src="./views/assets/img/5569517-montre-bracelet-horloge-temps-icone-solide-illustrationle-modele-de-logo-adapte-a-de-nombreux-usages-gratuit-vectoriel.jpg" alt=""></div>
    </ul>
</nav>

<main>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./views/assets/img/gettyimages-888019344_sf.webp" class=" w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./views/assets/img/gettyimages-888019344_sf.webp" class=" w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./views/assets/img/makeup-artist-applies-powder-blush-260nw-1805797540.webp" class=" w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <h3>Notre séléction Make Up</h3>
    <div class="selection">

        <!-- <div class="maquillage">
            <img src="./views/assets/img/palette2.webp" alt="">
            <div class="bordure"></div>
            <h4>Couleurs magnifiques <br> pour un regard attirant !</h4>
        </div>

        <div class="maquillage">
            <img src="./views/assets/img/mascara.webp" alt="">
            <div class="bordure"></div>
            <h4>Mascara Imperméable <br> pour un volume itense!</h4>
        </div>

        <div class="maquillage">
            <img src="./views/assets/img/rouge.webp" alt="">
            <div class="bordure"></div>
            <h4>Un rouge incortounable<br> pour une durée de 24h!</h4>
        </div>

        <div class="maquillage">
            <img src="./views/assets/img/fond de teint.jpeg" alt="">
            <div class="bordure"></div>
            <h4>Fond de teint fluide<br> pour haute couvrance</h4>
        </div>


    </div> -->

        <div class="listeMaquillage">
            <?php foreach ($listMakeup as $makeup) { ?>
                <div class="maquillage">
                    <div><img src="./views/assets/img/<?= $makeup['imageMakeup']; ?>" alt="" width="300" height="300"></div>
                    <h4><?= $makeup['description']; ?></h4>
                </div>
            <?php } ?>
        </div>

        <div class="clothes">
            <h2 class="block1">Une vaste collection de vetements pour une élégance <br> magnifique et une beauté <br> impréssionnante <br> </h2>

            <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner  ">
                    <div class="carousel-item active">
                        <img src="./views/assets/img/tenue.jpeg" class=" w-60  '" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./views/assets/img/tenue.jpeg" class=" w-60  " alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./views/assets/img/ab531cf96f9489a4434d2daee2f3df63.jpg" class=" w-60 " alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <h2 class="block2">Des différentes choix <br> et styles pour toutes les gouts et toutes <br> les envies !</h2>
        </div>

        <h3>Nos Promotions de Coffrets Bijoux </h3>
        <!--<div class="promo-bijoux">
            <div class="coffre1">
                <div><img src="./views/assets/img/coffre.jpeg" alt=""></div>
                <div class="paragraphe">
                    <h2>Coffret Bijoux de luxe !</h2>
                    <h5>Idée d'un cadeau de valeur et attirant <br> <span>pour une jolie apparence </span></h5>
                    <h4>Bijoux de luxe à petit prix </h4>
                    <div class="promo1"> OFFRE EXEPCIONNELLE </div>
                    <div class="promo2">PROMO </div>
                </div>


            </div>

            <div class="coffre1">
                <div><img src="./views/assets/img/coffre2.jpeg" alt=""></div>
                <div class="paragraphe">
                    <h2>Joli coffret bijoux Or Blanc</h2>
                    <h5>Un coffret séduisant de boucles d'oreilles or blanc <br> <span>avec un joli collier pour un look parfait!</span> </h5>
                    <h4 class="deuxiemecoffre">Coffret Bijoux à Prix Imbattable !</h4>
                    <div class="promo1"> OFFRE EXEPCIONNELLE </div>
                    <div class="promo2">PROMO </div>
                </div>


            </div>

            <div class="coffre1">
                <div class="bague"><img src="./views/assets/img/bague2.jpg" alt=""></div>
                <div class="paragraphe">
                    <h2>offre coffret bague</h2>
                    <h5>Un très beau coffret de bague <br> <span>avec une brillance spéciale</span> </h5>
                    <h4 class="deuxiemecoffre">Coffret bague à Prix convenable</h4>
                    <div class="promo1"> OFFRE EXEPCIONNELLE </div>
                    <div class="promo2">PROMO </div>
                </div>


            </div>
        </div> -->

        <div class="promo-bijoux">
            <?php foreach ($listBijoux as $bijoux) { ?>
                <div class="coffre1">
                    <div><img src="./views/assets/img/<?= $bijoux['imageBijoux']; ?>" alt="" width="300" height="300"></div>
                    <h2>Coffret Bijoux de luxe !</h2>
                    <h4><?= $bijoux['description']; ?></h4>
                    <div class="promo1"> OFFRE EXEPCIONNELLE </div>
                    <div class="promo2">PROMO </div>
                </div>
            <?php } ?>
        </div>


        <h3>Nos Montres Incontournables à prix Raisonnable </h3>
        <section>
            <?php foreach ($listMontres as $montre) { ?>
                <div class="montresAcceuil">
                    <div><img src="./views/assets/img/<?= $montre['imageMontres']; ?>" alt="" width="300" height="300"></div>
                    <h4><?= $montre['description']; ?></h4>

                </div>
            <?php } ?>

        </section>

        <section>
            <?php foreach ($listMontres2 as $montre) { ?>
                <div class="montresAcceuil">
                    <div><img src="./views/assets/img/<?= $montre['imageMontres']; ?>" alt="" width="300" height="300"></div>
                    <h4><?= $montre['description']; ?></h4>

                </div>
            <?php } ?>

        </section>

</main>