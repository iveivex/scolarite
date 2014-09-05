<?php include('menu.php')?>
<?php
  require_once('conn_db.php');

?>
    
	  
	  
      <div id="content">
        <!-- insert the page content here -->
       <div>
	<form method="post" action="inscription_success.php" id="search_form" enctype='multipart/form-data'>
	 <div class="form_settings">
	       <h1 style="padding-left: 230px; text-decoration: underline;">Inscription</h1><br /><br />
	

      
      
           <p><span>Pr&eacute;nom :</span><input class="contact" type="text"  name='prenom' placeholder='Prenom' ><br /></p>
      
         
      <p><span>Nom :</span><input class="contact" type="text"  name='nom' placeholder='Nom'><br /></p>
      <p><span>Date de naissance :</span><input class="contact" type="text"  name='date' placeholder='Format DD/MM/YYYY' ><br /></p>
        
       <p><span> Lieu : </span><input class="contact" type="text"  name='lieu' placeholder='Lieu de naissance'></p>
       
       <p><span>
       Photo : </span><input type="file" name="photo">
        <br />
       </p><br /><br /><br /><br />
       
       <p>
	  <span>Sexe :</span>
            <select   id="menugsm" name='sexe'>
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

  <select name='classe' id="menugsm" >
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
  
  
  
  <p><span>Redoublant(e) :</span>

  <select name='redoublant' id="menugsm" >
<option>Oui</option>
<option selected='selected'>Non</option>
  </select>
  
  </p>
  
  
  <br /><br /><br />
      <p><span><input class="submit" type="submit" name="valider" value="Inscrire" /></span></p>
          
    
    </div>
  
            
            </form>
	
      </div>
     
	
	
      </div>
    </div>

	
	</div>
      </div>
    </div>
    
    
    
    
   
   
    <?php include('footer.php')?>
</body>
</html>
