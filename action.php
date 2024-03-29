<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="css/images/icon__shine3.png">
   
</head>
<body>
    <header>
        <nav>
            <ul class="ul__nav">
                <li><a href="index.html#accueil" class="animated-link">
                    <span style="width: 200px;
                    height: 80px;
                    font-size: 2.5rem;
                    padding: 0.6rem 1rem;">Accueil</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="h5__container">
        <div class="smileys scale-up up" style="width:95px;">
            <img src="css/images/icon__shine3.png" alt="icone d'étoiles qui scintillent">
        </div>

        <div class="smileys scale-up right" style="width:95px;">
            <img src="css/images/icon__shine3.png" alt="icone d'étoiles qui scintillent">
        </div>

        <div class="smileys smile-up" style="width:95px;">
            <img src="css/images/smiley_logo.png" alt="icone smiley sourire">
        </div>

        <div class="smileys smile-down" style="width:95px;">
            <img src="css/images/smiley_logo.png" alt="icone smiley sourire">
        </div>

        <div class="smileys smile-botleft" style="width:95px;">
            <img src="css/images/smiley_logo.png" alt="icone smiley sourire">
        </div>

        <?php

            //Si le formulaire a été soumis
            if (isset($_POST["message"])){
            $message ="Ce message a été envoyé via la page contact du site 
            anissawebdesign.com
            Nom: " . $_POST["nom"] . "
            Prenom: " . $_POST["prenom"] . "
            Email: " . $_POST["email"] . "
            Message: " . $_POST["message"];


            $succes = "<h5> Votre message a bien été envoyé ! <br> Merci et à bientôt ! </h5>";
            $fail = "<h5> Oups! Une erreur s'est produite lors de l'envoi de votre message ! </h5>";
            $retour = mail("anissa.webdesign@gmail.com", $_POST["subject"], $message,
            "From:contact@anissawebdesign.com" . "\r\n" . "Reply-to:" . $_POST["email"]);
            if ($retour) {
                echo "$succes";
            }
            else{
                echo "$fail";
            }
        }
        ?>

        <div class="social__container" style="width:110px;">
            <div class="social" id="linkedin" style="width:100%; height:auto">
                <a href="https://www.linkedin.com/in/anissa-belhedi/?originalSubdomain=fr" target="blank"><img src="css/images/linkedin.png" alt="logo de linkedin"></a>
            </div>
            <div class="social" id="github">
                <a href="https://github.com/AnissaBel" target="blank"><img src="css/images/github.png" alt="logo de github"></a>
            </div>
        </div>

    </div>
       
</body>


