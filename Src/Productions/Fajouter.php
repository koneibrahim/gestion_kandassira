
<?php

   include 'liste.php';

	/*----Debut Fajouter.php----*/

	echo '<div id="content">';

	echo '<div id="cform"><div id="cform2">
		  <div id="cheader"><h2 class="titrecform">Ajout nouvelle production </h2></div><br/><br/><br/>';
	echo'	<form action="production.php" method="post">';
	echo'<input type="hidden" name="mas" value="A"/>';
	echo '<table cellpadding="3"class="w95" >';

	echo'	<tr><td class="textinput">Date</td><td><input type="text" name="date_prod" class="labinput" value="'.date('Y-m-d').'"></td></tr>';
	echo'	<tr><td class="textinput">Libele</td><td><input type="text" name="libele" class="labinput"></td></tr>';

	echo '<tr><td class="textinput">Nom du produit</td><td><select name="id_pro" class="labinput">';
	while ($ligne=pg_fetch_assoc($lproduit)) {
	echo '<option value="'.$ligne['id_pro'].'">'.$ligne['nom_pro'].' ('.$ligne['qte_pro'].')</option>';
	}
	echo'	<tr><td class="textinput">Quatité</td><td><input type="text" name="qte" class="labinput"></td></tr>';

	echo '</table>';
	echo '<div id="cfooter" class="textdro">

	<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
	<input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';

  	echo '</form>';
	echo '</div>';
	include'../../Layout/footer.php';

		/*----Fin Fajouter.php----*/

?>
