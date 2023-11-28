<?php
session_start(); // Start the session (if not already started)

// Check if the form is submitted and the product ID is set
if (isset($_POST['add_to_cart']) && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    $product_img = $_POST['product_img'];
    $product_description = $_POST['product_description'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Add the current product to the cart
    $cart_item = array(
        'product_id' => $product_id,
        'product_img' => $product_img,
        'product_description' => $product_description
    );

    $_SESSION['cart'][] = $cart_item;
    header("Location: " . $_SERVER['HTTP_REFERER']);

   
}
