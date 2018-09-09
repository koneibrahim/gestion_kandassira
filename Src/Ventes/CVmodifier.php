
 <?php

   $id_cve=$_GET['id_cve'];
   $id_ve=$_GET['id_ve'];
   $id_pro=$_GET['id_pro'];
   $prix_v=$_GET['prix_v'];
   $qte_v=$_GET['qte_v'];
   $date_ve=$_GET['date_ve'];
   $libele=$_GET['libele'];
   include'contenuve.php';

		/*-----Debut CVmodifier.php------------*/

    	echo '<div id="contvert2">';
    	echo '<div id="mform"><div id="mform2"><div id="mheader" class="textcen">
    		<h2 class="titrecform">Modification du contenu</h2></div><br/><br/><br/>';

    	echo'<form action="contenuve.php" method="POST">';
    	echo'<input type="hidden" name="mas" value="CVM"/>';
    	echo'<input type="hidden" name="id_ac" value="'.$id_ac.'">';
      echo'<input type="hidden" name="id_cac" value="'.$id_cac.'">';
    //  echo'<input type="hidden" name="id_pro" value="'.$id_pro.'">';
    	echo '<table cellpadding="3" class="w95">';
      echo '<tr><td class="textinput"> Produit </td><td><select name="id_pro" class="labinput">';
      while ($ligne=pg_fetch_assoc($lproduit)) {
      echo '<option value="'.$ligne['id_pro'].'">'.$ligne['nom_pro'].'</option>';
      }
      echo'	<tr><td class="textinput"> Prix </td>
                <td><input type="text" name="prix_v" value="'.$prix_v.'" class="labinput"></td></tr>';
      echo'	<tr><td class="textinput"> Quantité vendu </td>
                <td><input type="text" name="qte_v" value="'.$qte_v.'" class="labinput"></td></tr>';

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
