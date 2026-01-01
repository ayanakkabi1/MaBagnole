<?php
require_once 'classes/Database.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: vehicules.php');
    exit;
}

$db = new Database();
$pdo = $db->getPdo();

// Requête pour un seul véhicule avec sa catégorie
$stmt = $pdo->prepare("SELECT v.*, c.nom AS categorie_nom, c.description AS cat_desc 
                       FROM vehicules v 
                       JOIN categories c ON v.id_categorie = c.id 
                       WHERE v.id = ?");
$stmt->execute([$id]);
$v = $stmt->fetch();

if (!$v) {
    die("Véhicule introuvable.");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails - <?php echo $v['modele']; ?></title>
</head>
<body>
    <a href="vehicules.php">← Retour à la liste</a>
    
    <h1><?php echo htmlspecialchars($v['modele']); ?></h1>
    
    <ul>
        <li><strong>Immatriculation :</strong> <?php echo htmlspecialchars($v['immatriculation']); ?></li>
        <li><strong>Catégorie :</strong> <?php echo htmlspecialchars($v['categorie_nom']); ?></li>
        <li><strong>Description :</strong> <?php echo htmlspecialchars($v['cat_desc']); ?></li>
        <li><strong>Prix journalier :</strong> <?php echo $v['prix_jour']; ?> €</li>
        <li><strong>Statut :</strong> <?php echo $v['disponible'] ? 'Disponible' : 'Indisponible'; ?></li>
    </ul>

    <?php if ($v['disponible']): ?>
        <button onclick="alert('Redirection vers réservation...')">Réserver ce véhicule</button>
    <?php endif; ?>
</body>
</html>