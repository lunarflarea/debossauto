<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2; // "2" sert pour les messages entre serveur et client
    $mail->Host = "smtp.gmail.com"; // Serveur de transfert de mail de GMail
    $mail->Port = 587; // Le port utilisé avec TLS
    $mail->SMTPSecure = 'tls'; // On utilise TLS car aujourd'hui, SSL est moins bon
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername; // incomplet, besoin d'un serveur pratique
    $mail->Password = $smtpPassword; // incomplet, besoin d'un serveur pratique
    $mail->setFrom($emailFrom, $emailFromName); // incomplet, besoin d'un serveur pratique
    $mail->addAddress('pascal@debossauto.fr', 'Pascal Auffret');
    $mail->Subject = 'Client Debossauto ' . $_POST['Prénom'] . ' ' . $_POST['Nom'];
    $mail->msgHTML("
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
    </html>");
    $mail->addAttachment(''); // Fonction d'ajout de pièce jointe, il faudra téléverser les images sur le serveur avant

    if(!$mail->send()){
        echo "Erreur : " . $mail->ErrorInfo;
    }else{
        echo "Message envoyé !";
    }
?>