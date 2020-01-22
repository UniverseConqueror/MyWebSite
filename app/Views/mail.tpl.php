<?php

if (isset($_POST['mail']) && isset($_POST['message'])) {

    $retour = mail('adrillef@gmail.com', 'Envoi depuis la page contact', $_POST['message'], $_POST['mail']);
    
    echo "<p> Félicitations votre message a bien été envoyé</p>";

} else {

    echo "Merci de remplir le champ manquant";
    
}

?>