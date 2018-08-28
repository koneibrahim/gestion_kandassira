
<?php

	$id_pro=$_GET['id_pro'];
	$nom_pro=$_GET['nom_pro'];
	$prix_vente=$_GET['prix_vente'];
	$id_catpro=$_GET['id_catpro'];

	include'liste.php';

	/*-----Debut Fajouter.php------------*/

	echo '<div id="content">';

	echo '<div id="cform"><div id="cform2">
	 <div id="cheader"><h2 class="titrecform">Ajout Nouvelle matière</h2></div><br/><br/><br/>';
	echo'	<form action="liste.php" method="POST">';
	echo'<input type="hidden" name="mas" value="A"/>';
	echo '<table cellpadding="3" class="w95">';

	echo'	<tr><td class="textinput">Nom produit</td>
				<td><input type="text" name="nom_pro" class="labinput"></td></tr>';
	echo'	<tr><td class="textinput">Prix vente</td>
				<td><input type="text" name="prix_vente" class="labinput"></td></tr>';

				echo '<tr><td class="textinput">Categorie produit</td><td><select name="id_catpro" class="labinput">';
				while ($ligne=pg_fetch_assoc($lcatpro)) {
				echo '<option value="'.$ligne['id_catpro'].'">'.$ligne['nom_catpro'].'</option>';
				}

	echo '</table>';

	echo '<div id="cfooter" class="textdro">';
	if($_SESSION['utilisateur']=='Identifie') {
	echo'<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
		  <input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';
				}
  	echo '</form>';
	echo '</div>';
	include'../../Layout/footer.php';

		/*-----Fin Fajouter.php------------*/

?>
