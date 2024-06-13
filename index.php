<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Afficher une table MariaDB2</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 20px;
    }
    h1 {
        text-align: center;
        color: #333;
    }
    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        box-shadow: 0 2px 3px rgba(0,0,0,0.1);
        background-color: #fff;
    }
    th, td {
        padding: 12px;
        text-align: left;
    }
    th {
        background-color: #4CAF50;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #ddd;
    }
</style>
</head>
<body>

<h1>Informations des utilisateurs</h1>
<img src="logo.jpg" alt="ScotchLand">

<?php
// Paramètres de connexion à la base de données
$servername = "bdd-dor.mysql.database.azure.com";
$username = "dorian";
$password = "Simplon2024/";
$dbname = "bddbrief";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}

// Préparer et exécuter la requête
$query = "SELECT * FROM <nom de la table>";
if ($stmt = $conn->prepare($query)) {
    $stmt->execute();
    $result = $stmt->get_result();

    // Afficher les données dans un tableau HTML
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Nom</th><th>Prénom</th><th>Adresse</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
            echo "<td>" . htmlspecialchars($row['prenom']) . "</td>";
            echo "<td>" . htmlspecialchars($row['adresse']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='text-align: center;'>Aucune donnée trouvée.</p>";
    }

    // Libérer le résultat
    $result->free();
    $stmt->close();
} else {
    echo "<p style='text-align: center;'>Erreur lors de la préparation de la requête: " . $conn->error . "</p>";
}

// Fermer la connexion à la base de données
$conn->close();
?>

</body>
</html>

