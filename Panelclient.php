<?php include ("header.php");
session_start();
$user_Id=$_SESSION ["personne"]["Id"]
?>

<h1>Panel client</h1>
<br>
<h3>Votre consommation</h3>
<div class="consommation">
    <?php

    require "Config.php";
    $db= new PDO("mysql:host=".config::SERVEUR.";dbname=".config::BASEDEDONNEES,Config::UTILISATEUR, Config::MOTDEPASSE);
    $r=$db-> prepare("SELECT consommation FROM users where Id='.$user_Id.'");


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
            <th>Date</th>
        </tr>


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