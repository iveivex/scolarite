<style>
.secteuroff { font-weight: bold; }
.rubriqueoff { font-weight: normal; }
.secteuron, .rubriqueon { font-weight: bold; color: #ff9999; }
.secteur, .rubrique { font-weight: bold; color: #ff3333; }
</style>
<?php
if(floor(phpversion()) < 4)	{
	// La version de PHP est inf�rieure � 4,
	// la fonction in_array n'existe donc pas
	function in_array($member, $array)
	{
		reset($array);
		while (list($k, $v) = each($array)) {
			if ($v == $member) return true;
		}
		return false;
	}
}

// r�cup�ration de la hi�rarchie courante
$hierarchie = array();
/*<BOUCLE_principale(RUBRIQUES){id_rubrique}>
	<BOUCLE_hierarchie(HIERARCHIE){id_rubrique}>
		$hierarchie[] = #ID_RUBRIQUE;
	</BOUCLE_hierarchie>
	$hierarchie[] = #ID_RUBRIQUE;
	$actuelle = #ID_RUBRIQUE;
</BOUCLE_principale>
*/
// inclusion du script de gestion des layers de SPIP
$flag_ecrire = false;
include 'ecrire/inc_layer.php3';
afficher_script_layer();
?>
<table border="0" cellpadding="2" cellspacing="0">
<BOUCLE_secteurs(RUBRIQUES){id_parent=0}{par titre}>
	<?php $id = #ID_RUBRIQUE; ?>
	<BOUCLE_nb_rubriques(RUBRIQUES){id_parent}><?php ${'nb'.$id} = #TOTAL_BOUCLE; ?></BOUCLE_nb_rubriques>
	<tr>
		<td valign="top">
			<?php
			if ($nb#ID_RUBRIQUE > 0) {
				if (in_array(#ID_RUBRIQUE, $hierarchie)) {
					echo bouton_block_visible('rub#ID_RUBRIQUE');
				} else {
					echo bouton_block_invisible('rub#ID_RUBRIQUE');
				}
			} else {
				echo '&nbsp;';
			}
			?>
		</td>
		<td valign="top">
			<a href="#URL_RUBRIQUE" class="secteur<?php echo (#ID_RUBRIQUE == $actuelle ? '' : (in_array(#ID_RUBRIQUE, $hierarchie) ? 'on' : 'off')); ?>" >[(#TITRE|supprimer_numero)]</a>
			<?php
			if ($nb#ID_RUBRIQUE > 0) {
				if (in_array(#ID_RUBRIQUE, $hierarchie)) {
					echo debut_block_visible('rub#ID_RUBRIQUE');
				} else {
					echo debut_block_invisible('rub#ID_RUBRIQUE');
				}
				?>
				<table border="0" cellpadding="2" cellspacing="0">
				<BOUCLE_rubriques(RUBRIQUES){id_parent}{par titre}>
					<?php $id = #ID_RUBRIQUE; ?>
					<BOUCLE_nb_sous_rubriques(RUBRIQUES){id_parent}><?php ${'nb'.$id} = #TOTAL_BOUCLE; ?></BOUCLE_nb_sous_rubriques>
					<tr>
						<td valign="top">
							<?php
							if ($nb#ID_RUBRIQUE > 0) {
								if (in_array(#ID_RUBRIQUE, $hierarchie)) {
									echo bouton_block_visible('rub#ID_RUBRIQUE');
								} else {
									echo bouton_block_invisible('rub#ID_RUBRIQUE');
								}
							} else {
								echo '<img src="img_pack/puce'.(#ID_RUBRIQUE == $actuelle ? 'on' : 'off').'.gif" />';
							}
							?>
						</td>
						<td valign="top">
							<a href="#URL_RUBRIQUE" class="rubrique<?php echo (#ID_RUBRIQUE == $actuelle ? '' : (in_array(#ID_RUBRIQUE, $hierarchie) ? 'on' : 'off')); ?>" >[(#TITRE|supprimer_numero)]</a>
							<?php
							if ($nb#ID_RUBRIQUE > 0) {
								if (in_array(#ID_RUBRIQUE, $hierarchie)) {
									echo debut_block_visible('rub#ID_RUBRIQUE');
								} else {
									echo debut_block_invisible('rub#ID_RUBRIQUE');
								}
								?>
								<table border="0" cellpadding="2" cellspacing="0"><BOUCLE_sous_rubriques(BOUCLE_rubriques)></BOUCLE_sous_rubriques></table>
								<?php
								echo fin_block('rub#ID_RUBRIQUE');
							}
							?>
						</td>
					</tr>
					<?php
					echo fin_block('rub#ID_RUBRIQUE');
					?>
				</BOUCLE_rubriques>
				</table>
			<?php
			}
			?>
		</td>
	</tr>
</BOUCLE_secteurs>
</table>
