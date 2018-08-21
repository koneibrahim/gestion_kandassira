
 <?php
   $id_liv=$_GET['id_liv'];
   $id_cac=$_GET['id_cac'];
   $id_ac=$_GET['id_ac'];
   $id_ma=$_GET['id_ma'];
   $id_cliv=$_GET['id_cliv'];
   $qte_l=$_GET['qte_l'];
 
  include'livraison.php';
   
	
	
		/*-----Debut Lmodifier.php------------*/	
		
	echo '<div id="contliv2">';
	echo '<div id="mform"><div id="mform2"><div id="mheader" class="textcen">
		<h2 class="titrecform">Modification du contenu</h2></div><br/><br/><br/>';
	echo'	<form action="livraison.php" method="post">';
	echo'<input type="hidden" name="mas" value="LM"/>';
	echo'<input type="hidden" name="id_liv" value="'.$id_liv.'"/>';
	echo'<input type="hidden" name="id_ac" value="'.$id_ac.'"/>';
	echo'<input type="hidden" name="id_cac" value="'.$id_cac.'"/>';
	echo'<input type="hidden" name="id_ma" value="'.$id_ma.'"/>';
	echo'<input type="hidden" name="id_cliv" value="'.$id_cliv.'"/>';
	echo'<input type="hidden" name="qte_l_orig" value="'.$qte_l.'"/>';
	echo '<table cellpadding="3" class="w95">';
	
		
	echo'	<tr><td class="textinput">Quantité livrée</td><td>
		<input type="text" name="qte_l" value="'.$qte_l.'" class="labinput"></td></tr>';
			
	echo '</table>';
	
	echo '<div id="mfooter" class="droite">

	<input type="submit" name="valider" value="Valider" class="bvalid">&nbsp;&nbsp;
	<input type="submit" name="valider" value="Annuler" class="bannul" ></div></div></div>';
   	
	echo '</form>';
	echo '</div>';
	include'../../Layout/footer.php';
	
	
		/*-----Fin  Lmodifier.php------------*/	
	
?>

 