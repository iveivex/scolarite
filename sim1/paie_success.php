
<?php
include('conn_db.php');
extract($_POST);
$mat1=$_POST['mat'];
$req= mysql_query("UPDATE eleves SET $_POST[mois]=$_POST[somme] where mat=".$mat1 );
$query_soc=$req or die(mysql_error());

?>

<?php include('menu.php');?>



<br /><br />
                              <h1 align="center" color="green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			      <img src="uploads/ok.png"  width="30px" height="30px" alt="ok">&nbsp;&nbsp;&nbsp;&nbsp;
			      Paiement effectu&eacute;e avec succ&egrave;s!!!
			      </h1>
			<form action="enregistrer.php" id="search_form" >
			  <div align="center">
			
			    <ul class='field6'><li><a href='enregistrer.php'>Cliquez pour retourner</a></li></ul>
			   
			  </div>
			  </form>
               
</body>
</html>
