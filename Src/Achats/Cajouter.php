
<?php

   $id_ac=$_GET['id_ac'];
   //$id_pro=$_GET['id_pro'];
   //$nom_pro=$_GET['nom_pro'];
   //$qte_pro=$_GET['qte_pro'];
   $libele=$_GET['libele'];
   	include'contenuac.php';
	/*-----Debut Cajouter.php------------*/
  include'CRUD.php';

	echo '<div id="contvert2">';
	echo '<div id="cform"><div id="cform2">  <div id="cheader">
	     <h2 class="titrecform">Ajout des contenus à l\'achat	</h2></div><br/><br/><br/>';
	echo' <form action="contenuac.php" method="POST">';
	echo' <input type="hidden" name="mas" value="CA"/>';
	echo' <input type="hidden" name="id_ac" value="'.$id_ac.'"/>';
	echo' <input type="hidden" name="libele" value="'.$libele.'"/>';
	echo '<table cellpadding="3" class="w95">';
	//Composant Liste déroulante prosuits

	echo '<tr><td class="textinput">Nom produit</td><td><select name="id_pro" class="labinput">';
	while ($ligne=pg_fetch_assoc($lpro)) {
	echo '<option value="'.$ligne['id_pro'].' '.$ligne['nom_pro'].'"></option>';
  }

  echo'	<tr><td class="textinput">Prix achat</td><td><input type="text" name="prix_achat" class="labinput"></td></tr>';

	echo'	<tr><td class="textinput">Quantité</td><td><input type="text" name="qte_pro" class="labinput"></td></tr>';
	echo '</table>';
	echo '<div id="cfooter" class="textdro">';
		if($_SESSION['utilisateur']=='Identifie') {
	echo'<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
		   <input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';
	}
  	echo '</form>';
	echo '</div>';
	include'../../Layout/footer.php';

		/*-----Fin Fajouter.php------------*/

?>
