<?php

require_once "../model/userModel.php";
require_once "../model/vetementModel.php";
require_once "../model/maquillageModel.php";



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

if (isset($_POST['ajout-maquillage'])) {
    $description_maquillage = htmlspecialchars($_POST['description-maquillage']);


    $imgName = $_FILES['img_makeup']['name'];
    $tmpName = $_FILES['img_makeup']['tmp_name'];
    $destination = $_SERVER["DOCUMENT_ROOT"] . '/final_project/views/assets/img/' . $imgName;

    if (move_uploaded_file($tmpName, $destination)) {
        // se connecter à la base de donnes
        $db = Database::dbConnect();
        //preparer la requete
        $request = $db->prepare('INSERT INTO maquillage (imageMakeup ,description) VALUES (?,?)');
        //exzcuter la requete
        try {
            $request->execute(array($imgName, $description_maquillage));
            // redirction vers list_room.php
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

if (isset($_POST['ajout-bijoux'])) {
    $description_bijoux = htmlspecialchars($_POST['description-bijoux']);


    $imgName = $_FILES['img_bijoux']['name'];
    $tmpName = $_FILES['img_bijoux']['tmp_name'];
    $destination = $_SERVER["DOCUMENT_ROOT"] . '/final_project/views/assets/img/' . $imgName;

    if (move_uploaded_file($tmpName, $destination)) {
        // se connecter à la base de donnes
        $db = Database::dbConnect();
        //preparer la requete
        $request = $db->prepare('INSERT INTO bijoux (imageBijoux ,description) VALUES (?,?)');
        //exzcuter la requete
        try {
            $request->execute(array($imgName, $description_bijoux));
            // redirction vers list_room.php
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

if (isset($_POST['ajout-montre'])) {
    $description_montres = htmlspecialchars($_POST['description-montres']);


    $imgName = $_FILES['img_montres']['name'];
    $tmpName = $_FILES['img_montres']['tmp_name'];
    $destination = $_SERVER["DOCUMENT_ROOT"] . '/final_project/views/assets/img/' . $imgName;

    if (move_uploaded_file($tmpName, $destination)) {
        // se connecter à la base de donnes
        $db = Database::dbConnect();
        //preparer la requete
        $request = $db->prepare('INSERT INTO montres (imageMontres ,description) VALUES (?,?)');
        //exzcuter la requete
        try {
            $request->execute(array($imgName, $description_montres));
            // redirction vers list_room.php
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}