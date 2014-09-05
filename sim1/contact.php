<?php
  require_once('conn_db.php');
session_start();//lancement de la session
 if(isset($_SESSION['login']))//test d'authentification
{	
   
    exit();
}

?>



<!DOCTYPE html>
<html lang="fr-FR">
<head>

<title>Envoyer un message</title>
<?php include('include1.php');?>



</head>
<body class="blog logged-in admin-bar no-customize-support">

                  <?php
                          include('menu.php');
                  ?>
                                <hgroup>
					
					<form action='gmail-sample.php' method='POST' >
          
             <div class='box'>
    <div class='content'>
      <h1 style='color: white; text-decoration: underline;'>Envoyer un mail</h1><br /><br /><br /><br />
      <div align='left' style='color: white; text-decoration: underline;'>Votre pr&eacute;nom et nom:</div>
      
      <div align='left' ><input class='field10' type='text' name='nom'  ><br /></div>
      <div align='left' style='color: white; text-decoration: underline;'>Sujet:<br />
    
      <input class='field10' type='text' name='sujet' /></div><br />
	
	<textarea  class='field101' name='sms' placeholder='' rows='300' cols='300'>
	 ...
	</textarea>
	  <br />

      <input class='btn' type='submit' name='envoyer' value='Envoyer' align='center'>
          
    
    </div>
  </div>
            
            </form>

						
						
						
				</hgroup>
			
                        <?php include('footer.php');?>
</body>
</html>
