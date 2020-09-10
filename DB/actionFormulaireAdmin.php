<?php

$nom=filter_input( INPUT_POST, "nom");
$prix=filter_input( INPUT_POST, "prix");
$role=filter_input( INPUT_POST, "role");

require_once "Config.php";

$db = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASEDEDONNEES, Config::UTILISATEUR, Config::MOTDEPASSE);

$r=$db->prepare("INSERT INTO `appareilnomade`(`id`, `nom`, `prix`, `donnee`, `role`) VALUES (NULL, :nom, :prix,NULL, :role)");


$r->bindParam( ":nom",  $nom);
$r->bindParam( ":prix",  $prix);
$r->bindParam( ":role",  $role);



$r->execute();
header ("location: ../Pages/TableauFormulaire.php");