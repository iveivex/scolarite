
<?php
  require_once('conn_db.php');
session_start();//lancement de la session
 if(isset($_SESSION['login']))//test d'authentification
{	
    header("location:mail.php");//redirection
    exit();
}

 include("phpmailer/class.phpmailer.php");
?>



<!DOCTYPE html>
<html lang="fr-FR">
<head>
<title>Inscrire</title>

</head>
<body class="blog logged-in admin-bar no-customize-support">

                  <hgroup>

<?php
        
$mail = new PHPMailer();
$mail->SMTPDebug= false;
$mail->Host = 'mailrelay.orange.sn';

$mail->SMTPAuth   = true;
$mail->SMTPSecure = 'ssl';
$mail->Port = 465; // Par défaut

$mail->IsSMTP();

 
// Authentification
$mail->Username = "layefall93@gmail.com";
$mail->Password = "layeHANDSHAKING";
 
// Expéditeur
$mail->SetFrom($_POST['addresse']);

// Destinataire
$mail->AddAddress('fallabdoulaye93@yahoo.fr');
// Objet
$mail->Subject = $_POST['objet'];
 
// Votre message
$mail->MsgHTML($_POST['message']);
 
// Envoi du mail avec gestion des erreurs
if(!$mail->Send()) {
  echo 'Erreur : ' . $mail->ErrorInfo;
} else {
  echo '<h1 align="center">Message envoy&eacute; !!!.Merci </h1>';
} 

?>

	  </hgroup>				
		<br /><br /><br /><br /><br /><br /><br />				
				
			
                        <?php include('footer.php');?>
</body>
</html>
