
<?php

	$id_ac=$_GET['id_ac'];
	$date_ac=$_GET['date_ac'];
	$libele=$_GET['libele'];
	$etat=$_GET['etat'];

	include'achat.php';
	include'CRUD.php';

			/* ---------Debut Valider.php-------- */

	echo '<div id="menuvert">';

	echo'<form action="achat.php" method="post">';
	echo'<input type="hidden" name="mas" value="V"/>';
	echo '<input type="hidden" name="id_ac" value="'.$id_ac.'">';
	echo '<div id="vform"><div id="vform2"><div id="vheader" class="titrecform">Validation</div><br/><br/><br/>
		 <p class="textcen" >Voulez vous valider l\'achat du
		 <b class="crouge">'.$date_ac.' '.$libele.'?</b></p>';
	echo'<div id="sfooter">';

	echo'<input type="submit" name="valider" value="Oui" class="bvalid">';
	echo'<input type="submit" name="valider" value="Non" class="bannul">';
	echo'</div></div></div>';
	echo'</form>';
	echo '</div>';
	include'../../Layout/footer.php';

			/* -------Fin Fsupprimer.php------------- */
?>
