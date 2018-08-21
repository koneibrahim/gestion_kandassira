<?php

	$id_fo=$_GET['id_fo'];
	$nom_fo=$_GET['nom_fo'];
	$telephone=$_GET['telephone'];
	$addresse=$_GET['addresse'];
	include'liste.php';
		/* ---------Debut Fsupprimer.php-------- */
	echo '<div id="content">';
				echo'<form action="liste.php" method="post">';
							echo'<input type="hidden" name="mas" value="S"/>';
							echo'<input type="hidden" name="id_fo" value="'.$id_fo.'">';
							echo '<div id="sform"><div id="sform2"><div id="sheader" class="titrecform">Suppression</div><br/><br/><br/><br/><br/>
								 <p class="textcen" >Voulez vous supprimer le fournisseur
								  <b class="crouge">'.$nom_fo.' '.$addresse.'?</b></p>

							 <div id="sfooter">';
							echo'<input type="submit" name="valider" value="Oui" class="bvalid">
								 	 <input type="submit" name="valider" value="Non" class="bannul"></div></div></div>';
				echo '</form>';
	echo '</div>';

			/* -------Fin Fsupprimer.php------------- */

?>
