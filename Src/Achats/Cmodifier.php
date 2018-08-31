
 <?php

 $id_ac=$_GET['id_ac'];
 $id_cac=$_GET['id_cac'];
 $id_pro=$_GET['id_pro'];
 $prix_acha=$_GET['prix_acha'];
 $qte_pro=$_GET['qte_pro'];
 $libele=$_GET['libele'];

	include'contenuac.php';

		/*-----Debut Cmodifier.php------------*/

	echo '<div id="contvert2">';
	echo '<div id="mform"><div id="mform2"><div id="mheader" class="textcen">
		<h2 class="titrecform">Modification du contenu</h2></div><br/><br/><br/>';

	echo'<form action="contenuac.php" method="POST">';
	echo'<input type="hidden" name="mas" value="CM"/>';
	echo'<input type="hidden" name="id_ac" value="'.$id_ac.'">';
  echo'<input type="hidden" name="id_cac" value="'.$id_cac.'">';
  echo'<input type="hidden" name="id_pro" value="'.$id_pro.'">';
	//echo'<input type="hidden" name="qte_pro_orig" value="'.$qte_pro.'">';

	echo '<table cellpadding="3" class="w95">';

  echo '<tr><td class="textinput"> Produit </td><td><select name="id_pro" class="labinput">';
  while ($ligne=pg_fetch_assoc($lproduit)) {
  echo '<option value="'.$ligne['id_pro'].'">'.$ligne['nom_pro'].'</option>';
  }

  echo'	<tr><td class="textinput"> Prix achat produit </td>
            <td><input type="text" name="prix_acha" value="'.$prix_acha.'" class="labinput"></td></tr>';

  echo'	<tr><td class="textinput"> Quantité produit </td>
            <td><input type="text" name="qte_pro" value="'.$qte_pro.'" class="labinput"></td></tr>';

	echo '</table>';
	echo '<div id="mfooter" class="droite">';
	if($_SESSION['utilisateur']=='Identifie') {
	echo'<input type="submit" name="valider" value="Valider" class="bvalid">&nbsp;&nbsp;
	 	  <input type="submit" name="valider" value="Annuler"class="bannul" ></div></div></div>';
   }
	echo '</form>';
	echo '</div>';
	include'../../Layout/footer.php';

		/*-----Fin  Fmodifier.php------------*/

?>
