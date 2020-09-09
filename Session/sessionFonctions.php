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
        header("location: ../Pages/P_Accueil.php");
    } else {
        if ($P == "A") {
            // Admin
            if ($_SESSION["personne"]["admin"] != True) {
                header("location: ../Pages/P_Accueil.php");
            }

        } elseif ($P == "B") {

            if ($_SESSION["personne"]["admin"] != False) {
                header("location: ../Pages/P_Accueil.php");
            }

        }


    }


}
