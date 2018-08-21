
 <?php
 
   $id_ac=$_GET['id_ac'];
   $id_cac=$_GET['id_cac'];  
  	$id_ma=$_GET['id_ma'];
  	$qte_ma=$_GET['qte_ma'];
	

	include'contenuac.php';
	
		/*-----Debut Cmodifier.php------------*/	
		
	echo '<div id="contvert2">';
	echo '<div id="mform"><div id="mform2"><div id="mheader" class="textcen">
		<h2 class="titrecform">Modification du contenu</h2></div><br/><br/><br/>';
	
	echo'<form action="contenuac.php" method="POST">';
	echo'<input type="hidden" name="mas" value="CM"/>';
	echo'<input type="hidden" name="id_ac" value="'.$id_ac.'">';
	echo'<input type="hidden" name="id_ma" value="'.$id_ma.'">';
	echo'<input type="hidden" name="qte_ma_orig" value="'.$qte_ma.'">';
	echo'<input type="hidden" name="id_cac" value="'.$id_cac.'">';
	
	echo '<table cellpadding="3" class="w95">';
	
	echo'	<tr><td class="textinput">Quantité matière</td><td>
		<input type="text" name="qte_ma" value="'.$qte_ma.'" class="labinput"></td></tr>';
				
	echo '</table>';
	echo '<div id="mfooter" class="droite">';
	if($_SESSION['utilisateur']=='Identifie') {
	echo'<input type="submit" name="valider" value="Valider" class="bvalid">&nbsp;&nbsp;
	 	  <input type="submit" name="valider" value="Annuler"class="bannul" ></div></div></div>';
   }   	
	echo '</form>';
	echo '</div>';
	include'../../Layout/footer.php';
	
		/*-----Fin  Fmodifier.php------------*/	
	
?>
 