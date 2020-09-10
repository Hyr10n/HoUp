<?php
session_start();
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "../DB/Functions.php";
include_once  "../Ressources/header.php";

if (isset($_SESSION["personne"])) {
    header('Location: P_Accueil.php');
}

if (isset($_POST["mail"])) {

    $mail = filter_input(INPUT_POST, "mail");
    $password = filter_input(INPUT_POST, "password");

    userLogin($mail, $password);
}

?>

<h3>Se connecter à HoUp</h3>
<div class="zone">

    <form method="post">

        <div class="form-group" >
        <label for="mail">E-mail :</label>
        <input placeholder="ex : exmplre@houp.fr" id="mail" type="mail" name="mail"
               class=form-control"
               onkeyup="this.value=this.value.toLowerCase()"
               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required>
        </div>

        <div class="form-group" >
        <label for="password">Password :</label>
        <input  id="password" type="password" name="password" pattern=".{8,}"
               class=form-control">
        </div>

        <button class="btn btn-primary" type="submit" name="action">Se Connecter</button>
        <a class="btn btn-outline-success" href="P_Inscriptions.php">s'inscrire</a>
    </form>
</div>

