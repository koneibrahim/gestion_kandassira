	
<?php	

	$id_prod=$_GET['id_prod'];
 	$date_prod=$_GET['date_prod'];
	$libele=$_GET['libele'];
 	$qte=$_GET['qte'];
 	
 	
	include'production.php';
	
	
						/*----Debut  Fmodifier.php------------*/
				
	echo '<div id="content">';
	
	echo '<div id="mform"><div id="mform2"><div id="mheader" class="textcen">
		<h2 class="titrecform">Modification de la production</h2></div><br/><br/><br/>';
	
	echo'	<form action="production.php" method="post">';
	echo'<input type="hidden" name="mas" value="M"/>';
	echo'<input type="hidden" name="id_prod" value="'.$id_prod.'">';
	echo '<table cellpadding="3" class="w95">';
	
	echo'	<tr><td class="textinput">Date de production</td><td>
		<input type="text" name="date_prod" value="'.$date_prod.'" class="labinput"></td></tr>';
		
	echo'	<tr><td class="textinput">Libele</td><td>
		<input type="text" name="nom_ma" value="'.$libele.'" class="labinput"></td></tr>';
		
	echo'	<tr><td class="textinput">Quantité</td><td>
		<input type="text" name="qte" value="'.$qte.'" class="labinput"></td></tr>';
		
	echo '</table>';
	
	echo '<div id="mfooter" class="droite">

	<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
	<input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';			
	   	
	echo '</form>';
	echo '</div>';
	include'../../Layout/footer.php';
	
	
				/*----Fin  Fmodifier.php------------*/
?>




