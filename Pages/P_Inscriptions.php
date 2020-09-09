<?php
session_start();
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "../DB/Functions.php";

if (isset($_SESSION["personne"])) {
    header('Location: P_Accueil.php');
}


if (isset($_POST["nom"])) {

    $nom = filter_input(INPUT_POST, "nom");
    $prenom = filter_input(INPUT_POST, "prenom");
    $adresse = filter_input(INPUT_POST, "adresse");
    $ville = filter_input(INPUT_POST, "ville");
    $email = filter_input(INPUT_POST, "email");
    $tel = filter_input(INPUT_POST, "tel");
    $password = filter_input(INPUT_POST, "password");
    $birthdate = filter_input(INPUT_POST, "birthdate");

    userInscription($nom, $prenom, $adresse, $ville, $email, $tel, $password, $birthdate);
}

?>

<h1>HoUp</h1>
<h2>Inscription</h2>

<div class="zone">

    <form method="post">
        <div><label for="nom">Nom : <input type="text" name="nom" id="nom"
                                           pattern="^[^;.,!?/\|<>*$%&£'€¤@~]*$"
                                           placeholder="ex : Jean" required></label></div>
        <div><label for="prenom">Prénom : <input type="text" name="prenom" id="prenom"
                                                 pattern="^[^;.,!?/\|<>*$%&£'€¤@~]*$"
                                                 placeholder="ex : Dupont" required></label></div>
        <div><label for="adresse">Adresse : <input type="text" name="adresse" id="adresse"
                                                 pattern="^[^;.,!?/\|<>*$%&£'€¤@~]*$"
                                                 placeholder="ex : Dupont" required></label></div>
        <div><label for="ville">Ville : <input type="text" name="ville" id="ville"
                                                 pattern="^[^;.,!?/\|<>*$%&£'€¤@~]*$"
                                                 placeholder="ex : Nantes" required></label></div>
        <div><label for="email">E-Mail : <input type="email" name="email" id="email"
                                                placeholder="ex : michu@madame.fr"
                                                onkeyup="this.value=this.value.toLowerCase()"
                                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required></label>
        </div>
        <div><label for="tel">Telephone : <input type="tel" name="tel" id="tel" maxlength="14"
                                                 pattern="^0[1-9]([-. ]?[0-9]{2}){4}$"
                                                 placeholder="ex : 0X XX XX XX XX" required></label></div>
        <div><label for="password">Mot De Passe : <input type="password" name="password" id="password"
                                                         pattern="^[^ ]{8,}$"
                                                         placeholder="Votre mot de passe" required></label></div>
        <div><label for="birthdate">Année de Naissance : <input type="text" name="birthdate" id="birthdate"
                                                                pattern="^[^ ]{4,4}$""
                                                 placeholder="ex : 1989" required></label></div>
        <div>
            <button type="submit">Enregistrer</button>
        </div>
    </form>
</div>

<a href="../index.php">Retour</a>

<?php