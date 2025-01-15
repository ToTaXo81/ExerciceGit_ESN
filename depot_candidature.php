<?php
var_dump($_SERVER['REQUEST_METHOD']);
if ($_SERVER['REQUEST_METHOD'] =='POST')
    {
        var_dump($_FILES);
        move_uploaded_file($_FILES["candidature"]["tmp_name"],"candidatures/".$_FILES["candidature"]["name"]);
        header('Location:confirm.php');
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dépôt de candidature</title>
    <style>
        body {
            background-color: #f0f8ff; /* Couleur de fond */
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #333;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Dépôt de candidature</h1>
    <form method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Choisir fichier :</label>
        <input type="file" name="candidature" id="fileToUpload">
        <br><br>
        <button type="submit" value="Envoyer" name="submit">Envoyer</button>
    </form>

</body>
</html>

