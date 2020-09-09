<?php include "header.php" ?>



<table class="table table table-dark table-responsive">
    <tr>
        <th>ID user</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Quelle a été votre consommation electrique en 2019 en kWh/an?</th>
        <th>Quelle es le nombre de personnes dans votre foyer ?    </th>
        <th>Quelle est le type de votre habitation ?</th>
        <th>Autres ou spécications </th>
        <th>Quelle est la superficie de votre habitation en m² ?  </th>
        <th>Quelle est le nombres de pièces de votre habitation ?    </th>
        <th>Avec quelle matériau(x) votre maison est isolé ?</th>
        <th>Autres ou spécications </th>
        <th>Posséder vous un grenier ?     </th>
        <th>Autres ou spécications </th>
        <th>Posséder vous des combles ?</th>
        <th>Autres ou spécications </th>
        <th>Combien de portes d’entrer ou de fenêtres possédez vous ?</th>
        <th>Toutes vos fenêtres ont des doubles vitrages ?</th>
        <th> Autres ou spécications</th>
        <th>Quelle est votre type de chauffage d’eau ?</th>
        <th> Autres ou spécications</th>
        <th> Possédez-vous un système de climatisation ?</th>
        <th>Autres ou spécications</th>
        <th>Quelle est l’année de construction ? </th>
        <th>Quelle est votre type de chauffage ?</th>
        <th>Autres ou spécications</th>
        <th> Votre installation électrique comporte t’elle une de ses installations ?</th>
        <th> Autres ou spécications</th>

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
            <td><?php echo $ligne["other1"]  ?> </td>
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
                        break; }?> </td>




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
                break; }?></td>
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
                break; }?></td>
            <td><?php echo $ligne["other11"] ?></td>
            <td><?php switch($ligne["r7"]){
                case 0 :
                    echo "Oui";
                    break;
                case 1 :
                    echo "Non";
                    break;}
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
                break; }?>

            </td>
            <td><?php echo $ligne["other14"] ?></td>
            <td><?php switch($ligne["r9"]) {
                    case 0 :
                        echo "Photovoltaique";
                        break;
                    case 1 :
                        echo "Aerovoltaique";
                        break;
                    case 2 :
                        echo "Autre ";
                        break;
                }?></td>
            <td><?php echo $ligne["other15"] ?></td>






        </tr>
        <?php
    }

    ?>
</table>
</body>
</html>