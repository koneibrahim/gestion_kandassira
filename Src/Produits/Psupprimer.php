	
	
<?php
	 	
	$id_pro=$_GET['id_pro'];
	$nom_pro=$_GET['nom_pro'];
	$qte_pro=$_GET['qte_pro'];
	
	include'produit.php';

					
			/*-------Debut Fsupprimer.php----------*/
			
			
	echo '<div id="contleft">';
	
	echo'<form action="produit.php" method="post">';
	echo'<input type="hidden" name="mas" value="S"/>';
	echo'<input type="hidden" name="id_pro" value="'.$id_pro.'">';

	echo '<div id="sform"><div id="sform2"><div id="sheader" class="titrecform">Suppression</div><br/><br/><br/><br/><br/>
		 <p class="textcen" >Voulez vous supprimer le produit 
		 <b class="crouge">'.$nom_pro.' de quantité '.$qte_pro.'  ?</b></p>
	
	 <div id="sfooter">
		 		 
		 		 <input type="submit" name="valider" value="Oui" class="bvalid">
		 		 <input type="submit" name="valider" value="Non" class="bannul"></div></div></div>';
		 		 
	echo '</form>';
	echo '</div>';
			/*-------Fin Fsupprimer.php----------*/
?>

