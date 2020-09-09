<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "../DB/Functions.php";

if(isset($_FILES["rapport"]) && $_FILES["rapport"]["error"] == 0) {

    upload();
}else{
    echo "Error: " . $_FILES["rapport"]["error"];
}

?>
<form method="post" enctype="multipart/form-data">
    <h2>Upload Fichier</h2>
    <label for="fileUpload">Fichier:</label>
    <input type="file" name="rapport" id="fileUpload">
    <input type="submit" name="submit" value="Upload">
    <p><strong>Note:</strong> Seul le format .pdf est autorisé jusqu'à une taille maximale de 5 Mo.</p>
</form>
