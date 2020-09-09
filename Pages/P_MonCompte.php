<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "../DB/Functions.php";

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
?>

<h1>Informations de votre compte </h1>

<form method="Post">

    <label> Votre nom <input type="submit" value="<?php echo $user_name ?>"></label>
    <label> Votre prénom <input type="submit" value="<?php echo $user_firstname ?>"></label>
    <label> Votre adresse <input type="submit" value="<?php echo $user_address ?>"></label>
    <label> Votre ville <input type="submit" value="<?php echo $user_city ?>"></label>
    <label> Votre téléphone <input type="submit" value="<?php echo $user_phone ?>"></label>
    <label> Votre email <input type="submit" value="<?php echo $user_mail ?>"></label>
    <label> Votre mot de passe <input type="submit" value="<?php echo $user_password ?>"></label>

    <?php
    if ($user_admin == 1){
        ?>
        <label>Votre role<input type="submit" value="Vous êtes Admin"></label>
        <?php
    }
    if ($user_admin == 0) {
        ?>
        <label>Votre role<input type="submit" value="Vous êtes Client"></label>
        <?php
    }
    ?>

    <input type="hidden" value="<?php echo $user_id ?>" name="Id">
        <button class="del" name="userDeleteAccount" id="Id" type="submit"
                onclick="return confirm('Etes-vous sûr de vouloir supprimer votre compte ??')">
            Supprimer le compte
        </button>

</form>

<a href="P_Accueil.php">Retour</a>

</body>
</html>
