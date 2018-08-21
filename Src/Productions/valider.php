

<?php

	$id_prod=$_GET['id_prod'];
 	$date_prod=$_GET['date_prod'];
	$libele=$_GET['libele'];
 	$qte=$_GET['qte'];
 	$etat=$_GET['etat'];

	/*-------Debut Fvalider.php----------*/
		
	include'production.php';
		
	echo '<div id="content">';
	echo'<form action="production.php" method="post">';
	echo'<input type="hidden" name="mas" value="V"/>';
	echo'<input type="hidden" name="id_prod" value="'.$id_prod.'">';

	echo '<div id="vform"><div id="vform2"><div id="vheader" class="titrecform">
	Validation</div><br/><br/><br/>
	
		 <p class="textcen" >Voulez vous valider la production
		  <b class="crouge">'.$date_prod.' '.$libele.'?</b></p>';
		  
	echo'<div id="sfooter">';
	
	echo'<input type="submit" name="valider" value="Oui" class="bvalid">';
	echo'<input type="submit" name="valider" value="Non" class="bannul">';
	echo'</div></div></div>';
	echo'</form>';
	echo '</div>';
	include'../../Layout/footer.php';
	
	
	/*-------Fin Fvalider.php----------*/
?>
