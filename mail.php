

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
<?php
/*$retour = mail('victor.aymard@live.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From : webmaster@monsite.fr');*/
$retour = mail('victor.aymard@live.fr', 'Envoi depuis la page Contact', $_POST['message']);
if ($retour) {
    echo '<p>Votre message a bien été envoyé.</p>';
}
else {
    echo '<p>Il y a eu un probleme au niveau de l envoie</p>';
}
?>

on devrait avoir le message ici
<?php echo htmlspecialchars($_POST['message']); ?>
<?php echo htmlspecialchars($retour); ?>

</body>
</html>
