<?php

	$id_pres=$_GET['id_pres'];
	$nom_pres=$_GET['nom_pres'];
	$prix=$_GET['prix'];

	include'liste.php';
		/*--------Debut Fmodifier.php---*/
	echo '<div id="content">';
				echo '<div id="mform"><div id="mform2"><div id="mheader" class="textcen">
					<h2 class="titrecform">Modification  prestation </h2></div><br/><br/><br/>';
				echo'	<form action="liste.php" method="post">';
				echo'<input type="hidden" name="mas" value="M"/>';
				echo'<input type="hidden" name="id_pres" value="'.$id_pres.'">';
				echo '<table cellpadding="5" class="w95">';
				echo'	<tr><td class="textinput">Nom </td><td>
							<input type="text" name="nom_pres" value="'.$nom_pres.'" class="labinput"></td></tr>';
				echo'	<tr><td class="textinput">Prix</td><td>
							<input type="text" name="prix" value="'.$prix.'" class="labinput"></td></tr>';

				echo '</table>';
				echo '<div id="mfooter">';
					if($_SESSION['utilisateur']=='Identifie') {
					echo'<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
						   <input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';
					}
				echo '</form>';
	echo '</div>';
	include'../../Layout/footer.php';
?>
