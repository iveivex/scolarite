<?php
  require_once('conn_db.php');
  ?>


<?php include('menu.php')?>

    <hgroup>
					
					<div id="main">
   
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="liste.php">Liste</a></li>
          <li><a href="modifier.php">Modifier</a></li>
          <li><a href="specifier_supprimer.php">Supprimer</a></li>
          <li><a href="remarques.php">Remarques</a></li>
        
        </ul>
      </div>
   </div>
				</hgroup>
	  
	  <h1 style="font-weight: bold; text-transform:uppercase;">
		 
		  Modification</h1>
	  <br />
	  <hr />
	  
      <div id="content">
        <!-- insert the page content here -->
	
	
	 <?php
		  
	$req=mysql_query("SELECT * FROM eleves WHERE mat=".$_GET['id']) or die ('Erreur requete');

if (! $req) { echo "Aucun r&eacute;sultat"; exit;}
else {
 while ($row = mysql_fetch_assoc($req)) {
?>



       <div>
	      
	<form method="post" action="modifier_success.php" id="search_form" enctype='multipart/form-data'>
	 <div class="form_settings">
   <input class="contact" type="hidden"  name='matricule' placeholder='matricule' value="<?php echo $row['mat'];?>">
           <p><span>Pr&eacute;nom :</span><input class="contact" type="text"  name='prenom' placeholder='Prenom' value="<?php echo ''.$row['prenom'].'';?>"><br /></p>
      
         
      <p><span>Nom :</span><input class="contact" type="text"  name='nom' placeholder='Nom' value="<?php echo ''.$row['nom'].'';?>"><br /></p>
      <p><span>Date de naissance :</span><input class="contact" type="text"  name='date' placeholder='Format DD/MM/YYYY' value="<?php echo ''.$row['date'].'';?>"><br /></p>
        
       <p><span> Lieu : </span><input class="contact" type="text"  name='lieu' placeholder='Lieu de naissance' value="<?php echo ''.$row['lieu'].'';?>"></p>
       
       <p><span>
       Photo : </span><input type="file" name="photo"><p style="color:red;">*Vous devez res&eacute;lectionner la photo de l'&eacute;l&egrave;ve</p>
        <br />
       </p>
       
       <br />
       
       <p>
	  <span>Sexe :</span>
            <select   id="menugsm" name='sexe' value="<?php echo ''.$row['sexe'].'';?>">
                  <option>Masculin</option>
                  <option>Feminin</option>
            </select>
       </p>

      <p><span>
      
      
    <?php
$connexion=mysql_connect("localhost","root","") or die ("connexion impossible.");
$db=mysql_select_db('projet',$connexion) or die ("base de données non accessible pour le moment");
?></span></p><br />
      
<p><span>Classe :</span>

  <select name='classe' id="menugsm" value="<?php echo ''.$row['classe'].'';?>">
<?php
$resultat=mysql_query("select nom_classes from classes ") or die ("requète non executé");
if (! $resultat) { echo "Aucun resultat"; exit;} 
while ($ligne=mysql_fetch_array($resultat))
{
?>
<option><?php echo $ligne['nom_classes'];?> </option>
<?php
}
mysql_close($connexion);
?>
  </select>
  
  </p>
  
  
  
  <p><span>Redoublant :</span>

  <select name='redoublant' id="menugsm" value="<?php echo ''.$row['redoublant'].'';?>">
<option>Oui</option>
<option selected='selected'>Non</option>
  </select>
  
  </p>
  
  
  <br /><br /><br />
      <p><span><input class="submit" type="submit" name="valider" value="Modifier" /></span></p>
          
    
    </div>
  
            
            </form>
	
	

<?php

}
}

?>
	
	
	
	
	
	
	
	
      </div>
     	 </div>
    </div>

	
	</div>
      </div>
    </div>
    
    
    
    
   
   
    <?php include('footer.php')?>
</body>
</html>
