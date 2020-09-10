<?php include "header.php" ?>

<div class="tab">
    <form class="form" method="post" action="action/ActionFormulaire1.php">
        <div class="form-group">
            <label for="formGroupExampleInput"><h5>Id ?</h5> </label>
            <input type="text" class="form-control" id="id-user" name="id_user" placeholder="" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput"><h5>Nom de l'appareil nomade </h5> </label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="nom de l'appareil" required>
        </div>
        <br>
        <div class="form-group">
            <label for="formGroupExampleInput"><h5>Prix</h5> </label>
            <input type="text" class="form-control" id="prix" name="prix" placeholder="Rôle" required >
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput"><h5>Rôle</h5> </label>
            <input type="text" class="form-control" id="role" name="role" placeholder="Prix" required >
        </div>
        <br>
        <button type="submit" class="btn btn-primary my-1">Submit</button>