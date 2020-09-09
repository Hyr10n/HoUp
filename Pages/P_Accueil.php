<?php
session_start();

if (isset($_POST["userDeconnection"])) {
    session_destroy();
    unset($_SESSION);
    header('Location: P_Accueil.php');

}

?>
<h1>hello</h1>

<a href="P_Inscriptions.php">Inscription</a>
<a href="P_UsersList.php">Users</a>
<a href="P_Connexion.php">Connexion</a>
<a href="P_MonCompte.php">Mon Compte</a>
<a href="">Formulaire</a>

<form action="" method="post">


<button type="submit" id="Id" name="userDeconnection">Deconnection</button>

</form>



