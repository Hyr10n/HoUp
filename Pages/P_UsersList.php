<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "../DB/Functions.php";
include_once  "../Ressources/header.php";

session_start();
include_once "../Session/sessionFonctions.php";
Security("A");

?>

<h1>Liste des utilisateurs</h1>
<table class="table">
    <tr>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Id</th>
        <th scope="col">Adress</th>
        <th scope="col">Ville</th>
        <th scope="col">Mail</th>
        <th scope="col">Téléphone</th>

    </tr>

    <?php
    $resultat = userList();
    foreach ($resultat as $ligne) {
        ?>
        <td><?php echo $ligne["Name"] ?></td>
        <td><?php echo $ligne["FirstName"] ?></td>
        <td><?php echo $ligne["Id"] ?></td>
        <td><?php echo $ligne["Address"] ?></td>
        <td><?php echo $ligne["City"] ?></td>
        <td><?php echo $ligne["Mail"] ?></td>
        <td><?php echo $ligne["Phone"] ?></td>
        </tr>
        <?php
    }

    ?>
</table>
<a href="../Pages/P_Accueil.php" class="btn btn-outline-primary">Retour</a>

</body>
</html>