<?php
  require_once('conn_db.php');
?>



<!DOCTYPE html>
<html lang="fr-FR">
<head>

<title>Inscrire</title>

<link type="text/css" rel="stylesheet" src="css1.css" />
<link type="text/css" rel="stylesheet" src="css2.css" />
<link type="text/css" rel="stylesheet" src="styles-min-beta2.css.css" />
</head>
<body>

                  <?php
                          include('menu.php');
                  ?>
                               
                                   
                                   
                                   
                                 <div style="text-align: left;">   

<h2 style="text-align: center; text-decoration: underline;">Envoyer un sms</h2><br /><br />
<form action='mail.php' method='GET'>
          
             <div class='box'>
    <div class='content'>
      <h1 style='color: white;'>Envoyer un sms</h1>
     <img alt="numero telephone" src="uploads/mobile.jpg">
     
      <input class='field' type='text' name='addresse' placeholder='N° de t&eacute;l&eacute;phone' ><br />
  <br />
    <div>Message :</div>
      <textarea cols="80" rows="10" name="message" placeholder='Ton message ici ...'></textarea>
        <br />&nbsp;&nbsp;
      <div>
      <input class='btn' type='submit' name='valider' value='OK' align='center'>
      </div>
          <br /><br /><br /> <br /><br /><br />
    
    </div>
  </div>
            
            </form>

				 </div>
			
                        <?php include('footer.php');?>
                        
</body>
</html>