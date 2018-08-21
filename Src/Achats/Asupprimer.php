 <?php
 
	$id_ac=$_GET['id_ac'];
	$date_ac=$_GET['date_ac'];
	$libele=$_GET['libele'];
	$id_fo=$_GET['id_fo'];
	
	
	include'achat.php';
	
	 		
				/*------------Debut Amodifier.php-------------*/
				
	echo'<div id="contvert">';
		
	echo'<form action="achat.php" method="post">';
	echo'<input type="hidden" name="mas" value="AS"/>';
	echo'<input type="hidden" name="id_ac" value="'.$id_ac.'">';
	
	echo '<div id="sform"><div id="sform2"><div id="sheader" class="titrecform">Suppression</div><br/><br/><br/><br/><br/>
		 <p class="textcen" >Voulez vous supprimer l\'achat du
		  <b class="crouge">'.$date_ac.' de  '.$libele.'?</b></p>
		  
		 		 <div id="sfooter">';
		 		 if($_SESSION['utilisateur']=='Identifie') { 		 
		 		 echo'<input type="submit" name="valider" value="Oui" class="bvalid">
		 		 		<input type="submit" name="valider" value="Non" class="bannul"></div></div></div>';
		 		 }
	echo '</form>';
	echo '</div>';

		
					/*------------Fin Amodifier.php-------------*/
?>


