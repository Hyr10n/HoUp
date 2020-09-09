<?php include "header.php" ?>

<div class="tab">
<form class="form" method="post" action="action/ActionFormulaire1.php">
    <div class="form-group">
        <label for="formGroupExampleInput"><h5>Id ?</h5> </label>
        <input type="text" class="form-control" id="id-user" name="id_user" placeholder="en kWh/an" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput"><h5>Quelle a été votre consommation electrique en 2019 ?</h5> </label>
        <input type="text" class="form-control" id="other1" name="other1" placeholder="en kWh/an" required>
    </div>
    <br>
    <div class="form-group">
        <label for="formGroupExampleInput"><h5>Quelle es le nombre de personnes dans votre foyer ?</h5> </label>
        <input type="text" class="form-control" id="other2" name="other2" required >
    </div>
    <br>
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><h5>Quelle est le type de votre habitation ?</h5></label>

    <select class="custom-select my-1 mr-sm-2" id="r1"  name="r1" required>
        <option value="1">Maison</option>
        <option value="2">Appartement</option>
        <option value="3">Autre</option>

    </select>
    <div class="form-group">
        <label for="formGroupExampleInput"><div class="bbb">Autres ou spécications</div> </label>
        <input type="text" class="form-control" id="other3"  name="other3" placeholder="Autres (et) ou spécication(s)">
    </div>

    <br>

    <div class="form-group">
        <label for="formGroupExampleInput"><h5>Quelle est la superficie de votre habitation ?</h5> </label>
        <input type="text" class="form-control" id="other4"  name="other4" placeholder="superficie en m²" required>
    </div>

    <br>
    <div class="form-group">
        <label for="formGroupExampleInput"><h5>Quelle le nombres de pièces de votre habitation ?</h5> </label>
        <input type="text" class="form-control" id="other5"  name="other5" placeholder="nombre de pièce(s)" required>
    </div>
    <br>
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><h5>Avec quelle matériau(x) votre maison est isolé ?</h5></label>

    <select class="custom-select my-1 mr-sm-2" id="r2"  name="r2" required>
        <option value="1">Laine de verre</option>
        <option value="2">Laine de roche</option>
        <option value="3">Autre </option>

    </select>
    <div class="form-group">
        <label for="formGroupExampleInput"><div class="bbb">Autres ou spécications </div></label>
        <input type="text" class="form-control" id="other6"  name="other6" placeholder="Autres (et) ou spécication(s)">
    </div>
    <br>

    <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><h5>Posséder vous un grenier ?</h5></label>

    <select class="custom-select my-1 mr-sm-2" id="r3"  name="r3" required>
        <option value="1">Oui et il est isolé</option>
        <option value="2">Oui mais il n'est pas isolé</option>
        <option value="3">Non</option>

    </select>
    <div class="form-group">
        <label for="formGroupExampleInput"><div class="bbb">Autres ou spécications</div> </label>
        <input type="text" class="form-control" id="other7"  name="other7" placeholder="Autres (et) ou spécication(s)">
    </div>

    <br>
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><h5>Posséder vous des combles ?</h5></label>

    <select class="custom-select my-1 mr-sm-2" id="r4"  name="r4" required>
        <option value="1">Oui et elles sont isolé </option>
        <option value="2">Oui mais elles ne sont pas isolé</option>
        <option value="3">Non</option>

    </select>
    <div class="form-group">
        <label for="formGroupExampleInput"><div class="bbb">Autres ou spécications </div> </label>
        <input type="text" class="form-control" id="other8"  name="other8" placeholder="Autres (et) ou spécication(s)" >
    </div>

    <br>

    <div class="form-group">
        <label for="formGroupExampleInput"><h5>Combien de portes d’entrer ou de fenêtres possédez vous ?</h5> </label>
        <input type="text" class="form-control" id="other9"  name="other9" placeholder="nombre de porte et fenetres " required>
    </div>

    <br>
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><h5> Toutes vos fenêtres ont des doubles vitrages ?</h5></label>

    <select class="custom-select my-1 mr-sm-2" id="r5"   name="r5"required>
        <option value="1">Oui</option>
        <option value="2">Non</option>
        <option value="3">Quelques unes (precisez)</option>

    </select>
    <div class="form-group">
        <label for="formGroupExampleInput"><div class="bbb">Autres ou spécications k</label>
        <input type="text" class="form-control" id="other10"  name="other10" placeholder="Autres (et) ou spécication(s)">
    </div>

    <br>

    <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><h5>Quelle est votre type de chauffage d’eau ?</h5></label>

    <select class="custom-select my-1 mr-sm-2" id="r6"  name="r6">
        <option value="1">Chauffe eau solaire</option>
        <option value="2">Chauffe eau thermodynamique</option>
        <option value="3">Autre</option>

    </select>
    <div class="form-group">
        <label for="formGroupExampleInput"><div class="bbb">Autres ou spécications </div></label>
        <input type="text" class="form-control" id="other11"  name="other11" placeholder="Autres (et) ou spécication(s)">
    </div>

    <br>



    <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><h5> Possédez-vous un système de climatisation ?</h5></label>

    <select class="custom-select my-1 mr-sm-2" id="r7"  name="r7">
        <option value="1">Oui</option>
        <option value="2">Non</option>

    </select>
    <div class="form-group">
        <label for="formGroupExampleInput"><div class="bbb">Autres ou spécications </div></label>
        <input type="text" class="form-control" id="other12"  name="other12" placeholder="Autres (et) ou spécication(s)">
    </div>

    <br>

    <div class="form-group">
        <label for="formGroupExampleInput"><h5>Quelle est l’année de construction ? </h5></label>
        <input type="text" class="form-control" id="other 13"  name="other13" required >
    </div>

    <br>



    <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><h5>Quelle est votre type de chauffage ? </h5> </label>

    <select class="custom-select my-1 mr-sm-2" id="r8"  name="r8" required>
        <option value="1">Chauffage Electrique  </option>
        <option value="2">Fuel  </option>
        <option value="3">Chauffage  au gaz  </option>
        <option value="3">Chauffage au  bois    </option>
        <option value="3">Pompe a chaleur    </option>
        <option value="3">Autre spécifier le chauffage  </option>
    </select>
    <div class="form-group">
        <label for="formGroupExampleInput"><div class="bbb">Autres ou spécications </div></label>
        <input type="text" class="form-control" id="other14"  name="other14" placeholder="Autres (et) ou spécication(s)">
    </div>

    <br>
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref"> <h5>Votre installation électrique comporte t’elle une de ses installations ?</h5> </label>

    <select class="custom-select my-1 mr-sm-2" id="r9"  name="r9">
        <option value="1">Photovoltaïque  </option>
        <option value="2">Aérovoltaïque  </option>
        <option value="3">Éolienne</option>
        <option value="4">Autre</option>
    </select>
    <div class="form-group">
        <label for="formGroupExampleInput"><div class="bbb">Autres ou spécications </div></label>
        <input type="text" class="form-control" id="other15"  name="other15" placeholder="Autres (et) ou spécication(s)">
    </div>

    <br>

    <button type="submit" class="btn btn-primary my-1">Submit</button>


</form>
</div>
</body>
</html>