<?php
  require_once('conn_db.php');
?>

                  <?php
                          include('menu.php');
                  ?>
		  
                                <hgroup>
					
					<div id="main">
   
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="liste.php">Liste</a></li>
          <li><a href="modifier.php">Modifier</a></li>
          <li><a href="infos.php">Infos</a></li>
          <li><a href="remarques.php">Remarques</a></li>
        
        </ul>
      </div>
   </div>
				</hgroup>

          




 <table width="100%" border="0" cellspacing="0" cellpadding="2">
                                <tr> 
                                  <form name="transfert" action="sms_transfert.php" method="post" onSubmit="javascript:window.open('','popup','width=550,height=230,top='+((screen.height-250)/2)+',left='+((screen.width-500)/2)+',scrollbars=0,location=0,status=0,resizable=0');" target=popup>
                                    <input name="credinitial" type="hidden" id="credinitial" value="10">
                                    <input name="emaile" type="hidden" value="layefall93@gmail.com">
                                  </form>
                                  <td width="55%"><p class="d"><img src="sms/sms_supp.gif" width="15" height="8" align="absmiddle"> <strong><a href="sms_griller.php" onClick=window.open('','popup','width=550,height=400,scrollbars=1') target=popup><font color="#0066FF">Supprime des num&eacute;ros de ton carnet</font></a></strong><br /><strong><a href="sms_autre.php" onClick=window.open('','popup','width=550,height=300,scrollbars=0') target=popup><font color="#0066FF"><img src="../images/france.gif" width="15" height="8" border="0" align="absmiddle"> Ajoute ici un n&deg; fran&ccedil;ais</font></a></strong><br />
                                  <img src="sms/sms_histo.gif" width="15" height="8" align="absmiddle"> <a href="#histo"><strong><font color="#0066FF">Voir l'historique de tes SMS envoy&eacute;s</font></strong></a><br />
                                     <img src="sms/sms_help.gif" width="15" height="8" align="absmiddle"> <b><a href="sms_aide.php"><font color="#0066FF">Aide et foire aux questions</font></a></b> 
                                       </p>
                                      
                                  </td>
				</tr>
 </table>











					
                        <?php include('footer.php');?>
</body>
</html>
