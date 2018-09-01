<?php

      $id_cve=$_GET['id_cve'];
      $id_ve=$_GET['id_ve'];
      $id_pro=$_GET['id_pro'];
      $qte_v=$_GET['qte_v'];
      $date_ve=$_GET['date_ve'];
      $libele=$_GET['libele'];

      	include'contenuve.php';
      	/*-----Debut CVajouter.php------------*/

    echo'<div id="contvert2">';
          	echo'<div id="cform"><div id="cform2">  <div id="cheader">
          	<h2 class="titrecform">Ajout d\'un contenu </h2></div><br/><br/><br/>';
          	echo' <form action="contenuve.php" method="POST">';
          	echo' <input type="hidden" name="mas" value="CVA"/>';
          	echo' <input type="hidden" name="id_ve" value="'.$id_ve.'"/>';
            echo' <input type="hidden" name="libele" value="'.$libele'"/>';
          	echo '<table cellpadding="3" class="w95">';
          	// Liste déroulante des produits
          	echo '<tr><td class="textinput"> Nom produit </td><td><select name="id_pro" class="labinput">';
          	while ($ligne=pg_fetch_assoc($lproduit)) {
          	echo '<option value="'.$ligne['id_pro'].'">'.$ligne['nom_pro'].'</option>';
          	}

            echo '<tr><td class="textinput"> Prix vente </td><td><select name="id_pres" class="labinput">';
            while ($ligne=pg_fetch_assoc($lprestation)) {
            echo '<option value="'.$ligne['id_pres'].'">'.$ligne['nom_pres'].'</option>';
            }
            echo '</table>';
          	echo '<div id="cfooter" class="textdro">';
          	echo'<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
          		  <input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';
            	echo '</form>';
          	echo '</div>';
      include'../../Layout/footer.php';
?>
