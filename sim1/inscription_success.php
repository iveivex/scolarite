<?php
  require_once('conn_db.php');

?>

<?php
extract($_POST);

$pre=$_POST['prenom'];

$req= mysql_query("SELECT mat FROM eleves");
$query_soc=$req or die(mysql_error());
$nblignes=1+mysql_num_rows($req);
 $num_photo=$nblignes.'.jpg';

?>

			
		      

<?php
$user = 'root';
$pass = '';
// Data Source Name
$dsn = 'mysql:host=localhost;dbname=projet';
try{ //tentative de connexion : on crée un objet de la classe PDO
$dbh= new PDO($dsn, $user, $pass);
//S'il y a des erreurs de connexion, un objet PDOException est
// lancé. Vous pouvez attraper cette exception si vous voulez
// gérer cette erreur
} catch (PDOException $e){
print "Erreur ! :" . $e->getMessage() . "<br/>";
die();
}
$sql = "INSERT INTO eleves (prenom,nom,lieu,sexe,date,classe,redoublant) VALUES ('$_POST[prenom]','$_POST[nom]',
'$_POST[lieu]','$_POST[sexe]','$_POST[date]','$_POST[classe]','$_POST[redoublant]')";
//Recherche des données
$sth = $dbh->query($sql);

$pr=$_POST['prenom'];
$n=$_POST['nom'];
$cl=$_POST['classe'];
?>




<?php


$dossier = 'uploads/';
$fichier = basename($_FILES['photo']['name']);

// Testons si le fichier a bien été envoyé et s'il n'y a pas d’erreur
if (isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0)
{
// Testons si le fichier n’est pas trop gros
                  if($_FILES['photo']['size'] <= 7000000)
                             {
                                // Testons si l’extension est autorisée
                                 $infosfichier = pathinfo($_FILES['photo']['name']);
                                 $extension_upload = $infosfichier['extension'];
				
                                 $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png' , 'JPG');
                                            if (in_array($extension_upload, $extensions_autorisees))
                                                  {
                                                    // On peut valider le fichier et le stocker définitivement
                                                    move_uploaded_file($_FILES['photo']['tmp_name'],$dossier.$nblignes.'.jpg');
                                                    
                                                  }
                              }
		  else echo"La taille de la photo ne doit pas depasser 7Mo";	      

}


?>


<?php include('menu.php');?>

   
	  <div id="sidebar_container">
         <div class="sidebar"></div>
        </div>
	 
	  
      <div id="content">
        
	
			
			
			
			
			<?php echo"<script language='Javascript'>
$(document).ready(function () {

	setTimeout(function(){
      ui.notify('Notification 01', 'Cette premiere notification s\'affichera quelques secondes puis disparaitra.')
        .effect('slide');

      
    }, 200);

  
});
</script>";?>
			
			
	</div>

















<script type="text/javascript">
/* test */
$(document).ready(function(){
  for(i=0;i<1;i++){
    createNotice('https://developers.google.com/_static/af26327896/images/developers-logo.svg', 'Inscription r&eacute;ussie !!!',
                 'sbshdb');
  }
});
</script>


<content id="notice_template" style="display:none;width:0;height:0;left:-9999px;position:absolute;">
  <div id="notice_@" class="notice1">
    <header>
    </header>
    
    <content>
      
      <h3 id="notice_title_@">Inscription r&eacute;ussie !!!
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <a href="inscription.php"><img src="uploads/delete.png" onclick="deleteNotice(@);" /></a></h3>
      <hr />
      <br /><br />
      <div align="center" style="float: left;">
	      <table border="0.3">
				    <tr><th>
                       <img id="notice_img_@" src="uploads/<?php echo $num_photo?>"
				  title="<?php echo $num_photo ?>" alt="" width="100px" height="100px"/>
				  
				    </th></tr>
	      </table>
      	
     <p id="notice_text_@">
      
				 
			</div>
			      <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				   <p style="text-align: center;">
				        <span style="color:white; text-decoration: underline;"><?php echo"$pr $n";?> </span>
				        <span>a bien &eacutet&eacute; inscrit(e) en <br />Classe de</span>
					<span style="color: white; text-decoration: underline;"> <?php echo $cl?></span><br />
				   
				        <span style="color:red; text-decoration: underline;">N° de Matricule = 000<?php echo $nblignes?></span>
				   </p>
                                                              
			      </div>
                                                              
           
      </div>

      </p>
       
    </content>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <br /><br /><br /><br />
 <h3 style="text-align: center;">Patientez ...</h3>  
  </div>
  
</content>



  

    
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	
	  
	  
 <?php include('footer.php');
 

 ?>
    
  
</body>
</html>
