<?php
session_start();
include "../Ressources/header.php";
include  "../Session/sessionFonctions.php";
include "../DB/Functions.php";
Security("C");

$user_Id = $_SESSION["personne"]["Id"];
$user_nomDossier = $_SESSION["personne"]["nomDossier"];
?>

<h1>Panel client</h1>
<br>
<h3>Votre consommation</h3>
<div class="consommation">
    <?php

    require "../DB/Config.php";
    $db= new PDO("mysql:host=".config::SERVEUR.";dbname=".config::BASEDEDONNEES,Config::UTILISATEUR, Config::MOTDEPASSE);
    $r=$db-> prepare("SELECT consommation FROM users where Id='.$user_Id'");


    $r->execute();


    $resultats=$r->fetchAll();

    foreach ($resultats as $ligne) {
        ?>
        <?php echo $ligne["consommation"] ; }

        ?>



</div>

<div class="tab1">
    <h4>Le rapport de l'expert</h4>
    <table class="table table table-dark table-responsive">
        <tr>
            <th>Document importé </th>
        </tr>

        <?php listing($user_nomDossier); ?>

    </table>
</div>




<div class="tab2">
    <h5>Appareil nomade à aquérir </h5>
    <table class="table table table-dark table-responsive">
        <tr>
            <th>Nom de l'appareil </th>
            <th>Prix/mois | Prix definitif</th>
            <th>Rôle</th>
            <th>Donnée</th>
        </tr>
        <?php
        //require "../DB/Config.php";
        $db= new PDO("mysql:host=".config::SERVEUR.";dbname=".config::BASEDEDONNEES,Config::UTILISATEUR, Config::MOTDEPASSE);
        $r=$db-> prepare("SELECT nom, prix,role FROM appareilnomade where Id='.$user_Id.'");


        $r->execute();

        $resultats=$r->fetchAll();

        foreach ($resultats as $ligne){
        ?>
        <tr>
            <td><?php echo $ligne["nom"] ?></td>
            <td><?php echo $ligne["prix"] ?></td>
            <td><?php echo $ligne["role"] ?></td>
            <?php } ?>
    </table>
</div>