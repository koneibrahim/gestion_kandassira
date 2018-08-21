
<?php
 
   $id_ma=$_GET['id_ma'];
	$nom_ma=$_GET['nom_ma'];
	$unite=$_GET['unite'];
	$prix_ma=$_GET['prix_ma'];
	
	
	include'liste.php';

	
		/*-----Debut Fmodifier.php------------*/	
		
	echo '<div id="content">';
	echo '<div id="mform"><div id="mform2"><div id="mheader" class="textcen">
		<h2 class="titrecform">Modification  matière</h2></div><br/><br/><br/>';
	
	echo'	<form action="liste.php" method="POST">';
	echo'<input type="hidden" name="mas" value="M"/>';
	echo'<input type="hidden" name="id_ma" value="'.$id_ma.'">';
	
	echo '<table cellpadding="3" class="w95">';
	
	echo'	<tr><td class="textinput">Nom</td><td>
		<input type="text" name="nom_ma" value="'.$nom_ma.'" class="labinput"></td></tr>';

echo'	<tr><td class="textinput">Unité</td><td>
		<input type="text" name="unite" value="'.$unite.'" class="labinput"></td></tr>';
		
	echo'	<tr><td class="textinput">Prix matière</td><td>
		<input type="text" name="prix_ma" value="'.$prix_ma.'" class="labinput"></td></tr>';
		
	echo '</table>';
	
	echo '<div id="mfooter" class="droite">';
	if($_SESSION['utilisateur']=='Identifie') {
	echo'<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
	<input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';						
   }
	echo '</form>';
	echo '</div>';
	include'../../Layout/footer.php';
	
		/*-----Fin  Fmodifier.php------------*/	
	
?>

