<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/projet_final/function/database.php';
class User
{

    // methode pour s'inscrire
    public static function inscription($prenom, $nom, $numeroTéléphone, $adresse, $codePostal, $email, $password)
    {
        // connexion a la bd
        $db = Database::dbConnect();
        // preparation de la requete
        $request = $db->prepare("INSERT INTO users (prenom, nom, numeroTelephone,adresse, codePostal, email, password) VALUES (?,?,?,?,?,?,?) ");

        // executer la requete
        try {
            $request->execute(array($prenom, $nom, $numeroTéléphone, $adresse, $codePostal, $email, $password));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // methode pour se connecter

    public static function connexion($email, $password)
    {
        // connexion a la bd
        $db = Database::dbConnect();
        // preparation de la requete
        $request = $db->prepare("SELECT * FROM users WHERE email=?");
        // executer la requete
        try {
            $request->execute(array($email));
            $user = $request->fetch();

            if (empty($user)) {
                $_SESSION['error_message'] = "cet email n'existe pas";
                header("Location:" . $_SERVER['HTTP_REFERER']);
            } else if (password_verify($password, $user['password'])) {
                $_SESSION['message'] = "Bienvenue!";
                header("Location: http://localhost/projet_final/index.php");
            } else {
                $_SESSION['message_erreur'] = "Mot de passe incorrect";
                header("Location:" . $_SERVER['HTTP_REFERER']);
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
