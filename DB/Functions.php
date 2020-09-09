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
        if ($r["email"] == $mail AND $r["password"] == $password) {
            /*Do everything as connected*/
            session_start();
            $personne = [];
            $personne["auth"] = true;
            $personne["id"] = $r["id"];
            $personne["nom"] = $r["nom"];
            $personne["prenom"] = $r["prenom"];
            $personne["email"] = $r["email"];
            $personne["password"] = $r["password"];
            $personne["consommation"] = $r["consommation"];
            $_SESSION["personne"] = $personne;

            header('Location: P_UsersList.php');

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
