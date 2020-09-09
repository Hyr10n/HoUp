<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'upload de fichiers</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <h2>Upload Fichier</h2>
    <label for="fileUpload">Fichier:</label>
    <input type="file" name="rapport" id="fileUpload">
    <input type="submit" name="submit" value="Upload">
    <p><strong>Note:</strong> Seul le format .pdf est autorisé jusqu'à une taille maximale de 5 Mo.</p>
</form>
</body>
</html>
