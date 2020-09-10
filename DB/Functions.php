<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "DB_infos.php";

$pdo = new PDO(DB_INFOS::servername, DB_INFOS::username, DB_INFOS::password, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

function userInscription($nom, $prenom, $address, $ville, $email, $tel, $password, $birthdate)
{
    $nomDossier = "$nom$prenom";
    if (is_dir("../Rapport/$nomDossier")) {
        $x = 0;
        while(is_dir("../Rapport/$nomDossier") == true){
            $x++;
            $nomDossier = "$nom$prenom$x";
        }
    }
    mkdir("../Rapport/$nomDossier");

    global $pdo;
    $query = $pdo->prepare("INSERT INTO `users`(`Name`, `FirstName`, `Id`, `Address`, `City`, `Mail`, `Phone`, `Password`, `Birthdate`, `Admin`, nomDossier) VALUES (:Name, :FirstName, NULL, :Address, :City, :Mail, :Phone, :Password, :Birthdate, NULL , :nomDossier)");
    $query->execute(['Name' => $nom, 'FirstName' => $prenom, 'Address' => $address, 'City' => $ville, 'Mail' => $email, 'Phone' => $tel, 'Password' => $password, 'Birthdate' => $birthdate, 'nomDossier' => $nomDossier]);

}

function userLogin($mail, $password)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM `users` WHERE mail=:mail AND password=:password");
    $query->execute(['mail' => $mail, 'password' => $password]);
    $row = $query->fetchAll();

    if (empty($row)) {
        msg("Wrong email or password");
    }
    foreach ($row as $r) {
        var_dump($r);
        if ($r["Mail"] == $mail AND $r["Password"] == $password) {
            session_start();
            $personne = [];
            $personne["auth"] = true;
            $personne["Name"] = $r["Name"];
            $personne["FirstName"] = $r["FirstName"];
            $personne["Id"] = $r["Id"];
            $personne["Address"] = $r["Address"];
            $personne["City"] = $r["City"];
            $personne["Mail"] = $r["Mail"];
            $personne["Phone"] = $r["Phone"];
            $personne["Password"] = $r["Password"];
            $personne["Birthdate"] = $r["Birthdate"];
            $personne["Admin"] = $r["Admin"];
            $personne["nomDossier"] = $r["nomDossier"];
            $_SESSION["personne"] = $personne;
            header('Location: ../Pages/P_UsersList.php');

        }
    }

}






function userList()
{
    global $pdo;
    $query = $pdo->prepare("SELECT `Name`, `FirstName`, `Id`, `Address`, `City`, `Mail`, `Phone`, `Consommation` FROM `users` where `admin` IS NULL");
    $query->execute();
    $row = $query->fetchAll();
    return $row;
}

function upload($nomDossier)
{
    $allowed = array("pdf" => "application/pdf");
    $filename = $_FILES["rapport"]["name"];
    $filetype = $_FILES["rapport"]["type"];
    $filesize = $_FILES["rapport"]["size"];

    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

    $maxsize = 5 * 1024 * 1024;
    if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");

    if(in_array($filetype, $allowed)){
        if(file_exists("Rapport/$nomDossier/" . $_FILES["rapport"]["name"])){
            echo $_FILES["rapport"]["name"] . " existe déjà.";
        } else{
            move_uploaded_file($_FILES["rapport"]["tmp_name"], "Rapport/$nomDossier/" . $_FILES["rapport"]["name"]);
            echo "Votre fichier a été téléchargé avec succès.";
        }
    } else{
        echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer.";
    }
}

function listing($nomDossier){

    $repertoire = "Rapport/$nomDossier/";


    $fichier = array();
     if (is_dir($repertoire)){

        $dir = opendir($repertoire);                              //ouvre le repertoire courant désigné par la variable
        //var_dump($dir);
         while(false!==($file = readdir($dir))){                             //on lit tout et on récupere tout les fichiers dans $file
            //var_dump($file);
            if(!in_array($file, array('.','..'))){            //on eleve le parent et le courant '. et ..'

                $page = $file;                            //sort l'extension du fichier
                $page = explode('.', $page);
                $nb = count($page);
                $nom_fichier = $page[0];
                for ($i = 1; $i < $nb-1; $i++){
                    $nom_fichier .= '.'.$page[$i];
                }
                if(isset($page[1])){
                    $ext_fichier = $page[$nb-1];
                    if(!is_file($file)) { $file = '/'.$file; }
                }
                else {
                    if(!is_file($file)) { $file = '/'.$file; }            //on rajoute un "/" devant les dossier pour qu'ils soient triés au début
                    $ext_fichier = '';
                }

                if($ext_fichier != 'php' and $ext_fichier != 'html') {        //utile pour exclure certains types de fichiers à ne pas lister
                    array_push($fichier, $file);
                }
            }
        }
    }

    natcasesort($fichier);                                    //la fonction natcasesort( ) est la fonction de tri standard sauf qu'elle ignore la casse

    foreach($fichier as $value) {
        echo ' <tr><td><a href="'.$repertoire.''.$value.'">'.$value.'</a><br /></td></tr>';
    }
}
