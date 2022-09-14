<?php

//Si le formulaire a été soumis
if (isset($_POST["message"])) {
    $message ="Ce message a été envoyé via la page contact du site 
    anissawebdesign.com
    Nom: " . $_POST["nom"] . "
    Email: " . $_POST["email"] . "
    Message: " . $_POST["message"];

    $retour = mail("anissa.webdesign@gmail.com", $_POST["sujet"], $message,
    "From:contact@anissawebdesign.com" . "\r\n" . "Reply-to:" . $_POST["email"]);
    if ($retour) {
        echo "<p> Votre message a bien été envoyé ! </p>";
    }
}
?>