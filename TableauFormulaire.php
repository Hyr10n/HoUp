<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin tableau</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="Formulaire.css">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>


<table class="table-responsive">
    <tr>
        <th>ID user</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Q1</th>
        <th>Q2</th>
        <th>Q3</th>
        <th>Other 3</th>
        <th>Q4</th>
        <th>Q5</th>
        <th>Q6</th>
        <th>Other 6</th>
        <th>Q7</th>
        <th>Other 7</th>
        <th>Q8</th>
        <th>Other 8</th>
        <th>Q9</th>
        <th>Q10</th>
        <th>Other 10</th>
        <th>Q11</th>
        <th>Other 11</th>
        <th>Q12</th>
        <th>Other 12</th>
        <th>Other 13</th>
        <th>Q13</th>
        <th>Other 14</th>
        <th>Q14</th>
        <th>Other 15</th>

    </tr>

    <?php

    require "Config.php";
    $db= new PDO("mysql:host=".config::SERVEUR.";dbname=".config::BASEDEDONNEES,Config::UTILISATEUR, Config::MOTDEPASSE);
    $r=$db-> prepare("SELECT u.Name, u.FirstName, u.Id, qr.other1, qr.other2,qr.r1,qr.other3,qr.other4,qr.other5,qr.r2,qr.other6,qr.r3,qr.other7,qr.r4,qr.other8,qr.other9,qr.r5,qr.other10,qr.r6,qr.other11,qr.r7,qr.other12,qr.other13,qr.r8,qr.other14,qr.r9,qr.other15 FROM users u join qr on u.Id = qr.id_user");


    $r->execute();

    $resultats=$r->fetchAll();

    foreach ($resultats as $ligne){
        ?>
        <tr>
            <td><?php echo $ligne["Id"] ?></td>
            <td><?php echo $ligne["Name"] ?></td>
            <td><?php echo $ligne["FirstName"] ?></td>
            <td><?php echo $ligne["other1"] ?></td>
            <td><?php echo $ligne["other2"] ?></td>

            <td><?php switch($ligne["r1"]){
                    case 0 :
                        echo "Maison";
                        break;
                    case 1 :
                        echo "Appartement";
                        break;
                } ?></td>
            <td><?php echo $ligne["other3"] ?></td>
            <td><?php echo $ligne["other4"] ?></td>
            <td><?php echo $ligne["other5"] ?></td>
            <td><?php switch($ligne["r2"]){
                    case 0 :
                        echo "Laine de verre";
                        break;
                    case 1 :
                        echo "Laine de roche";
                        break;
                } ?></td>
            <td><?php echo $ligne["other6"] ?></td>
            <td><?php switch($ligne["r3"]){
                    case 0 :
                        echo "Oui et il est isolé";
                        break;
                    case 1 :
                        echo "Oui mais il n'est pas isolé";
                        break;
                    case 2 :
                        echo "Non";
                        break;

                } ?></td>
            <td><?php echo $ligne["other7"] ?></td>
            <td><?php switch($ligne["r4"]){
                    case 0 :
                        echo "Oui et elles sont isolé";
                        break;
                    case 1 :
                        echo "Oui mais elles ne sont pas isolé";
                        break;
                    case 2 :
                        echo "Non";
                        break; ?></td>
            <td><?php echo $ligne["other8"] ?></td>
            <td><?php echo $ligne["other9"] ?></td>
            <td><?php switch($ligne["r5"]){
                case 0 :
                    echo "Oui";
                    break;
                case 1 :
                    echo "Non";
                    break;
                case 2 :
                echo "Quelques une ";
                break; ?></td>
            <td><?php echo $ligne["other10"] ?></td>
            <td><?php switch($ligne["r6"]){
                case 0 :
                    echo "Chauffe eau solaire";
                    break;
                case 1 :
                    echo "Chauffe eau thermodynamique";
                    break;
                case 2 :
                echo "Autre ";
                break; ?></td>
            <td><?php echo $ligne["other11"] ?></td>
            <td><?php switch($ligne["r7"]){
                case 0 :
                    echo "Oui";
                    break;
                case 1 :
                    echo "Non";
                    break;
                 ?> </td>
            <td><?php echo $ligne["other12"] ?></td>
            <td><?php echo $ligne["other13"] ?></td>
            <td><?php switch($ligne["r8"]){
                case 0 :
                    echo "Chauffage electrique";
                    break;
                case 1 :
                    echo "Fuel";
                    break;
                case 2 :
                echo "Chauffage au gaz ";
                break;
                case 3 :
                echo "Chauffage au bois ";
                break;
                case 4 :
                echo "Pompe a chaleur ";
                case 5 :
                echo "Autre specifier le chauffage ";
                break; ?>
                break;
                ?>
            </td>
            <td><?php echo $ligne["other14"] ?></td>
            <td><?php switch($ligne["r9"]){
                case 0 :
                    echo "Photocoltaique";
                    break;
                case 1 :
                    echo "Aerovoltaique";
                    break;
                case 2 :
                echo "Autre ";
                break;
                ?></td>
            <td><?php echo $ligne["other15"] ?></td>






        </tr>
        <?php
    }

    ?>
</table>
</body>
</html>