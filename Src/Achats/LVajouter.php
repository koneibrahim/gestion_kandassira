 
 <?php
 
 
   $id_ac=$_GET['id_ac'];
 	

   include'listeliv.php';

		
		/*----------- Debut Lajouter.php----------- */
		
	echo '<div id="contliv2">';
	
	echo '<div id="cform"><div id="cform2">
		  <div id="cheader"><h2 class="titrecform">Faire une livraison</h2></div><br/><br/><br/>';
	echo'	<form action="listeliv.php" method="post">';
	echo'<input type="hidden" name="mas" value="LVA"/>';
	echo'<input type="hidden" name="id_ac" value="'.$id_ac.'"/>';
	echo '<table cellpadding="3" class="w95">';
	
	echo'	<tr><td class="textinput">Date livraison</td>
			<td><input type="text" name="date_liv" class="labinput" value="'.date('Y-m-d').'"></td></tr>';

	echo'	<tr><td class="textinput">Libele</td>
			<td><input type="text" name="libele" class="labinput"></td></tr>';
	
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



