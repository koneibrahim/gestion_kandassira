<?php

	$id_ac=$_GET['id_ac'];
	$libele=$_GET['libele'];
	$date_pay=$_GET['date_pay'];
	$somme=$_GET['somme'];
	$agent=$_GET['agent'];
	include'payement.php';
	/*-----Debut Pajouter.php------------*/
	echo '<div id="contvert2">';
	echo '<div id="cform"><div id="cform2">
		  <div id="cheader"><h2 class="titrecform"> Faire un nouveau payement	</h2></div><br/><br/><br/>';
	echo'	<form action="payement.php" method="POST">';
				echo'<input type="hidden" name="mas" value="PA"/>';
				echo'<input type="hidden" name="id_ac" value="'.$id_ac.'"/>';
				echo '<table cellpadding="3" class="w95">';
				echo'<tr><td class="textinput"> Date payement </td>
					  	 <td><input type="text" name="date_pay" class="labinput" value="'.date('Y-m-d').'"></td></tr>';
				echo'<tr><td class="textinput"> Somme </td>
						 <td><input type="text" name="somme" class="labinput"></td></tr>';
				echo'<tr><td class="textinput"> Agent </td>
						 <td><input type="text" name="agent" class="labinput"></td></tr>';
				echo'<tr><td class="textinput"> Achat </td>
						 <td><select name="id_ac" class="labinput">';
				while ($ligne=pg_fetch_assoc($pachat)) {
				echo '<option value="'.$ligne['id_ac'].' '.$ligne['date_ac'].'"> '.$ligne['libele'].' '.$ligne['date_ac'].'</option>';
				}
				echo '</table>';
				echo '<div id="cfooter" class="textdro">
				<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
				<input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';
  	echo '</form>';
	echo '</div>';
	include'../../Layout/footer.php';
		/*-----Fin Pajouter.php------------*/
?>
