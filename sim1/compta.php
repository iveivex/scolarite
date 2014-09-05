<?php
  require_once('conn_db.php');

?>


<?php include('menu.php');?>


<hgroup>
					
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
			<li>
				
							
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
				</hgroup>
			<br /><br />	  
				  <hr />
				  

<hr />
                                   <div style="text-align: left; text-decoration: underline;">
				  Chiffre d'affaire(Actuellement): <span style="color: darkgreen;"><b>
				         <?php include('chiffreaffaire.php');?></b> FCFA</span>
				   </div>
				  <div style="text-align: right;">
				  <span id="date_heure"></span>
            <script type="text/javascript">window.onload = date_heure('date_heure');</script>
				  </div>
          
          <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	  <br /><br /><br /><br /><br /><br /><br />
			
                        <?php include('footer.php');?>
</body>
</html>
