<?php


	include'liste.php';

		/*--------Debut Fajouter.php---*/

	echo '<div id="content">';
	echo '<div id="kform"><div id="kform2">
		  <div id="kheader" class="textcen"><h2 class="titrecform">Ajout nouvelle personne </h2></div><br/><br/><br/>';
	echo'	<form action="liste.php" method="post">';
	echo'<input type="hidden" name="mas" value="A"/>';
	echo'<table cellpadding="3" class="w95" >';

	echo'<tr><td class="textinput">Nom</td><td><input type="text" name="nom" class="labinput"
				class="butmenu2" title="'.$ligne['nom'].'	'.$ligne['nom'].'">Champ obligatoire</td></tr>';

	echo'	<tr><td class="textinput">Prénom</td> 	 <td><input type="text" name="prenom" class="labinput"
	class="butmenu2" title="'.$ligne['prenom'].'	'.$ligne['prenom'].'">Champ obligatoire</td></tr>';

	echo '<tr><td class="textinput">Categorie personne</td><td><select name="id_cat" class="labinput">';
	while ($ligne=pg_fetch_assoc($lcategorie)) {
	echo '<option value="'.$ligne['id_cat'].'">'.$ligne['nom_cat'].'</option>';
	}

	echo'	<tr><td class="textinput">Poste</td>  <td><input type="text" name="poste" class="labinput"></td></tr>';
	echo'	<tr><td class="textinput">Téléphone 1</td> <td><input type="text" name="tel" class="labinput"></td></tr>';
	echo'	<tr><td class="textinput">Téléphone 2</td> <td><input type="text" name="tel2" class="labinput"></td></tr>';
	echo'	<tr><td class="textinput">Adresse</td>     <td><input type="text" name="adresse" class="labinput"></td></tr>';
	echo'	<tr><td class="textinput">Nom Mari(e)</td>  <td><input type="text" name="nom_f" class="labinput"></td></tr>';
	echo'	<tr><td class="textinput">Prenom Mari(e)</td> <td><input type="text" name="prenom_f" class="labinput"></td></tr>';
	echo'	<tr><td class="textinput">Date</td>    <td><input type="text" name="date" class="labinput"></td></tr>';


	echo '</table>';
	echo '<div id="kfooter" class="textdro  butcform">';
		if($_SESSION['utilisateur']=='Identifie') {

		echo'<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
				 <input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';
   	}
	echo '</form>';
	echo '</div>';
	include'../../Layout/footer.php';

		/*----------Fin Fajouter.php------------*/
?>
