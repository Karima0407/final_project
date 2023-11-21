<?php

require_once "../model/userModel.php";
require_once "../model/vetementModel.php";



// pour l'inscription

if (isset($_POST['inscription'])) {

$prenom = htmlspecialchars($_POST['prenom']);
$nom = htmlspecialchars($_POST['nom']);
$numeroTéléphone = htmlspecialchars($_POST['num-tel']);
$adresse = htmlspecialchars($_POST['adresse']);
$codePostal = htmlspecialchars($_POST['code-postal']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

// hasher le mot de passe

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// appeler la methode inscription de la class User
// la methode inscription etant static donc on utilise
User::inscription($prenom, $nom, $numeroTéléphone, $adresse, $codePostal, $email, $passwordHash);
}

// pou se connecter

if (isset($_POST['login'])) {
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);


User::connexion($email, $password);
}

if (isset($_POST['ajout-vetement'])) {
$description_produit = htmlspecialchars($_POST['description-produit']);


$imgName = $_FILES['img']['name'];
$tmpName = $_FILES['img']['tmp_name'];
$destination = $_SERVER["DOCUMENT_ROOT"] . '/final_project/views/assets/img/' . $imgName;

if (move_uploaded_file($tmpName, $destination)) {
// se connecter à la base de donnes
$db = Database::dbConnect();
//preparer la requete
$request = $db->prepare('INSERT INTO vetements (image ,description) VALUES (?,?)');
//exzcuter la requete
try {
$request->execute(array($imgName, $description_produit));
// redirction vers list_room.php
} catch (PDOException $e) {
echo $e->getMessage();
}
}
}