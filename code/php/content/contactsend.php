<?php
    
    include 'fonctions.php';

    if (sendmail($_POST) === true) {
        header('Location: ../page/contactsuccess.php');
        exit();
    }
    else {
        header('Location: ../page/contact.php');
        $_SESSION['contact_send_error'] = "Une erreur s'est produite";
    };
?>