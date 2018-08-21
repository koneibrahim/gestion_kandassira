<?php
	$id_pro=$_GET['id_pro'];
	$nom_pro=$_GET['nom_pro'];
	$id_ma=$_GET['id_ma'];
	$nom_ma=$_GET['nom_ma'];
	$qte_compo=$_GET['qte_compo'];
	/*------Debut Cmodifier.php-----------*/
	include'composant.php';
		echo '<div id="contright">';
				echo '<div id="mform"><div id="mform2"><div id="mheader" class="textcen">
					<h2 class="titrecform">Modification du composant </h2></div><br/><br/><br/>';
						echo'<form action="composant.php" method="post">';
							echo'<input type="hidden" name="mas" value="CM"/>';
							echo'<input type="hidden" name="id_ma" value="'.$id_ma.'">';
						  echo'<input type="hidden" name="id_pro" value="'.$id_pro.'">';
							echo'<input type="hidden" name="nom_pro" value="'.$nom_pro.'">';
							echo'<table cellpadding="3" class="w95">';
								echo'<tr><td class="textinput">Nom composant</td><td>
										 <input type="text" name="nom_ma" value="'.$nom_ma.'" class="labinput"></td></tr>';
									echo'<tr><td class="textinput">Quantité</td><td>
										  <input type="text" name="qte_compo" value="'.$qte_compo.'" class="labinput"></td></tr>';
							echo'</table>';
							echo'<div id="mfooter" class="textdro">
									<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
									<input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';
					  	echo '</form>';
	echo '</div>';
	include'../../Layout/footer.php';

		/*------Fin Cmodifier.php-----------*/
?>
