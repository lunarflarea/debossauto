<?php
    $to         =   'pascal@debossauto.fr';
    $subject    =   'Client Debossauto ' . $_POST['Prénom'] . ' ' . $_POST['Nom'];
    $message    =   '
    <html>
        <body>
            <table>
                <tr>
                    <td>Téléphone : </td><td>'.$_POST["Telephone"].'</td>
                </tr>
                <tr>
                    <td>Email : </td><td>'.$_POST["Email"].'</td>
                </tr>
                <tr>
                    <td>Adresse : </td><td>'.$_POST["Adresse"].'</td><td> </td><td>'.$_POST["Codepostal"].'</td><td> </td><td>'.$_POST["Ville"].'</td>
                </tr>
                <tr>
                    <td>Voiture : </td><td>'.$_POST["Voiture"].'</td>
                </tr>
                <br />
            </table> '. $_POST['content'].'
        </body>
    </html>
    ';

    // On remplit l'en-tête Content-type, nécessaire pour les mails avec de l'HTML
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    
    mail($to, $subject, $message, implode("\r\n", $headers));
?>