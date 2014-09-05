<?php
  require_once('conn_db.php');
?>

<?php

$req= mysql_query("SELECT * FROM eleves");
$query_soc=$req or die(mysql_error());

?>

<?php include('menu.php');?>

	
	
	
	
	
	
	
	
	
	
	<div id="main">
   
      <div id="menubar">
	
	
<ul id="menu">
	<li><a href="recent.php">Derni&egrave;res op&eacute;rations</a></li>
	<li>
		<a>Mes Chiffres</a>

		<ul>
			<li>
				<a href="specifier_mois_chiffre.php">Par mois</a>

							
			</li>
			<li>
				<a href="chiffreannee.php">Toute l'ann&eacute;e</a>
			
			</li>
			
			
			
			
		</ul>
	</li>
	<li>
		<a>D&eacute;penses</a>

		<ul>
			<li>
				 <a href="historique.php">Historique</a>
			</li>
                        <li>
                                 <a href="specifier_depense.php">Enregistrer une dépense</a>
                        </li>
			<li>
                                  <a href="modifier_depense.php">Modifier une dépense</a>

                        </li>
			
		</ul>					
	</li>
			
			
			
			<li>
		<a href="calculatrice.php">calculatrice</a>

		<ul>
			<li>
				 <a href="historique.php">Historique</a>
			</li>
                        <li>
                                 <a href="specifier_depense.php">Enregistrer une dépense</a>
                        </li>
			<li>
                                  <a href="modifier_depense.php">Modifier une dépense</a>

                        </li>
			
		</ul>					
	</li>
			
			
			
			
			
</ul>
      
      </div>
   </div>
	
	
	
	<h2  style="font-weight: bold; text-transform:uppercase; text-decoration: underline;">
Chiffres du mois<br /><br />
</h2>
	
	
	
	 <hr />
		  <div align="center"><br /><br />
		   
		 <h3>S&eacute;l&eacute;ctionnez le mois :</h3>
		 <form action="mois_chiffre.php" method="GET" id="search_form" >
		 
		 
		 
		 
		  <div class="form_settings">
		<select name='mois' id='menugsm' class='field3'>
<option>Octobre</option>
<option>Novembre</option>
<option>Decembre</option>
<option>Janvier</option>
<option>Fevrier</option>
<option>Mars</option>
<option>Avril</option>
<option>Mai</option>
<option>Juin</option>
<option>Juillet</option>
<option>Aout</option>
<option>Septembre</option>

                 
		      
		</select>
		
		
		
		<br /><br /><br />
		 <p><span><input type="submit" class="submit" value='Valider'/></span></p>
		
		
		  </div>
		  
		  
		  </form>
		 </h1>
		 </div>
                     
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	  <br /><br /><br /><br /><br /><br /><br />
			
		      
		    <?php include('footer.php')?>			
</body>
</html>
