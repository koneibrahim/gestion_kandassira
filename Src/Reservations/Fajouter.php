<?php

	include'liste.php';

		/*--------Debut Fajouter.php---*/

				echo '<div id="content">';

				echo '<div id="cform"><div id="cform2">
					  <div id="cheader"><h2 class="titrecform">Faire une reservation </h2></div><br/><br/><br/>';
				echo'<form action="liste.php" method="post">';
				echo'<input type="hidden" name="mas" value="A"/>';
				echo'<table cellpadding="3" class="w95" >';

				echo'	<tr><td class="textinput">Date reservation</td>
							<td><input type="text" name="date_res" class="labinput" value="'.date('Y-m-d').'"></td></tr>';

				echo'	<tr><td class="textinput">Libele</td>
							<td><input type="text" name="libele" class="labinput"></td></tr>';

				echo '<tr><td class="textinput">Client</td><td><select name="id_cli" class="labinput">';
				while ($ligne=pg_fetch_assoc($lclient)) {
				echo '<option value="'.$ligne['id_cli'].'">'.$ligne['nom_cli'].'</option>';
				}
				echo '<tr><td class="textinput">Prestations</td><td><select name="id_pres" class="labinput">';
				while ($ligne=pg_fetch_assoc($lprestation)) {
				echo '<option value="'.$ligne['id_pres'].'">'.$ligne['nom_pres'].'</option>';
				}
				echo'	<tr><td class="textinput">Date travail</td>
							<td><input type="text" name="date" class="labinput"></td></tr>';

				echo'	<tr><td class="textinput">Lieu</td>
							<td><input type="text" name="lieu" class="labinput"></td></tr>';

				echo '<tr><td class="textinput">Personnels</td><td><select name="id_p" class="labinput">';
			  while ($ligne=pg_fetch_assoc($lpersonnel)) {
				echo '<option value="'.$ligne['id_p'].'">'.$ligne['nom_p'].'</option>';
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
