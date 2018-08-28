
<?php

	$id_pro=$_GET['id_pro'];
	$nom_pro=$_GET['nom_pro'];
	$prix_vente=$_GET['prix_vente'];

	include'liste.php';

			/* ---------Debut Fsupprimer.php-------- */


	echo '<div id="content">';
	echo'<form action="liste.php" method="POST">';
	echo'<input type="hidden" name="mas" value="S"/>';
	echo'<input type="hidden" name="id_pro" value="'.$id_pro.'">';

	echo '<div id="sform"><div id="sform2">
	<div id="sheader" class="titrecform">Suppression</div><br/><br/><br/><br/><br/>
		 <p class="textcen" >Voulez vous supprimer le produit  '.$nom_pro.'
		  <b class="crouge"> don le prix est  '.$prix_vente.'<sup>F</sup>?</b></p>

	 <div id="sfooter">';
	if($_SESSION['utilisateur']=='Identifie') {
	echo' <input type="submit" name="valider" value="Oui" class="bvalid">
			<input type="submit" name="validerr" value="Non" class="bannul"></div></div></div>';
	}
	echo '</form>';
	echo '</div>';
			/* -------Fin Fsupprimer.php------------- */

?>
