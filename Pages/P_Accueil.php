<?php
session_start();
include_once "../Ressources/header.php";

if (isset($_POST["userDeconnection"])) {
    session_destroy();
    unset($_SESSION);
    header('Location: P_Accueil.php');

}

?>
<h1>hello</h1>



<form action="" method="post">
    <a type="button" class="btn btn-outline-success" href="P_Inscriptions.php">Inscription</a>
    <a type="button" class="btn btn-outline-success" href="P_Connexion.php">Connexion</a>
    <a type="button" class="btn btn-outline-success" href="">Formulaire</a>
    <button class="btn btn-outline-primary" type="submit" id="Id" name="userDeconnection">Deconnection</button>
</form>



