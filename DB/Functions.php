<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "DB_infos.php";

$pdo = new PDO(DB_INFOS::servername, DB_INFOS::username, DB_INFOS::password, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

function userInscription($nom, $prenom, $address, $ville, $email, $tel, $password, $birthdate)
{

    global $pdo;
    $query = $pdo->prepare("INSERT INTO `users`(`Name`, `FirstName`, `Id`, `Address`, `City`, `Mail`, `Phone`, `Password`, `Birthdate`, `Admin`) VALUES (:Name, :FirstName, NULL, :Address, :City, :Mail, :Phone, :Password, :Birthdate, NULL )");
    $query->execute(['Name' => $nom, 'FirstName' => $prenom, 'Address' => $address, 'City' => $ville, 'Mail' => $email, 'Phone' => $tel, 'Password' => $password, 'Birthdate' => $birthdate]);
}

function userLogin($email, $password)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM `personnes` WHERE email=:email AND password=:password");
    $query->execute(['email' => $email, 'password' => $password]);
    $row = $query->fetchAll();

    if (empty($row)) {
        msg("Wrong email or password");
    }
    foreach ($row as $r) {
        if ($r["email"] == $email AND $r["password"] == $password) {
            /*Do everything as connected*/
            session_start();
            $personne = [];
            $personne["auth"] = true;
            $personne["id_personnes"] = $r["id_personnes"];
            $personne["nom"] = $r["nom"];
            $personne["prenom"] = $r["prenom"];
            $personne["email"] = $r["email"];
            $personne["password"] = $r["password"];
            $_SESSION["personne"] = $personne;

            header('Location: home.php');

        }
    }

}