<?php
include "../Ressources/header.php";
include  "../Session/sessionFonctions.php";
session_start();
$user_id = $_SESSION["personne"]["Id"];
Security("A");
?>

<div class="tab">
    <form class="form" method="post" action="../DB/actionFormulaireAdmin.php">

            <input type="hidden" id="id_user" name="id_user">

        <div class="form-group">
            <label for="formGroupExampleInput"><h5>Nom de l'appareil nomade </h5> </label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="nom de l'appareil" required>
        </div>
        <br>
        <div class="form-group">
            <label for="formGroupExampleInput"><h5>Prix</h5> </label>
            <input type="text" class="form-control" id="prix" name="prix" placeholder="Prix" required >
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput"><h5>Rôle</h5> </label>
            <input type="text" class="form-control" id="role" name="role" placeholder="Rôle" required >
        </div>
        <br>
        <button type="submit" class="btn btn-primary my-1">Submit</button>