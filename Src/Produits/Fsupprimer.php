
<?php
	
	$id_ma=$_GET['id_ma'];
	$nom_ma=$_GET['nom_ma'];
	$unite=$_GET['unite'];
	$prix_ma=$_GET['prix_ma'];	
	
	include'liste.php';


			/* ---------Debut Fsupprimer.php-------- */

	
	echo '<div id="content">';
	echo'<form action="liste.php" method="POST">';
	echo'<input type="hidden" name="mas" value="S"/>';
	echo'<input type="hidden" name="id_ma" value="'.$id_ma.'">';
	
	echo '<div id="sform"><div id="sform2">
	<div id="sheader" class="titrecform">Suppression</div><br/><br/><br/><br/><br/>
		 <p class="textcen" >Voulez vous supprimer la matière  '.$nom_ma.'
		  <b class="crouge"> don le prix est  '.$prix_ma.'<sup>F</sup>?</b></p>
	
	 <div id="sfooter">';
	if($_SESSION['utilisateur']=='Identifie') { 		 
	echo' <input type="submit" name="valider" value="Oui" class="bvalid">
			<input type="submit" name="validerr" value="Non" class="bannul"></div></div></div>';
	} 		 
	echo '</form>';
	echo '</div>';
			/* -------Fin Fsupprimer.php------------- */

?>


