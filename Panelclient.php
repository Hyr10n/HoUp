<?php include ("header.php");
session_start();
require_once "DB/Functions.php";

$user_nomDossier = $_SESSION["personne"]["nomDossier"];
?>

<h1>Panel client</h1>
<br>
<h3>Votre consommation</h3>
<div class="consommation"></div>

<div class="tab1">
    <h4>Le rapport de l'expert</h4>
    <table class="table table table-dark table-responsive">
        <tr>
            <th>Document importé </th>
            <th>Date</th>
        </tr>

            <?php


                listing($user_nomDossier);

                ?>

    </table>
</div>




<div class="tab2">
    <h5>Appareil nomade à aquérir </h5>
    <table class="table table table-dark table-responsive">
        <tr>
            <th>Nom de l'appareil </th>

            <th>Prix</th>
        </tr>

    </table>
</div>