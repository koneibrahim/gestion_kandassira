<?php

	$id_fo=$_GET['id_fo'];
	$nom_fo=$_GET['nom_fo'];
	$telephone=$_GET['telephone'];
	$addresse=$_GET['addresse'];

	include'liste.php';
		/*--------Debut Fmodifier.php---*/
	echo '<div id="content">';
				echo '<div id="mform"><div id="mform2"><div id="mheader" class="textcen">
					<h2 class="titrecform">Modification  fournisseur</h2></div><br/><br/><br/>';
				echo'	<form action="liste.php" method="post">';
				echo'<input type="hidden" name="mas" value="M"/>';
				echo'<input type="hidden" name="id_fo" value="'.$id_fo.'">';
				echo '<table cellpadding="5" class="w95">';
				echo'	<tr><td class="textinput">Nom fournisseur</td><td>
					<input type="text" name="nom_fo" value="'.$nom_fo.'" class="labinput"></td></tr>';
				echo'	<tr><td class="textinput">Téléphone</td><td>
					<input type="text" name="telephone" value="'.$telephone.'" class="labinput"></td></tr>';
				echo'	<tr><td class="textinput">Adresse</td><td>
					<input type="text" name="addresse" value="'.$addresse.'" class="labinput"></td></tr>';
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
