<?php

	/*-------Debut  Liste.php----------*/
	$id_prod=$_GET['id_prod'];
	$id_cprod=$_GET['id_cprod'];
 	$date_prod=$_GET['date_prod'];
	$libele=$_GET['libele'];
 	$qte=$_GET['qte'];

	include'production.php';
	

	
	/*-------Debut Fsupprimer.php----------*/
		
			
	echo '<div id="content">';
	echo'<form action="liste.php" method="post">';
	echo'<input type="hidden" name="mas" value="S"/>';
	echo'<input type="hidden" name="id_prod" value="'.$id_prod.'">';

	echo '<div id="sform"><div id="sform2"><div id="sheader" class="titrecform">Suppression</div><br/><br/><br/><br/><br/>
		 <p class="textcen" >Voulez vous supprimer la production'.$date_prod.'
		  <b class="crouge">'.$libele.' '.$qte.'?</b></p>
	
	<div id="sfooter">
		 		 
		 		 <input type="submit" name="valider" value="Oui" class="bvalid">
		 		 <input type="submit" name="valider" value="Non" class="bannul"></div></div></div>';
		 		 
	echo '</form>';
	echo '</div>';	
	
			/*-------Fin Fsupprimer.php----------*/
?>
