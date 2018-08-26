<?php

	$id_p=$_GET['id_p'];
	$nom_p=$_GET['nom_p'];
	$prenom_p=$_GET['prenom_p'];
	$fonction=$_GET['fonction'];
	$tel=$_GET['tel'];
	$adresse=$_GET['adresse'];

	include'liste.php';
		/*--------Debut Fmodifier.php---*/
	echo '<div id="content">';
				echo '<div id="mform"><div id="mform2"><div id="mheader" class="textcen">
					<h2 class="titrecform">Modification  personnel </h2></div><br/><br/><br/>';
				echo'	<form action="liste.php" method="post">';
				echo'<input type="hidden" name="mas" value="M"/>';
				echo'<input type="hidden" name="id_p" value="'.$id_p.'">';
				echo '<table cellpadding="5" class="w95">';
				echo'	<tr><td class="textinput">Nom </td><td>
						<input type="text" name="nom_p" value="'.$nom_p.'" class="labinput"></td></tr>';
				echo'	<tr><td class="textinput">Nom personnel</td><td>
						<input type="text" name="prenom_p" value="'.$prenom_p.'" class="labinput"></td></tr>';
				echo'	<tr><td class="textinput">Fonction</td><td>
								<input type="text" name="fonction" value="'.$fonction.'" class="labinput"></td></tr>';
				echo'	<tr><td class="textinput">Téléphone</td><td>
						<input type="text" name="tel" value="'.$tel.'" class="labinput"></td></tr>';
				echo'	<tr><td class="textinput">Adresse</td><td>
						<input type="text" name="adresse" value="'.$adresse.'" class="labinput"></td></tr>';
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
