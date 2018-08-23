<?php

$id_m=$_GET['id_m'];
$nom_m=$_GET['nom_m'];
$prenom_m=$_GET['prenom_m'];
//$contact=$_GET['contact'];
$nom_f=$_GET['nom_f'];
$prenom_f=$_GET['prenom_f'];
$adresse=$_GET['adresse'];

	include'liste.php';
		/* ---------Debut Fsupprimer.php-------- */
	echo '<div id="content">';
				echo'<form action="liste.php" method="post">';
							echo'<input type="hidden" name="mas" value="S"/>';
							echo'<input type="hidden" name="id_m" value="'.$id_m.'">';
							echo '<div id="sform"><div id="sform2"><div id="sheader" class="titrecform">Suppression</div><br/><br/><br/>
								 <p class="textcen" >Voulez vous supprimer le mari
								  <b class="crouge">'.$nom_m.'  '.$prenom_m.' & son mari(e) '.$nom_f.' '.$prenom_f.'?</b></p>

							 <div id="sfooter">';
							echo'<input type="submit" name="valider" value="Oui" class="bvalid">
								 	 <input type="submit" name="valider" value="Non" class="bannul"></div></div></div>';
				echo '</form>';
	echo '</div>';

			/* -------Fin Fsupprimer.php------------- */

?>
