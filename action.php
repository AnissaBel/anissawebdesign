<?php

//Si le formulaire a été soumis
if (isset($_POST["message"])) {
    $message ="Ce message a été envoyé via la page contact du site 
    anissawebdesign.com
    Nom: " . $_POST["nom"] . "
    Prenom: " . $_POST["prenom"] . "
    Email: " . $_POST["email"] . "
    Message: " . $_POST["message"];


    $succes = "<p> Votre message a bien été envoyé ! </p>";
    $fail = "<p> Oups! Une erreur s'est produite lors de l'envoi de votre message ! </p>";
    $retour = mail("anissa.webdesign@gmail.com", $_POST["subject"], $message,
    "From:contact@anissawebdesign.com" . "\r\n" . "Reply-to:" . $_POST["email"]);
    if ($retour) {
        // header("location:index.html/#contact")
        echo "$succes";
    }
    else{
        // header("location:index.html/#contact")
        echo "$fail";
    }
}
?>