<?php

	$id_p=$_GET['id_p'];
	$nom_p=$_GET['nom_p'];
	$fonction=$_GET['fonction'];
	$tel=$_GET['tel'];
	$adresse=$_GET['adresse'];
	include'liste.php';
		/* ---------Debut Fsupprimer.php-------- */
	echo '<div id="content">';
				echo'<form action="liste.php" method="post">';
							echo'<input type="hidden" name="mas" value="S"/>';
							echo'<input type="hidden" name="id_p" value="'.$id_p.'">';
							echo '<div id="sform"><div id="sform2"><div id="sheader" class="titrecform">Suppression</div><br/><br/><br/>
								 <p class="textcen" >Voulez vous supprimer le personnel
								  <b class="crouge">'.$nom_p.' '.$fonction.'?</b></p>

							 <div id="sfooter">';
							echo'<input type="submit" name="valider" value="Oui" class="bvalid">
								 	 <input type="submit" name="valider" value="Non" class="bannul"></div></div></div>';
				echo '</form>';
	echo '</div>';

			/* -------Fin Fsupprimer.php------------- */

?>
