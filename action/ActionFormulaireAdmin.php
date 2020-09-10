<?php
session_start();

$id=filter_input( INPUT_POST, "id");
$nom=filter_input( INPUT_POST, "nom");
$prix=filter_input( INPUT_POST, "prix");
$donnee=filter_input( INPUT_POST, "donnee");




require_once "../Config.php";

$db = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASEDEDONNEES, Config::UTILISATEUR, Config::MOTDEPASSE);

$r=$db->prepare("INSERT INTO appareilnomade( id, nom,  prix, role  from appareilnomade");

$r->bindParam( ":id",  $id);
$r->bindParam( ":nom",  $nom);
$r->bindParam( ":prix",  $prix);
$r->bindParam( ":donnee",  $donnee);



$r->execute();
header ("location: ../TableauFormulaire.php");