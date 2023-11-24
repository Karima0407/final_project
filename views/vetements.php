<?php
include_once "./inc/nav.php";
require_once "../model/vetementModel.php";
$listVetements = Vetement::listVetement();
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
<!--<div class="container-vetements"> #}
  <h1>Chez Nous vous trouvez un large choix de vetements pour un look exellent et attirant! </h1>
  <h3>Collection d'hiver :</h3>
  <section>
    {# <div class="block-vetements">
      <div><img src="./img/monteau.png" alt=""></div>
      <h4>Joli monteau d'hiver avec <br> une offre spéciale </h4>
      <div> #}
        <form action="./traitement/traitement.php" method="post">
          <a name="panier" href="">Ajouter au Panier</a>
        </form>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>

      <button>Voir Plus de détails sur ce produit</button>

    </div>


    <div class="block-vetements">
      <div><img src="./img/manteau-oversize-nesrine-manteau-femme-voilee-turquie-trench-coat-hiver.jpg" alt=""></div>
      <h4>Joli monteau d'hiver avec <br> une offre spéciale </h4>
      <div>
        <a href="">Ajouter au Panier</a>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>

      <button>Voir Plus de détails sur ce produit</button>

    </div>

    <div class="block-vetements">
      <div><img src="./img/MP27520051.webp" alt=""></div>
      <h4>Joli monteau d'hiver avec <br> une offre spéciale </h4>
      <div>
        <a href="">Ajouter au Panier</a>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>

      <button>Voir Plus de détails sur ce produit</button>

    </div>
  </section>

  <section class="sect2">
    <div class="block-vetements">
      <div><img src="./img/pull-capuche-30389688643-Modalova.webp" alt=""></div>
      <h4>Jolie capuche d'hiver de <br> bonne qualité</h4>
      <div>
        <a href="">Ajouter au Panier</a>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>

      <button>Voir Plus de détails sur ce produit</button>

    </div>


    <div class="block-vetements">
      <div><img src="./img/1666576722febae525e507fe12ef5ee1e91035d037_thumbnail_720x.webp" alt=""></div>
      <h4>Jolie capuche d'hiver de <br> bonne qualité</h4>
      <div>
        <a href="">Ajouter au Panier</a>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>

      <button>Voir Plus de détails sur ce produit</button>

    </div>



    <div class="block-vetements">
      <div><img src="./img/sweat-a-capuche-violet-clair-femme-vue8-36125326631505758.jpg" alt=""></div>
      <h4>Jolie capuche d'hiver de <br> bonne qualité</h4>
      <div>
        <a href="">Ajouter au Panier</a>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>

      <button>Voir Plus de détails sur ce produit</button>

    </div>


  </section>


  <section class="sect2">
    <div class="block-vetements">
      <div><img src="./img/61N3yB1xj8L._AC_UF1000,1000_QL80_.jpg" alt=""></div>
      <h4>Jolie robe pour l'hiver <br> à votre disposition</h4>
      <div>
        <a href="">Ajouter au Panier</a>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>

      <button>Voir Plus de détails sur ce produit</button>

    </div>


    <div class="block-vetements">
      <div><img src="./img//robe-pull-noir-femme-555x833.jpg" alt=""></div>
      <h4>Jolie robe pour l'hiver <br> à votre disposition</h4>
      <div>
        <a href="">Ajouter au Panier</a>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>

      <button>Voir Plus de détails sur ce produit</button>

    </div>



    <div class="block-vetements">
      <div><img src="img/81JLLFuC-FL._AC_UY780_.jpg" alt=""></div>
      <h4>Jolie robe pour l'hiver <br> à votre disposition</h4>
      <div>
        <a href="">Ajouter au Panier</a>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>

      <button>Voir Plus de détails sur ce produit</button>

    </div>


  </section>

  <h3>Collection d'été:</h3>
  <section>
    <div class="block-vetements">
      <div><img src="./img/59-descript-2020-nouveau-t-solide-lacets-robe-femmes-dcontract-volants-taille-haute-col-en-v-manches-courtes-robe.png" alt=""></div>
      <h4>Robe d'été chic et classe <br>pour un look attirant</h4>
      <div>
        <a href="">Ajouter au Panier</a>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>

      <button>Voir Plus de détails sur ce produit</button>

    </div>

    <div class="block-vetements">
      <div><img src="./img/H6a7cb7d099cb467a9b25c8a4e595cf4cS.webp" alt=""></div>
      <h4>Robe d'été chic et classe <br>pour un look attirant</h4>
      <div>
        <a href="">Ajouter au Panier</a>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>

      <button>Voir Plus de détails sur ce produit</button>

    </div>

    <div class="block-vetements">
      <div><img src="./img/il_fullxfull.4983850870_drcw.jpg" alt=""></div>
      <h4>Robe d'été chic et classe <br>pour un look attirant</h4>
      <div>
        <a href="">Ajouter au Panier</a>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>

      <button>Voir Plus de détails sur ce produit</button>

    </div>


  </section>

  <section class="sect2">
    <div class="block-vetements">
      <div><img src="./img/pull-kaki-en-maille-fine.jpg" alt=""></div>
      <h4>Pull d'été simple<br>pour un look attirant</h4>
      <div>
        <a href="">Ajouter au Panier</a>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>

      <button>Voir Plus de détails sur ce produit</button>

    </div>

    <div class="block-vetements">
      <div><img src="./img/71ETvwe7VRL._AC_UY780_.jpg" alt=""></div>
      <h4>Pull d'été simple<br>pour un look attirant</h4>
      <div>
        <a href="">Ajouter au Panier</a>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>

      <button>Voir Plus de détails sur ce produit</button>

    </div>

    <div class="block-vetements">
      <div><img src="./img/15115155428466249806_thumbnail_720x.webp" alt=""></div>
      <h4>Pull d'été simple<br>pour un look attirant</h4>
      <div>
        <a href="">Ajouter au Panier</a>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>

      <button>Voir Plus de détails sur ce produit</button>

    </div>

  </section>
</div> -->

<h1 class="titre_page">Chez Nous vous trouvez un large choix de vetements pour un look exellent et attirant! </h1>
<section>


  <?php foreach ($listVetements as $vetement) { ?>

    <div class="container-vetements">
      <div class="invisible"></div>
      <div><img src="./assets/img/<?= $vetement['image']; ?>" alt="" width="300" height="300"></div>

      <h4><?= $vetement['description']; ?></h4>

      <div>
        <a href="">Ajouter au Panier</a>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>

      <button class="voir_detail">Voir Plus de détails sur ce produit</button>




    </div>




  <?php } ?>
</section>