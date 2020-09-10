<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "../DB/Functions.php";
include_once "../Ressources/header.php";

session_start();

include_once "../Session/sessionFonctions.php";
Security("C");


$user_name = $_SESSION["personne"]["Name"];
$user_firstname = $_SESSION["personne"]["FirstName"];
$user_id = $_SESSION["personne"]["Id"];
$user_address = $_SESSION["personne"]["Address"];
$user_city = $_SESSION["personne"]["City"];
$user_mail = $_SESSION["personne"]["Mail"];
$user_phone = $_SESSION["personne"]["Phone"];
$user_password = $_SESSION["personne"]["Password"];
$user_birthdate = $_SESSION["personne"]["Birthdate"];
$user_admin = $_SESSION["personne"]["Admin"];

if (isset($_POST["userDeleteAccount"])) {
    userDeleteAccount($user_id);
    session_destroy();
    header('Location: P_Accueil.php');
}

if (isset($_POST["userDeconnection"])) {
    session_destroy();
    unset($_SESSION);
    header('Location: P_Accueil.php');

}
?>

<h1>Informations de votre compte </h1>

<form method="Post">

    <?php
    if ($user_admin == 1){
        ?>
        <label>Votre compte<input type="submit" value="Admin"></label>
        <?php
    }
    if ($user_admin == 0) {
        ?>
        <label>Votre compte<input type="submit" value="Client"></label>
        <?php
    }
    ?>

    <div class="form-check"><label class="form-check-label"> Votre nom <input  type="submit" value="<?php echo $user_name ?>"></label></div>
    <div class="form-check"><label> Votre prénom <input type="submit" value="<?php echo $user_firstname ?>"></label>
    </div>
    <div class="form-check"><label> Votre adresse <input type="submit" value="<?php echo $user_address ?>"></label>
    </div>
    <div class="form-check"><label> Votre ville <input type="submit" value="<?php echo $user_city ?>"></label>
    </div>
    <div class="form-check"><label> Votre téléphone <input type="submit" value="<?php echo $user_phone ?>"></label>
    </div>
    <div class="form-check"><label> Votre email <input type="submit" value="<?php echo $user_mail ?>"></label>
    </div>
    <div class="form-check"><label> Votre mot de passe <input type="submit" value="<?php echo $user_password ?>"></label>
    </div>



    <div>
        <button class="btn btn-outline-primary" class="btn btn-outline-primary" type="submit" id="Id" name="userDeconnection">Deconnection</button>
    </div>


    <input type="hidden" value="<?php echo $user_id ?>" name="Id">
        <button class="del btn btn-outline-danger" name="userDeleteAccount" id="Id" type="submit"
                onclick="return confirm('Etes-vous sûr de vouloir supprimer votre compte ??')">
            Supprimer le compte
        </button>

</form>


</body>
</html>
