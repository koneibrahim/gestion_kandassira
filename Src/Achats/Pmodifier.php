
 <?php
  	$id_ac=$_GET['id_ac'];
   $id_pay=$_GET['id_pay'];
	$date_pay=$_GET['date_pay'];
	$montant=$_GET['montant'];
	$libele=$_GET['libele'];
	
	include'payement.php';
	
			/*-----Debut Pmodifier.php------------*/	
		
	echo '<div id="contvert2">';
	echo '<div id="mform"><div id="mform2"><div id="mheader" class="textcen">
		<h2 class="titrecform">Modification du payement</h2></div><br/><br/><br/>';
	
	echo'	<form action="payement.php" method="post">';
	echo'<input type="hidden" name="mas" value="PM"/>';
	echo'<input type="hidden" name="id_pay" value="'.$id_pay.'">';
	echo'<input type="hidden" name="id_ac" value="'.$id_ac.'">';
		echo'<input type="hidden" name="montant_orig" value="'.$montant.'">';
	echo '<table cellpadding="3" class="w95">';
	
	echo'	<tr><td class="textinput">Date</td><td>
		<input type="text" name="date_pay" value="'.date('Y-m-d').'" class="labinput"></td></tr>';

echo'	<tr><td class="textinput">Montant</td><td>
		<input type="text" name="montant" value="'.$montant.'" class="labinput"></td></tr>';
		
	/*echo '<tr><td class="textinput">Libele</td><td><select name="id_ac" class="labinput">';
	while ($ligne=pg_fetch_assoc($pachat)) {
	echo '<option value="'.$ligne['id_ac'].'"> '.$ligne['libele'].' '.$ligne['date_ac'].'</option>';
	}	*/	
		
	echo '</table>';
	echo '<div id="mfooter" class="textdro  butcform"> 
	<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
	<input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';			
	
	echo '</form>';
	echo '</div>';
	include'../../Layout/footer.php';
	

		/*-----Fin  Pmodifier.php------------*/	
	
?>


