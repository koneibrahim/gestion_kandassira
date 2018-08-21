 <?php
 
	$id_ac=$_GET['id_ac'];
	$date_ac=$_GET['date_ac'];
	$libele=$_GET['libele'];
	$id_fo=$_GET['id_fo'];
	$montant=$_GET['montant'];
	$montant_paye=$_GET['montant_paye'];
	$etat_liv=$_GET['etat_liv'];
	
	include'achat.php';

	
	 		
				/*------------Debut Amodifier.php-------------*/
				
	echo'<div id="contvert">';
		
	echo'<div id="mform"><div id="mform2"><div id="mheader" class="textcen">
		<h2 class="titrecform">Modification achat</h2></div><br/><br/><br/>';
	
	echo'<form action="achat.php" method="post">';
	echo'<input type="hidden" name="mas" value="AM"/>';
	echo'<input type="hidden" name="id_ac" value="'.$id_ac.'">';
	
	echo'<table cellpadding="3" class="w95">';
	
	echo'<tr><td class="textinput">Date</td><td>
		<input type="text" name="date_ac" value="'.$date_ac.'" class="labinput"></td></tr>';
		
	echo'<tr><td class="textinput">Libele</td><td>
		<input type="text" name="libele" value="'.$libele.'" class="labinput"></td></tr>';

echo '<tr><td class="textinput">Fournisseur</td><td><select name="id_fo" class="labinput">';
	while ($ligne=pg_fetch_assoc($lfournisseur)) {
		if($id_fo==$ligne['id_fo']) 
	echo '<option value="'.$ligne['id_fo'].'"selected>'.$ligne['nom_fo'].'</option>';
	else 
	
		echo '<option value="'.$ligne['id_fo'].'">'.$ligne['nom_fo'].'</option>';
	}	
	
	echo'<tr><td class="textinput">Etat livrasion</td><td>
		<input type="text" name="etat_liv" value="'.$etat_liv.'" class="labinput"></td></tr>';
	echo '</table>';
	
	echo '<div id="mfooter" class="droite">';
	if($_SESSION['utilisateur']=='Identifie') {
	echo'<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
	<input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';			
  	}
	echo '</form>';
	echo '</div>';

	
	
					/*------------Fin Amodifier.php-------------*/
?>


