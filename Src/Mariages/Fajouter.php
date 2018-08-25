<?php


	include'liste.php';

		/*--------Debut Fajouter.php---*/

	echo '<div id="content">';
	echo '<div id="kform"><div id="kform2">
		  	<div id="kheader" class="textcen"><h2 class="titrecform">Ajout nouveau marié</h2></div><br/><br/><br/>';
	echo'	<form action="liste.php" method="post">';
		echo'<input type="hidden" name="mas" value="A"/>';
		echo'<fieldset>';
			  echo '<table cellpadding="3" class="w95">';
					echo'<legend>Homme</legend>';
							echo'	<tr><td class="textinput">Nom mari</td>
							  		<td><input type="text" name="nom_m" class="labinput"></td></tr>';
							echo'	<tr><td class="textinput">Prénom mari</td>
										<td><input type="text" name="prenom_m" class="labinput"></td></tr>';
							echo'	<tr><td class="textinput">Contact</td>      <td><input type="text" name="contact" class="labinput"></td></tr>';
				echo '</table>';
			echo'</fieldset>';

								echo '<br/>';
					echo'<fieldset>';
						echo'<legend>Femme</legend>';
									echo '<table cellpadding="3" class="w95" >';
									echo'	<tr><td class="textinput">Nom mari(e)</td>
											 	<td><input type="text" name="nom_f" class="labinput"></td></tr>';
									echo'	<tr><td class="textinput">Prénom mari</td>
												<td><input type="text" name="prenom_f" class="labinput"></td></tr>';
									echo'	<tr><td class="textinput">Adresse</td>
											 <td><input type="text" name="adresse" class="labinput"></td></tr>';
							    echo '</table>';
					echo'</fieldset>';

			echo '<div id="kfooter" class="textdro">';
			if($_SESSION['utilisateur']=='Identifie') {
			echo'<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
					 <input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';
				 }

	echo '</form>';
	echo '</div>';
	include'../../Layout/footer.php';

		/*----------Fin Fajouter.php------------*/
?>
