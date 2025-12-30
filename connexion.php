<?php 
require_once 'classes/Database.php';
require_once 'classes/Client.php';

session_start();

$erreur = null;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $mdpSaisi = $_POST['password'];

    
    $db = new Database();
    $pdo = $db->getPdo();

    $query = $pdo->prepare("SELECT * FROM clients WHERE email = ?");
    $query->execute([$email]);
    $data = $query->fetch();

    if ($data) {
       
        if (password_verify($mdpSaisi, $data['mot_de_passe_hash'])) {
            
           
            $clientConnecte = new Client(
                $data['id'], 
                $data['nom'], 
                $data['email'], 
                $data['mot_de_passe_hash']
            );

            
            $_SESSION['client_id'] = $clientConnecte->getId();
            $_SESSION['client_nom'] = $clientConnecte->getNom();

            header('Location: index.php');
            exit;
        } else {
            $erreur = "Mot de passe incorrect.";
        }
    } else {
        $erreur = "Cet email n'existe pas dans notre base.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - MaBagnole</title>
</head>
<body>

    <h2>Accès Client</h2>

    <?php if ($erreur): ?>
        <p style="color: red; border: 1px solid red; padding: 10px;">
            <?php echo $erreur; ?>
        </p>
    <?php endif; ?>

    <form method="POST" action="">
        <label>Email :</label><br>
        <input type="email" name="email" required><br><br>

        <label>Mot de passe :</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Se connecter</button>
    </form>

</body>
</html>