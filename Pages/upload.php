<?php
// Vérifier si le formulaire a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Vérifie si le fichier a été uploadé sans erreur.
    if(isset($_FILES["rapport"]) && $_FILES["rapport"]["error"] == 0){
        $allowed = array("pdf" => "application/pdf");
        $filename = $_FILES["rapport"]["name"];
        $filetype = $_FILES["rapport"]["type"];
        $filesize = $_FILES["rapport"]["size"];
        var_dump($allowed); ?><br><?php
        var_dump($filetype); ?><br><?php
        // Vérifie l'extension du fichier
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

        // Vérifie la taille du fichier - 5Mo maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");

        // Vérifie le type MIME du fichier
        if(in_array($filetype, $allowed)){
            // Vérifie si le fichier existe avant de le télécharger.
            if(file_exists("../rapport/" . $_FILES["rapport"]["name"])){
                echo $_FILES["rapport"]["name"] . " existe déjà.";
            } else{
                move_uploaded_file($_FILES["rapport"]["tmp_name"], "../rapport/" . $_FILES["rapport"]["name"]);
                echo "Votre fichier a été téléchargé avec succès.";
            }
        } else{
            echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer.";
        }
    } else{
        echo "Error: " . $_FILES["rapport"]["error"];
    }
}
?>