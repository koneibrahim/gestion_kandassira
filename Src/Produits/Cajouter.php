<?php
	$id_pro=$_GET['id_pro'];
	$nom_pro=$_GET['nom_pro'];
	$id_ma=$_GET['id_ma'];

	include'composant.php';
			/*------Debut Cajouter.php----*/
	echo'<div id="contright">';
				echo'<div id="cform"><div id="cform2">
					  <div id="cheader"><h2 class="titrecform">Ajout un nouveau composant </h2></div><br/><br/><br/>';
			  	echo'	<form action="composant.php" method="post">';
							echo'<input type="hidden" name="mas" value="CA"/>';
							echo'<input type="hidden" name="id_pro" value="'.$id_pro.'">';
							echo'<input type="hidden" name="nom_pro" value="'.$nom_pro.'">';
							echo'<table cellpadding="3" class="w95">';
									//Composant Liste déroulante matières
									echo'<tr><td class="textinput"">Nom composant</td><td><select name="id_ma" class="labinput">';
									while ($ligne=pg_fetch_assoc($ajouter)) {
									echo'<option value="'.$ligne['id_ma'].'">'.$ligne['nom_ma'].'</option>';
									}
									echo'</select></td></tr>';
								  echo'<tr><td class="textinput">Quantité</td><td><input type="text" name="qte_compo" class="labinput"></td></tr>';
							echo'</table>';
									echo'<div id="cfooter" class="textdro">
											<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
											<input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';
				 	echo'</form>';
	  echo'</div>';
	include'../../Layout/footer.php';
				/*-------Fin Cajouter.php--------*/
?>
