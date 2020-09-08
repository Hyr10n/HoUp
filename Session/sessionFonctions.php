<?php

function Logout()
{
    session_start();
    session_unset();
    session_destroy();
}

function Security($P = "C")
{
    if (is_null($_SESSION["personne"]["auth"])) {
        header("location: /Pages/P_Connexion");
    }


}

