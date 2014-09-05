<?php
  require_once('conn_db.php');
?>



<!DOCTYPE html>
<html lang="fr-FR">
<head>

<title>Envoyer un mail</title>

<link type="text/css" rel="stylesheet" src="css1.css" />
<link type="text/css" rel="stylesheet" src="css2.css" />
<link type="text/css" rel="stylesheet" src="styles-min-beta2.css.css" />
</head>
<body>

                  <?php
                          include('menu.php');
                  ?>
                               
                                   
                                   
                                   
                                 <div style="text-align: center;">   

<h2 style="text-align: center; text-decoration: underline;">Envoyer un mail</h2><br /><br />
<form action='mail.php' method='POST'>
          
             <div class='box'>
    <div class='content'>
      <h1 style='color: white;'>Envoyer un mail</h1>
      Envoyer &agrave; :
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input class='field' type='text' name='addresse' placeholder='Addresse' ><br />
      Objet :
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <input class='field' type='text' name='objet' placeholder='objet'><br />&nbsp;&nbsp;
      
      
      <div>Message :</div>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <textarea cols="80" rows="10" name="message"></textarea>
        <br />&nbsp;&nbsp;
      
      <input class='btn' type='submit' name='valider' value='Envoyer' align='center'>
          <br /><br /><br />
    
    </div>
  </div>
            
            </form>

				 </div>
			
                        <?php include('footer.php');?>
                        
</body>
</html>