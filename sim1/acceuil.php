<?php
  require_once('conn_db.php');
?>
                  <?php
                          include('menu.php');
                  ?>
		   
                                <hgroup style="text-align: center;">
					<br /><br /><br /><br /><br /><br /><br />
					<form action="acceuil2.php" method="post">
					  <fieldset>
            <p>
	     <h4> Connexion </h4>
	      <span>
	    <hr><hr><br /><br />
	    Utilisateur : <input type="text" placeholder="Administrateur" disabled="disabled"><br /><br />
            Mot de passe : <input type="password" name="mot_de_passe" /><br /><br />
            <input type="submit" value="Connexion" /><br />
	    </span>
            </p>
	    </fieldset>
        </form>
          
          <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	  <br /><br /><br /><br /><br /><br /><br />
			
                        <?php include('footer.php');?>
</body>
</html>
