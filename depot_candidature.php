<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dépôt de candidature</title>
</head>
<body>
    <h1>Dépôt de candidature</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Choisir fichier :</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br><br>
        <input type="submit" value="Envoyer" name="submit">
    </form>
</body>
</html>
