<?php
  $id_ve=$_GET['id_ve'];
  // $id_cve=$_GET['id_cve'];
//  $id_pro=$_GET['id_pro'];
//  $nom_pro=$_GET['nom_pro'];
  // $qte_v=$_GET['qte_v'];
 $libele=$_GET['libele'];
   //$date_ve=$_GET['date_ve'];
      	include'contenuve.php';
      	/*-----Debut Cajouter.php------------*/
    echo '<div id="contvert2">';
          	echo '<div id="cform"><div id="cform2">  <div id="cheader">
          	<h2 class="titrecform">Ajout d\'un contenu </h2></div><br/><br/><br/>';
          	echo' <form action="contenuve.php" method="POST">';
          	echo' <input type="hidden" name="mas" value="CVA"/>';
          	echo' <input type="hidden" name="id_ve" value="'.$id_ve.'"/>';
            echo' <input type="hidden" name="libele" value="'.$libele.'"/>';
        //    echo' <input type="hidden" name="id_pro" value="'.$id_pro.'"/>';
          //  echo' <input type="hidden" name="id_cve" value="'.$id_cve.'"/>';
          	echo '<table cellpadding="3" class="w95">';
          	//Composant Liste déroulante des produits
          	echo '<tr><td class="textinput">Nom</td><td><select name="id_pro" class="labinput">';
          	while ($ligne=pg_fetch_assoc($lproduit)) {
          	echo '<option value="'.$ligne['id_pro'].'">'.$ligne['nom_pro'].'</option>';
          	}
          	echo'	<tr><td class="textinput">Prix</td><td><input type="text" name="qte_v" class="labinput"></td></tr>';
            echo'	<tr><td class="textinput">Quantité</td><td><input type="text" name="prix" class="labinput"></td></tr>';
          	echo '</table>';
          	echo '<div id="cfooter" class="textdro">';
          	echo'<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
          		   <input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';
            	echo '</form>';
              echo '</div>';
      	include'../../Layout/footer.php';

      		/*-----Fin Fajouter.php------------*/
?>
