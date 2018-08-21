

<?php

	/*---------Debut  Liste.php-------*/
		
	
	include'produit.php';

		
		
		/*--------Debut Pajouter.php----------*/

	echo '<div id="contright">';
	
	echo '<div id="cform"><div id="cform2">
		  <div id="cheader"><h2 class="titrecform">Ajout un nouveau produit </h2></div><br/><br/><br/>';
	echo'	<form action="produit.php" method="post">';
	echo'<input type="hidden" name="mas" value="A"/>';
	echo '<table cellpadding="3" class="w95">';
	
	echo'	<tr><td class="textinput">Nom produit</td><td><input type="text" name="nom_pro" class="labinput"></td></tr>';
	echo'	<tr><td class="textinput">Quantité</td><td><input type="text" name="qte_pro" class="labinput"></td></tr>';
	
	echo '</table>';
	
	echo '<div id="cfooter" class="droite butcform">
	
	<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
	<input type="submit" name="annuler" value="Annuler"  class="bannul"></div></div></div>';			
	
	echo '</form>';
	echo '</div>';
	include'../../Layout/footer.php';
	
	/*---------Fin Pajouter.php------*/
	
	
?>


