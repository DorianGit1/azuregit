
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Smash Bros. Melee</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 900px;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #0073e6;
        }
        .image {
            margin: 20px 0;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .description {
            text-align: left;
        }
        .description p {
            line-height: 1.6;
        }
        footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Super Smash Bros. Melee</h1>
        <div class="image">
            <?php
                // Nom du fichier image (supposons que l'image s'appelle "melee.jpg")
                $imageName = "melee.jpg";

                // Vérifier si le fichier image existe dans le même dossier
                if (file_exists($imageName)) {
                    echo "<img src='$imageName' alt='Super Smash Bros. Melee' />";
                } else {
                    echo "<p>Image non trouvée</p>";
                }
            ?>
        </div>
        <div class="description">
            <p>Super Smash Bros. Melee est un jeu vidéo de combat développé par HAL Laboratory et édité par Nintendo pour la console GameCube. Il s'agit du deuxième opus de la série Super Smash Bros. et il a été initialement publié au Japon et en Amérique du Nord en 2001, puis dans les autres régions en 2002.</p>
            <p>Le jeu met en scène un large éventail de personnages issus des franchises populaires de Nintendo, tels que Mario, Link, Pikachu, et bien d'autres. Les joueurs s'affrontent dans des combats frénétiques, utilisant des attaques spéciales et des objets pour éjecter leurs adversaires de l'arène.</p>
            <p>Super Smash Bros. Melee est reconnu pour sa profondeur stratégique et son gameplay rapide, ce qui en a fait un favori parmi les joueurs compétitifs et les fans de jeux de combat.</p>
        </div>
        <footer>
            <p>&copy; 2024 Tous droits réservés.</p>
        </footer>
    </div>
</body>
</html>
