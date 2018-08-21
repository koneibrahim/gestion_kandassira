 <?php
 
 	$id_ac=$_GET['id_ac'];
	$id_cac=$_GET['id_cac'];
   $id_ma=$_GET['id_ma'];
   $qte_ma=$_GET['qte_ma'];
   $nom_ma=$_GET['nom_ma'];

	include'contenuac.php';
	
	 		
				/*------------Debut Amodifier.php-------------*/
				
	echo'<div id="contvert2">';
		
	echo'<form action="contenuac.php" method="POST">';
	echo'<input type="hidden" name="mas" value="CS"/>';
	echo'<input type="hidden" name="id_ac" value="'.$id_ac.'">';
	echo'<input type="hidden" name="id_ma" value="'.$id_ma.'">';
	echo'<input type="hidden" name="qte_ma" value="'.$qte_ma.'">';
	echo'<input type="hidden" name="id_cac" value="'.$id_cac.'">';
	
	echo '<div id="sform"><div id="sform2"><div id="sheader" class="titrecform">Suppression</div><br/><br/><br/><br/><br/>
		 <p class="textcen" >Voulez vous supprimer la mattière  
		  <b class="crouge">'.$nom_ma.' du contenu l\'achat  ?</b></p>
		  
		 		 <div id="sfooter">';
		 		 		if($_SESSION['utilisateur']=='Identifie') {
		 		echo'<input type="submit" name="valider" value="Oui" class="bvalid">
		 		     <input type="submit" name="valider" value="Non" class="bannul"></div></div></div>';
		 		 }
	echo '</form>';
	echo '</div>';

	
	
					/*------------Fin Amodifier.php-------------*/
?>


