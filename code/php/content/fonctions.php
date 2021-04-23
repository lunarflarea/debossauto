<?php
function sendmail($dataForm)
{
    
    /* require 'src/Exception.php';
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
    $mail->Subject = 'Client Debossauto ' . $dataForm['prenom'] . ' ' . $dataForm['nom'];
    $mail->msgHTML('
    <html>
        <body>
            <table>
                <tr>
                    <td>Téléphone : </td><td>'.$dataForm["telephone"].'</td>
                </tr>
                <tr>
                    <td>Email : </td><td>'.$dataForm["email"].'</td>
                </tr>
                <tr>
                    <td>Adresse : </td><td>'.$dataForm["adresse"].'</td><td> </td><td>'.$dataForm["codepostal"].'</td><td> </td><td>'.$dataForm["ville"].'</td>
                </tr>
                <tr>
                    <td>Voiture : </td><td>'.$dataForm["voiture"].'</td>
                </tr>
                <br />
            </table> '. $dataForm["content"].'
        </body>
    </html>');
    $mail->addAttachment(''); // Fonction d'ajout de pièce jointe, il faudra téléverser les images sur le serveur avant
 */
    /* if(!$mail->send()){
        return "Erreur : " . $mail->ErrorInfo;
    }else{
        return true;
    } */
    $rand_num = rand(0,10);
    if($rand_num%2 == 0){
        return "Erreur : " . $mail->ErrorInfo;
    }else{
        return true;
    }
}
?>