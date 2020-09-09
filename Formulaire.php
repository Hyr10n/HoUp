<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="Formulaire.css">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>

<div class="tab">
<form class="form" method="post" action="action/ActionFormulaire1.php">
    <div class="form-group">
        <label for="formGroupExampleInput">Id ? </label>
        <input type="text" class="form-control" id="id-user" name="id_user" placeholder="en kWh/an" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Quelle a été votre consommation electrique en 2019 ? </label>
        <input type="text" class="form-control" id="other1" name="other1" placeholder="en kWh/an" required>
    </div>
    <br>
    <div class="form-group">
        <label for="formGroupExampleInput">Quelle es le nombre de personnes dans votre foyer ? </label>
        <input type="text" class="form-control" id="other2" name="other2" required >
    </div>
    <br>
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Quelle est le type de votre habitation ?</label>

    <select class="custom-select my-1 mr-sm-2" id="r1"  name="r1" required>
        <option value="1">Maison</option>
        <option value="2">Appartement</option>
        <option value="3">Autre</option>

    </select>
    <div class="form-group">
        <label for="formGroupExampleInput">Autres ou spécications </label>
        <input type="text" class="form-control" id="other3"  name="other3" placeholder="Autres (et) ou spécication(s)">
    </div>

    <br>

    <div class="form-group">
        <label for="formGroupExampleInput">Quelle est la superficie de votre habitation ? </label>
        <input type="text" class="form-control" id="other4"  name="other4" placeholder="superficie en m²" required>
    </div>

    <br>
    <div class="form-group">
        <label for="formGroupExampleInput">Quelle le nombres de pièces de votre habitation ? </label>
        <input type="text" class="form-control" id="other5"  name="other5" placeholder="nombre de pièce(s)" required>
    </div>
    <br>
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Avec quelle matériau(x) votre maison est isolé ?</label>

    <select class="custom-select my-1 mr-sm-2" id="r2"  name="r2" required>
        <option value="1">Laine de verre</option>
        <option value="2">Laine de roche</option>
        <option value="3">Autre </option>

    </select>
    <div class="form-group">
        <label for="formGroupExampleInput">Autres ou spécications </label>
        <input type="text" class="form-control" id="other6"  name="other6" placeholder="Autres (et) ou spécication(s)">
    </div>
    <br>

    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Posséder vous un grenier ?</label>

    <select class="custom-select my-1 mr-sm-2" id="r3"  name="r3" required>
        <option value="1">Oui et il est isolé</option>
        <option value="2">Oui mais il n'est pas isolé</option>
        <option value="3">Non</option>

    </select>
    <div class="form-group">
        <label for="formGroupExampleInput">Autres ou spécications </label>
        <input type="text" class="form-control" id="other7"  name="other7" placeholder="Autres (et) ou spécication(s)">
    </div>

    <br>
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Posséder vous des combles ?</label>

    <select class="custom-select my-1 mr-sm-2" id="r4"  name="r4" required>
        <option value="1">Oui et elles sont isolé </option>
        <option value="2">Oui mais elles ne sont pas isolé</option>
        <option value="3">Non</option>

    </select>
    <div class="form-group">
        <label for="formGroupExampleInput">Autres ou spécications  </label>
        <input type="text" class="form-control" id="other8"  name="other8" placeholder="Autres (et) ou spécication(s)" >
    </div>

    <br>

    <div class="form-group">
        <label for="formGroupExampleInput">Combien de portes d’entrer ou de fenêtres possédez vous ? </label>
        <input type="text" class="form-control" id="other9"  name="other9" placeholder="nombre de porte et fenetres " required>
    </div>

    <br>
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref"> Toutes vos fenêtres ont des doubles vitrages ?</label>

    <select class="custom-select my-1 mr-sm-2" id="r5"   name="r5"required>
        <option value="1">Oui</option>
        <option value="2">Non</option>
        <option value="3">Quelques unes (precisez)</option>

    </select>
    <div class="form-group">
        <label for="formGroupExampleInput">Autres ou spécications </label>
        <input type="text" class="form-control" id="other10"  name="other10" placeholder="Autres (et) ou spécication(s)">
    </div>

    <br>

    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Type de chauffage d’eau ?</label>

    <select class="custom-select my-1 mr-sm-2" id="r6"  name="r6">
        <option value="1">Chauffe eau solaire</option>
        <option value="2">Chauffe eau thermodynamique</option>
        <option value="3">Autre</option>

    </select>
    <div class="form-group">
        <label for="formGroupExampleInput">Autres ou spécications </label>
        <input type="text" class="form-control" id="other11"  name="other11" placeholder="Autres (et) ou spécication(s)">
    </div>

    <br>



    <label class="my-1 mr-2" for="inlineFormCustomSelectPref"> Possédez-vous un système de climatisation ?</label>

    <select class="custom-select my-1 mr-sm-2" id="r7"  name="r7">
        <option value="1">Oui</option>
        <option value="2">Non</option>

    </select>
    <div class="form-group">
        <label for="formGroupExampleInput">Autres ou spécications </label>
        <input type="text" class="form-control" id="other12"  name="other12" placeholder="Autres (et) ou spécication(s)">
    </div>

    <br>

    <div class="form-group">
        <label for="formGroupExampleInput">Quelle est l’année de construction ? </label>
        <input type="text" class="form-control" id="other 13"  name="other13" required >
    </div>

    <br>



    <label class="my-1 mr-2" for="inlineFormCustomSelectPref"> Quelle est votre type de chauffage ? </label>

    <select class="custom-select my-1 mr-sm-2" id="r8"  name="r8" required>
        <option value="1">Chauffage Electrique  </option>
        <option value="2">Fuel  </option>
        <option value="3">Chauffage  au gaz  </option>
        <option value="3">Chauffage au  bois    </option>
        <option value="3">Pompe a chaleur    </option>
        <option value="3">Autre spécifier le chauffage  </option>
    </select>
    <div class="form-group">
        <label for="formGroupExampleInput">Autres ou spécications </label>
        <input type="text" class="form-control" id="other14"  name="other14" placeholder="Autres (et) ou spécication(s)">
    </div>

    <br>
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref"> Votre installation électrique comporte t’elle une de ses installations ? </label>

    <select class="custom-select my-1 mr-sm-2" id="r9"  name="r9">
        <option value="1">Photovoltaïque  </option>
        <option value="2">Aérovoltaïque  </option>
        <option value="3">Éolienne</option>
        <option value="4">Autre</option>
    </select>
    <div class="form-group">
        <label for="formGroupExampleInput">Autres ou spécications </label>
        <input type="text" class="form-control" id="other15"  name="other15" placeholder="Autres (et) ou spécication(s)">
    </div>

    <br>

    <button type="submit" class="btn btn-primary my-1">Submit</button>


</form>
</div>
</body>
</html>