<?php

	$id_pres=$_GET['id_pres'];
	$nom_pres=$_GET['nom_pres'];
	$prix=$_GET['prix'];
	include'liste.php';
		/* ---------Debut Fsupprimer.php-------- */
	echo '<div id="content">';
				echo'<form action="liste.php" method="post">';
							echo'<input type="hidden" name="mas" value="S"/>';
							echo'<input type="hidden" name="id_pres" value="'.$id_pres.'">';
							echo '<div id="sform"><div id="sform2"><div id="sheader" class="titrecform">Suppression</div><br/><br/><br/>
								  <p class="textcen" >Voulez vous supprimer la prestation
								  <b class="crouge">'.$nom_pres.' '.$prix.'?</b></p>

							 <div id="sfooter">';
							echo'<input type="submit" name="valider" value="Oui" class="bvalid">
								 	 <input type="submit" name="valider" value="Non" class="bannul"></div></div></div>';
				echo '</form>';
	echo '</div>';

			/* -------Fin Fsupprimer.php------------- */

?>
