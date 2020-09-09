<?php
session_start();
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "../DB/Functions.php";

/*if (isset($_SESSION["personne"])) {
    header('Location: P_Accueil.php');
}*/


if (isset($_POST["mail"])) {

    $mail = filter_input(INPUT_POST, "mail");
    $password = filter_input(INPUT_POST, "password");
    var_dump($mail, $password);
    userLogin($mail, $password);
}

?>

<h3>Se connecter à HoUp</h3>
<div class="zone">

    <form method="post">

        <label for="mail">E-mail :</label>
        <input placeholder="ex : exmplre@houp.fr" id="mail" type="mail" name="mail"
               onkeyup="this.value=this.value.toLowerCase()"
               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required>


        <label for="password">Password :</label>
        <input id="password" type="password" name="password" pattern=".{8,}">


        <button type="submit" name="action">Envoyer</button>

    </form>
</div>
<a href="P_Inscriptions.php">s'inscrire</a>
<a href="P_UsersList.php">User List</a>
<a href="../index.php">Retour</a>

