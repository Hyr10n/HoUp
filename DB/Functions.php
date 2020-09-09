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
            $personne["Address"] = $r["Address"];
            $personne["City"] = $r["City"];
            $personne["Mail"] = $r["Mail"];
            $personne["Phone"] = $r["Phone"];
            $personne["Password"] = $r["Password"];
            $personne["Birtdate"] = $r["Birthdate"];
            $personne["Admin"] = $r["Admin"];
            $_SESSION["personne"] = $personne;

            header('Location: P_UsersList.php');

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