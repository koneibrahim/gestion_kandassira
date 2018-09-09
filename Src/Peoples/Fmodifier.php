<?php

	$id_po=$_GET['id_po'];
	$id_cat=$_GET['id_cat'];
	$nom=$_GET['nom'];
	$prenom=$_GET['prenom'];
	$tel=$_GET['tel'];
	$tel2=$_GET['tel2'];
	$nom_f=$_GET['nom_f'];
	$prenom_f=$_GET['prenom_f'];
	$adresse=$_GET['adresse'];

	include'liste.php';
		/*--------Debut Fmodifier.php---*/
	echo '<div id="content">';
				echo '<div id="kform"><div id="kform2"><div id="kheader" class="textcen">
					<h2 class="titrecform">Modification  personnel </h2></div><br/><br/><br/>';
				echo'	<form action="liste.php" method="post">';
				echo'<input type="hidden" name="mas" value="M"/>';
				echo'<input type="hidden" name="id_po" value="'.$id_po.'">';
				echo '<table cellpadding="5" class="w95">';

				echo'	<tr><td class="textinput">Nom </td><td>
						<input type="text" name="nom" value="'.$nom.'" class="labinput"></td></tr>';
				echo'	<tr><td class="textinput">Prénom </td><td>
						<input type="text" name="prenom" value="'.$prenom.'" class="labinput"></td></tr>';

						echo '<tr><td class="textinput">Categorie</td><td><select name="id_cat" class="labinput">';
						while ($ligne=pg_fetch_assoc($lcategorie)) {
						echo '<option value="'.$ligne['id_cat'].'">'.$ligne['nom_cat'].'</option>';
						}
				echo'	<tr><td class="textinput">Téléphone 1</td><td>
						<input type="text" name="tel" value="'.$tel.'" class="labinput"></td></tr>';
			  echo'	<tr><td class="textinput">Téléphone 2</td><td>
						<input type="text" name="tel2" value="'.$tel2.'" class="labinput"></td></tr>';
				echo'	<tr><td class="textinput">Nom mari(e)</td><td>
							<input type="text" name="nom_f" value="'.$nom_f.'" class="labinput"></td></tr>';
				echo'	<tr><td class="textinput">Prenom mari(e)</td><td>
							<input type="text" name="prenom_f" value="'.$prenom_f.'" class="labinput"></td></tr>';
				echo'	<tr><td class="textinput">Adresse</td><td>
						<input type="text" name="adresse" value="'.$adresse.'" class="labinput"></td></tr>';
				echo '</table>';
				echo '<div id="kfooter">';
					if($_SESSION['utilisateur']=='Identifie') {
					echo'<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
						   <input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';
					}
				echo '</form>';
	echo '</div>';
	include'../../Layout/footer.php';
?>
