<?php
  require_once('conn_db.php');
?>
                  <?php
                          include('menu.php');
                  ?>
                                <hgroup style="text-align: center;">
					<br /><br /><br /><br /><br /><br /><br />
	
	
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "admin") // Si le mot de passe est bon
    {
    // On affiche les codes
    
       header("location:enregistrer.php");//redirection
        
       
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
	 header("location:index.php");//redirection
    }
    ?>
	
	
          <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	  <br /><br /><br /><br /><br /><br /><br />
			
                        <?php include('footer.php');?>
</body>
</html>
