<?php include ("../Ressources/header.php");
session_start();
$user_Id=$_SESSION ["personne"]["Id"]
?>

<h1>Panel client</h1>
<br>
<h3>Votre consommation</h3>
<div class="consommation">
    <?php

    global $pdo;
    $r=$pdo-> prepare("SELECT consommation FROM users where Id='.$user_Id'");


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
            <th>Prix/mois | Prix definitif</th>
            <th>Rôle</th>
            <th>Donnée</th>
        </tr>
        <?php

        global $pdo;
        $rpd=$pdo-> prepare("SELECT nom, prix, donne,role FROM appareilnomade where Id='.$user_Id.'");


        $rpd->execute();

        $resultats=$r->fetchAll();

        foreach ($resultats as $ligne){
        ?>
        <tr>
            <td><?php echo $ligne["nom"] ?></td>
            <td><?php echo $ligne["prix"] ?></td>
            <td><?php echo $ligne["role"] ?></td>
            <td><?php echo $ligne["donne"] ?></td>
            <?php } ?>
    </table>
</div>