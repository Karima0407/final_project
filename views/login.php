<?php
include_once "../inc/nav.php";
?>

<body>
    <div class="container">
        <form action="../traitement/traitement.php" method="post">


            <div>
                <label for="">Email:</label>
                <div><input type="email" name="email" id=""></div>
            </div>

            <div>
                <label for="">Mot de passe:</label>
                <div> <input type="password" name="password" id=""></div>
            </div>


            <button name="login">Se Connecter</button>
        </form>
    </div>

</body>

</html>