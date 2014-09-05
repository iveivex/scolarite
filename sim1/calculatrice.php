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
	
	
	
	<br /><br /><br />
	
	
	
	<table class="calculatrice" id="calc">
            <tr>
                <td colspan="4" class="calc_td_resultat">
                    <input type="text" readonly="readonly" name="calc_resultat" id="calc_resultat" class="calc_resultat" onkeydown="javascript:key_detect_calc('calc',event);" />
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="CE" onclick="javascript:f_calc('calc','ce');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="&larr;" onclick="javascript:f_calc('calc','nbs');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="%" onclick="javascript:f_calc('calc','%');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="+" onclick="javascript:f_calc('calc','+');" />
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="7" onclick="javascript:add_calc('calc',7);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="8" onclick="javascript:add_calc('calc',8);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="9" onclick="javascript:add_calc('calc',9);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="-" onclick="javascript:f_calc('calc','-');" />
                </td>
            </tr>
                        <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="4" onclick="javascript:add_calc('calc',4);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="5" onclick="javascript:add_calc('calc',5);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="6" onclick="javascript:add_calc('calc',6);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="x" onclick="javascript:f_calc('calc','*');" />
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="1" onclick="javascript:add_calc('calc',1);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="2" onclick="javascript:add_calc('calc',2);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="3" onclick="javascript:add_calc('calc',3);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="&divide;" onclick="javascript:f_calc('calc','');" />
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="0" onclick="javascript:add_calc('calc',0);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="&plusmn;" onclick="javascript:f_calc('calc','+-');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="," onclick="javascript:add_calc('calc','.');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="=" onclick="javascript:f_calc('calc','=');" />
                </td>
            </tr>
        </table>
        <script type="text/javascript">
                document.getElementById('calc').onload=initialiser_calc('calc');
        </script>
	
	
	
	
	
	
	
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	  <br /><br /><br /><br /><br /><br /><br />
			
		      
		    <?php include('footer.php')?>			
</body>
</html>
