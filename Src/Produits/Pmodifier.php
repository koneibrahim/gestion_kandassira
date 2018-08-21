

<?php
	
	
	$id_pro=$_GET['id_pro'];
	$nom_pro=$_GET['nom_pro'];
	$qte_pro=$_GET['qte_pro'];
	
	include'produit.php';

					
		
				/*------Debut Pmodifier.php------*/
	
	echo '<div id="contleft">';
		
	echo '<div id="mform"><div id="mform2"><div id="mheader" class="textcen">
		<h2 class="titrecform">Modification  produit</h2></div><br/><br/><br/>';
	
	echo'	<form action="produit.php" method="post">';
	echo'<input type="hidden" name="mas" value="M"/>';
	echo'<input type="hidden" name="id_pro_orig" value="'.$id_pro.'">';
	
	echo '<table cellpadding="3" class="w95">';
	
	echo'	<tr><td class="textinput">Nom produit</td><td>
		<input type="text" name="nom_pro" value="'.$nom_pro.'" class="labinput"></td></tr>';
		
	echo'	<tr><td class="textinput">Quantité</td><td>
		<input type="text" name="qte_pro" value="'.$qte_pro.'" class="labinput"></td></tr>';
		
	echo '</table>';
	echo '<div id="mfooter" class="droite">

	<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
	<input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';			
	
	echo '</form>';
	echo '</div>';
	include'../../Layout/footer.php';
	
					/*------ Fin du fichier Pmodifier.php-------- */
?>



