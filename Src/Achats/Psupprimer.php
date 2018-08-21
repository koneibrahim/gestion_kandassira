<?php
 
 	$id_ac=$_GET['id_ac'];
	$id_pay=$_GET['id_pay'];
	$date_pay=$_POST['date_pay'];
	$libele=$_POST['libele'];
	
	
	include'payement.php';
	
	 		
				/*------------Debut Amodifier.php-------------*/
				
	echo'<div id="contvert2">';
		
	echo'<form action="payement.php" method="post">';
	echo'<input type="hidden" name="mas" value="CS"/>';
	echo'<input type="hidden" name="id_pay" value="'.$id_pay.'">';
	echo'<input type="hidden" name="id_ac" value="'.$id_ac.'">';
	
	echo '<div id="sform"><div id="sform2"><div id="sheader" class="titrecform">Suppression</div><br/><br/><br/><br/><br/>
		 <p class="textcen" >Voulez vous supprimer le payement du 
		  <b class="crouge">'.$date_pay.'?</b></p>
		  
		 		 <div id="sfooter">
		 		 
		 		 <input type="submit" name="valider" value="Oui" class="bvalid">
		 		 <input type="submit" name="valider" value="Non" class="bannul"></div></div></div>';
		 		 
	echo '</form>';
	echo '</div>';
		
					/*------------Fin Amodifier.php-------------*/
?>


