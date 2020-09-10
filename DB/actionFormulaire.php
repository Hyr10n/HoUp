<?php

$id_user=filter_input( INPUT_POST, "id_user");
$r1=filter_input( INPUT_POST, "r1");
$r2=filter_input( INPUT_POST, "r2");
$r3=filter_input( INPUT_POST, "r3");
$r4=filter_input( INPUT_POST, "r4");
$r5=filter_input( INPUT_POST, "r5");
$r6=filter_input( INPUT_POST, "r6");
$r7=filter_input( INPUT_POST, "r7");
$r8=filter_input( INPUT_POST, "r8");
$r9=filter_input( INPUT_POST, "r9");
$other1=filter_input( INPUT_POST, "other1");
$other2=filter_input( INPUT_POST, "other2");
$other3=filter_input( INPUT_POST, "other3");
$other4=filter_input( INPUT_POST, "other4");
$other5=filter_input( INPUT_POST, "other5");
$other6=filter_input( INPUT_POST, "other6");
$other7=filter_input( INPUT_POST, "other7");
$other8=filter_input( INPUT_POST, "other8");
$other9=filter_input( INPUT_POST, "other9");
$other10=filter_input( INPUT_POST, "other10");
$other11=filter_input( INPUT_POST, "other11");
$other12=filter_input( INPUT_POST, "other12");
$other13=filter_input( INPUT_POST, "other13");
$other14=filter_input( INPUT_POST, "other14");
$other15=filter_input( INPUT_POST, "other15");


require_once "Config.php";

$db = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASEDEDONNEES, Config::UTILISATEUR, Config::MOTDEPASSE);

$r=$db->prepare("INSERT INTO qr( id_user, r1,  r2,  r3, r4,  r5, r6, r7,  r8, r9, other1,other2,other3,other4, other5, other6,other7, other8, other9, other10, other11, other12, other13, other14, other15) VALUES (:id_user, :r1,:r2,:r3,:r4,:r5,:r6,:r7,:r8,:r9,:other1,:other2,:other3,:other4,:other5,:other6,:other7,:other8,:other9,:other10,:other11,:other12,:other13,:other14,:other15)");
$r->bindParam( ":id_user",  $id_user);
$r->bindParam( ":r1",  $r1);
$r->bindParam( ":r2",  $r2);
$r->bindParam( ":r3",  $r3);
$r->bindParam( ":r4",  $r4);
$r->bindParam( ":r5",  $r5);
$r->bindParam( ":r6",  $r6);
$r->bindParam( ":r7",  $r7);
$r->bindParam( ":r8",  $r8);
$r->bindParam( ":r9",  $r9);
$r->bindParam( ":other1",  $other1);
$r->bindParam( ":other2",  $other2);
$r->bindParam( ":other3",  $other3);
$r->bindParam( ":other4",  $other4);
$r->bindParam( ":other5",  $other5);
$r->bindParam( ":other6",  $other6);
$r->bindParam( ":other7",  $other7);
$r->bindParam( ":other8",  $other8);
$r->bindParam( ":other9",  $other9);
$r->bindParam( ":other10",  $other10);
$r->bindParam( ":other11",  $other11);
$r->bindParam( ":other12",  $other12);
$r->bindParam( ":other13",  $other13);
$r->bindParam( ":other14",  $other14);
$r->bindParam( ":other15",  $other15);

$r->execute();
header ("location: ../Pages/P_Accueil.php");