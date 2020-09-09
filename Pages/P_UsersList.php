<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "../DB/Functions.php";

session_start();
include_once "../Session/sessionFonctions.php";
//Security("A");

?>

<h1>Liste des utilisateurs</h1>
<table>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Id</th>
        <th>Adress</th>
        <th>Ville</th>
        <th>Mail</th>
        <th>Téléphone</th>
        <th>Consommation</th>

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
        <td><?php echo $ligne["Consommation"] ?></td>

        </tr>
        <?php
    }

    ?>
</table>
<a href="../Pages/P_Accueil.php">Retour</a>

</body>
</html>