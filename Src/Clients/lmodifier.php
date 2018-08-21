<?php
	$id_cli=$_GET['id_cli'];
	$nom_cli=$_GET['nom_cli'];
	$pre_cli=$_GET['pre_cli'];
	$tel=$_GET['tel'];
	$tel2=$_GET['tel2'];
	$adresse_cli=$_GET['adresse_cli'];
  	include 'liste.php';

		/*--------Debut Fmodifier.php---*/
		echo '<div id="content">';
		echo '<div id="cform"><div id="cform2">
				  <div id="cheader" class="textcen"><h2 class="titrecform"> Modification client </h2></div><br/><br/><br/>';
			echo'	<form action="liste.php" method="post">';
		        	echo'<input type="hidden" name="mas" value="LM"/>';
		        	echo'<input type="hidden" name="id_cli" value="'.$id_cli.'">';
        		  echo'<table cellpadding="5" class="w95">';
							   	echo'<tr><td class="textinput">Nom </td><td>
				        		  	<input type="text" name="nom_cli" value="'.$nom_cli.'" class="labinput"></td></tr>';
										echo'<tr><td class="textinput">Prénom </td><td>
						        		  <input type="text" name="pre_cli" value="'.$pre_cli.'" class="labinput"></td></tr>';
				        		echo'<tr><td class="textinput">Téléphone</td><td>
				        		  		<input type="text" name="tel" value="'.$tel.'" class="labinput"></td></tr>';
										echo'<tr><td class="textinput">Téléphone 2</td><td>
						        		  <input type="text" name="tel2" value="'.$tel2.'" class="labinput"></td></tr>';
				        	 echo'<tr><td class="textinput">Adresse</td><td>
				        		  		<input type="text" name="adresse_cli" value="'.$adresse_cli.'" class="labinput"></td></tr>';

        	  echo'</table>';
        	echo'<div id="cfooter">';
    		echo'<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
    			   <input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';
    	echo'</form>';
	 echo'</div>';
	include'../../Layout/footer.php';
?>
