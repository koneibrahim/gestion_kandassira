
 <?php

   $id_ac=$_GET['id_ac'];
   $date_ac=$_GET['date_ac'];
   $libele=$_GET['libele'];
   $id_fo=$_GET['id_fo'];
   $etat_liv=$_GET['etat_liv'];

	include 'listeac.php';


		/*----------- Debut Aajouter.php----------- */

	echo '<div id="content">';

	echo '<div id="cform"><div id="cform2">
		  <div id="cheader"><h2 class="titrecform">Faire un achat</h2></div><br/><br/><br/>';
	echo'<form action="listeac.php" method="post">';
	echo'<input type="hidden" name="mas" value="AA"/>';
	echo'<table cellpadding="3" class="w95" >';

	echo'	<tr><td class="textinput">Date</td>
	<td><input type="text" name="date_ac" class="labinput" value="'.date('Y-m-d').'"></td></tr>';

	echo'	<tr><td class="textinput">Libele</td>
	<td><input type="text" name="libele" class="labinput"></td></tr>';

	echo '<tr><td class="textinput">Fournisseur</td><td><select name="id_fo" class="labinput">';
	while ($ligne=pg_fetch_assoc($lfournisseur)) {
	echo '<option value="'.$ligne['id_fo'].'">'.$ligne['nom_fo'].'</option>';
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

			/*------Fin Aajouter.php----------- */
?>
