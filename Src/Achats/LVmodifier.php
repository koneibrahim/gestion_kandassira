
 <?php

	$id_ac=$_GET['id_ac'];
   $id_liv=$_GET['id_liv'];
   $date_liv=$_GET['date_liv'];
   $libele=$_GET['libele']; 
   
  include'listeliv.php';

		/*-----Debut Lmodifier.php------------*/	
		
	echo '<div id="contliv2">';
	echo '<div id="mform"><div id="mform2"><div id="mheader" class="textcen">
		<h2 class="titrecform">Modification du livraison </h2></div><br/><br/><br/>';
	echo'	<form action="livraison.php" method="post">';
	echo'<input type="hidden" name="mas" value="LVM"/>';
	
	echo'<input type="hidden" name="id_ac" value="'.$id_ac.'"/>';
	echo'<input type="hidden" name="id_liv" value="'.$id_liv.'"/>';	
	echo '<table cellpadding="3" class="w95">';
	
	echo'	<tr><td class="textinput">Date livraison</td><td>
		<input type="text" name="date_liv" value="'.$date_liv.'" class="labinput"></td></tr>';

	echo'	<tr><td class="textinput">Libele</td><td>
		<input type="text" name="libele" value="'.$libele.'" class="labinput"></td></tr>';
				
	
	echo '</table>';
	
	echo '<div id="mfooter" class="droite">';
	if($_SESSION['utilisateur']=='Identifie') {
	echo'<input type="submit" name="valider" value="Valider" class="bvalid">&nbsp;&nbsp;
		  <input type="submit" name="valider" value="Annuler" class="bannul" ></div></div></div>';
   	}
	echo '</form>';
	echo '</div>';
	include'../../Layout/footer.php';
	
	
		/*-----Fin  Lmodifier.php------------*/	
	
?>

 