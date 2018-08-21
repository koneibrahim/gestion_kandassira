
<?php

   $id_ac=$_GET['id_ac'];
   $libele=$_GET['libele'];
   	include'contenuac.php';
	/*-----Debut Cajouter.php------------*/

	echo '<div id="contvert2">';
	echo '<div id="cform"><div id="cform2">  <div id="cheader">
	     <h2 class="titrecform">Ajout d\'un contenu	</h2></div><br/><br/><br/>';
	echo' <form action="contenuac.php" method="POST">';
	echo' <input type="hidden" name="mas" value="CA"/>';
	echo' <input type="hidden" name="id_ac" value="'.$id_ac.'"/>';
	echo' <input type="hidden" name="libele" value="'.$libele.'"/>';
	echo '<table cellpadding="3" class="w95">';
	//Composant Liste déroulante matières
	echo '<tr><td class="textinput">Nom</td><td><select name="id_ma" class="labinput">';
	while ($ligne=pg_fetch_assoc($ajouter)) {
	echo '<option value="'.$ligne['id_ma'].'">'.$ligne['nom_ma'].'</option>';
	}
	echo'	<tr><td class="textinput">Quantité</td><td><input type="text" name="qte_ma" class="labinput"></td></tr>';
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
