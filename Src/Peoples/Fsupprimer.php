<?php

	$id_po=$_GET['id_po'];
	$nom=$_GET['nom'];
	$prenom=$_GET['prenom'];
	$adresse=$_GET['adresse'];
	include'liste.php';
		/* ---------Debut Fsupprimer.php-------- */
	echo '<div id="content">';
				echo'<form action="liste.php" method="post">';
							echo'<input type="hidden" name="mas" value="S"/>';
							echo'<input type="hidden" name="id_po" value="'.$id_po.'">';
							echo '<div id="sform"><div id="sform2"><div id="sheader" class="titrecform">Suppression</div><br/><br/><br/>
								 <p class="textcen" >Voulez vous supprimer la personne
								  <b class="crouge">'.$nom.' '.$prenom.' '.$tel.' ?</b></p>

							 <div id="sfooter">';
							echo'<input type="submit" name="valider" value="Oui" class="bvalid">
								 	 <input type="submit" name="valider" value="Non" class="bannul"></div></div></div>';
				echo '</form>';
	echo '</div>';

			/* -------Fin Fsupprimer.php------------- */

?>
