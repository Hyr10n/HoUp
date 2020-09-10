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
    $query = $pdo->prepare("INSERT INTO `users`(`Name`, `FirstName`, `Id`, `Address`, `City`, `Mail`, `Phone`, `Password`, `Birthdate`, `Admin`, `Consommation`, `nomDossier`) VALUES (:Name, :FirstName, NULL, :Address, :City, :Mail, :Phone, :Password, :Birthdate, NULL, NULL, :nomDossier)");
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
            $_SESSION["personne"] = $personne;
            header('Location: ../Pages/P_Accueil.php');

        }
    }

}


function userList()
{
    global $pdo;
    $query = $pdo->prepare("SELECT `Name`, `FirstName`, `Id`, `Address`, `City`, `Mail`, `Phone` FROM `users` where `admin` IS NULL");
    $query->execute();
    $row = $query->fetchAll();
    return $row;
}


function userDeleteAccount($id)
{
    global $pdo;
    $rq = $pdo->prepare("DELETE FROM `users` WHERE Id=:Id ");
    $rq->execute(['Id' => $id]);
}
