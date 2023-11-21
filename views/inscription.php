<?php
include_once "../inc/nav.php";
?>

<body>
    <div class="container">
        <form action="../traitement/traitement.php" method="post">
            <div>
                <label for="">Prénom:</label>
                <div><input type="text" name="prenom" id=""></div>
            </div>

            <div>
                <label for="">Nom:</label>
                <div><input type="text" name="nom" id=""></div>
            </div>

            <div>
                <label for="">Numéro de téléphpne</label>
                <div><input type="number" name="num-tel" id=""></div>
            </div>

            <div>
                <label for="">Adresse Complète :</label>
                <div> <input type="text" name="adresse" id=""></div>
            </div>


            <div>
                <label for="">Code Postal :</label>
                <div> <input type="number" name="code-postal" id=""></div>
            </div>

            <div>
                <label for="">Email:</label>
                <div> <input type="email" name="email" id=""></div>
            </div>


            <div>
                <label for="">Mot de passe:</label>
                <div> <input type="password" name="password" id=""></div>
            </div>


            <button name="inscription">S'incrire</button>
        </form>
    </div>
</body>

</html>