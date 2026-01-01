<?php
require_once 'classes/Database.php';
require_once 'classes/Vehicule.php';

$db = new Database();
$pdo = $db->getPdo();

// Requête avec JOIN pour avoir le nom de la catégorie
// On récupère uniquement les véhicules disponibles (disponible = 1)
$sql = "SELECT v.*, c.nom AS categorie_nom 
        FROM vehicules v
        JOIN categories c ON v.id_categorie = c.id
        WHERE v.disponible = 1";

$stmt = $pdo->query($sql);
$vehicules = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nos Véhicules - MaBagnole</title>
    <style>
        .vehicule-card { border: 1px solid #ccc; padding: 15px; margin: 10px; border-radius: 8px; display: inline-block; width: 250px; }
        .dispo { color: green; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Véhicules disponibles à la location</h1>

    <?php if (empty($vehicules)): ?>
        <p>Aucun véhicule n'est disponible pour le moment.</p>
    <?php else: ?>
        <div class="container">
            <?php foreach ($vehicules as $v): ?>
                <div class="vehicule-card">
                    <h3><?php echo htmlspecialchars($v['modele']); ?></h3>
                    <p><strong>Catégorie :</strong> <?php echo htmlspecialchars($v['categorie_nom']); ?></p>
                    <p><strong>Prix :</strong> <?php echo $v['prix_jour']; ?>€ / jour</p>
                    <p class="dispo">✓ Disponible</p>
                    
                    <a href="details.php?id=<?php echo $v['id']; ?>">Voir les détails</a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</body>
</html>