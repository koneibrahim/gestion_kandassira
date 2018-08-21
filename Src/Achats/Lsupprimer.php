
 <?php
   
   $id_ac=$_GET['id_ac'];
   $id_cliv=$_GET['id_cliv'];
   $qte_l=$_GET['qte_l'];
  
  include'livraison.php';
  		
	echo '<div id="contliv2">';
	echo'<form action="livraison.php" method="post">';
	echo'<input type="hidden" name="mas" value="LS"/>';
	echo'<input type="hidden" name="id_ac" value="'.$id_ac.'"/>';
	echo'<input type="hidden" name="id_cliv" value="'.$id_cliv.'"/>';
	
	echo '<div id="sform"><div id="sform2"><div id="sheader" class="titrecform">Suppression</div><br/><br/><br/><br/><br/>
		 <p class="textcen" >Voulez vous supprimer le contenu de livraison
		  <b class="crouge">'.$qte_l.'  ?</b></p>
		  
		 		 <div id="sfooter">
		 		 
		 		 <input type="submit" name="valider" value="Oui" class="bvalid">
		 		 <input type="submit" name="valider" value="Non" class="bannul"></div></div></div>';
		 		 
	echo '</form>';
	echo '</div>';
	
		/*-----Fin  Lmodifier.php------------*/	
	
?>

 


