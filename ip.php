<?php
// Récupère l'adresse IP du client
$ip_client = $_SERVER['REMOTE_ADDR'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<title>Adresse IP du poste</title>
</head>
<body>
<h1>Votre adresse IP (vue par le serveur)</h1>
<p><?php echo htmlspecialchars($ip_client); ?></p>
</body>
</html>