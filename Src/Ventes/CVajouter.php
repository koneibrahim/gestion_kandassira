<?php
    $id_ve=$_GET['id_ve'];
    $libele=$_GET['libele'];

      	include'contenuve.php';
      	/*-----Debut Cajouter.php------------*/
    echo '<div id="contvert2">';
          	echo '<div id="cform"><div id="cform2">  <div id="cheader">
          	<h2 class="titrecform">Ajout d\'un contenu </h2></div><br/><br/><br/>';
          	echo' <form action="contenuve.php" method="POST">';
          	echo' <input type="hidden" name="mas" value="CVA"/>';
          	echo' <input type="hidden" name="id_ve" value="'.$id_ve.'"/>';
            echo' <input type="hidden" name="libele" value="'.$libele.'"/>';
          	echo '<table cellpadding="3" class="w95">';
          	// Liste déroulante des articles
          	echo '<tr><td class="textinput">Nom article</td><td><select name="id_ma" class="labinput">';
          	while ($ligne=pg_fetch_assoc($larticle)) {
          	echo '<option value="'.$ligne['id_ma'].'">'.$ligne['nom_ma'].'</option>';
          	}

            // Liste déroulante des prestations
            echo '<tr><td class="textinput">Nom prestation</td><td><select name="id_pres" class="labinput">';
            while ($ligne=pg_fetch_assoc($lprestation)) {
            echo '<option value="'.$ligne['id_pres'].'">'.$ligne['nom_pres'].'</option>';
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
