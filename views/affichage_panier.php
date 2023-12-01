<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/index.js" defer></script>
</head>

</html>
<?php
session_start(); // Start the session (if not already started)

// Check if the cart is set in the session
if (isset($_SESSION['cart'])) {
    echo "<h1>Votre Panier</h1>";

    foreach ($_SESSION['cart'] as $index => $product_id) {
        // Retrieve and display product information (you may need to adapt this to your specific implementation)

        echo '<ul class="liste_panier">';

        echo "<li>Product ID: $product_id[product_id]</li>";

?>

        <div class="images_panier"><img src="../views/assets/img/<?= $product_id['product_img'] ?>" alt="Image produit"></div>

        <p><?= $product_id['product_description'] ?></p>

        <!--Display quantity input field with JavaScript update-->
        <?php echo '<label for="quantity">Quantité :</label>'; ?>
        <?php echo '<input type="number" class="quantity-input" name="quantity" value="1" min="1" data-index="' . $index . '" data-price="' . $product_id['product_prix'] . '">';  ?>
        <?php
        // Display total price
        $totalPrice = $product_id['product_prix'];
        echo "<p class='total-price' data-index='$index'>Total : $totalPrice</p>";
        ?>

        <!-- Formulaire de suppression -->
        <form method="post" action="../traitement/supprimer_article.php">
            <input type="hidden" name="index" value="<?= $index ?>">
            <input type="submit" value="Supprimer">
        </form>




    <?php
        echo "</ul>";
    }
} else { ?>
    <div>
        <h1>Votre Panier est vide , allons faire des achats , <a href="http://localhost/final_project/views/vetements.php">Suivez nous !</a></h1>
    </div>
<?php } ?>