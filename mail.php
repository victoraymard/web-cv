

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
<?php
/*$retour = mail('victor.aymard@live.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From : webmaster@monsite.fr');*/
$retour = mail('victor.aymard@live.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From : groszizi@monsite.fr');
if ($retour) {
    echo '<p>Votre message a bien été envoyé.</p>';
}
else {
    echo '<p>Il y a eu un probleme au niveau de l envoie</p>';
}
/*
// The message
$message = "Line 1\r\nLine 2\r\nLine 3";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('victor.aymard@live.fr', 'My Subject', $message);*/
?>

on devrait avoir le message ici
<?php echo htmlspecialchars($_POST['message']); ?>


</body>
</html>
