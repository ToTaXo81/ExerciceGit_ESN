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
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Choisir fichier :</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br><br>
        <input type="submit" value="Envoyer" name="submit">
    </form>
</body>
</html>

