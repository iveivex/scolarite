<?php
// Testons si le fichier a bien �t� envoy� et s'il n'y a pas d'erreur
if (isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0)
{
// Testons si le fichier n'est pas trop gros
if ($_FILES['photo']['size'] <= 1000000)
{
// Testons si l'extension est autoris�e
$infosfichier = pathinfo($_FILES['photo']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
if (in_array($extension_upload, $extensions_autorisees))
{
}
}
}
?>