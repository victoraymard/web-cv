<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    /*$name = $_POST['submit'];*/
    $subject = $_POST ['subject'];
    $mailfrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "victor.aymard@edu.ece.fr";
    $txt = $_POST['name']. " avec comme adresse: ".$mailfrom. " et comme objet : " .$subject. " vous a envoyé le message suivant : ";
    $txt .= $message;
    $retour = mail($mailTo, "Envoi depuis la page contact" + $txt, $txt, 'From : webmaster@monsite.fr');
    header('Location: victoraymard.yo.fr');
     if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }


   /* $retour = mail('victor.aymard@edu.ece.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From : webmaster@monsite.fr');
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }*/
    ?>
</body>
</html>