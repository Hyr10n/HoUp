<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "../DB/Functions.php";

$_SESSION["personne"]["Id"];

global $pdo;
$query = $pdo->prepare("SELECT nomDossier FROM `users` WHERE :id_user=");
$query->execute(['id_user' => $id_user]);
$row = $query->fetchAll();

listing($row['nomDossier']);
