
<?php
   
   $id_ac=$_GET['id_ac'];
   $id_liv=$_GET['id_liv'];
   $date_liv=$_GET['date_liv'];
  
  include'livraison.php';
  		
	echo '<div id="contliv2">';
	
	echo'<form action="listeliv.php" method="post">';
	echo'<input type="hidden" name="mas" value="LVS"/>';
	echo'<input type="hidden" name="id_ac" value="'.$id_ac.'"/>';
	echo'<input type="hidden" name="id_liv" value="'.$id_liv.'"/>';
	
	echo '<div id="sform"><div id="sform2"><div id="sheader" class="titrecform">
			Suppression</div><br/><br/><br/>
		 <p class="textcen" >Voulez vous supprimer livraison du
		  <b class="crouge">'.$date_liv.'  ?</b></p>
		  
		 		 <div id="sfooter">';
		 		 
		 		echo'<input type="submit" name="valider" value="Oui" class="bvalid">
		 		 <input type="submit" name="valider" value="Non" class="bannul"></div></div></div>';
		 		}
	echo '</form>';
	echo '</div>';
	
		/*-----Fin  Lmodifier.php------------*/	
	
?>

 


