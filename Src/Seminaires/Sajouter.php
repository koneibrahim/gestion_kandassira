
 <?php

   $id_s=$_GET['id_s'];
   $libele=$_GET['libele'];
   $date=$_GET['date'];
   $heure=$_GET['heure'];
   $lieu=$_GET['lieu'];
	  include'liste.php';

		/*----------- Debut Aajouter.php----------- */

	echo '<div id="content">';

      	echo '<div id="cform"><div id="cform2">
      		  <div id="cheader"><h2 class="titrecform"> Ajouter un seminaire </h2></div><br/><br/><br/>';
      	echo'<form action="liste.php" method="post">';
      	echo'<input type="hidden" name="mas" value="SA"/>';
      	echo'<table cellpadding="3" class="w95" >';

        echo'	<tr><td class="textinput">Libele</td>
              <td><input type="text" name="libele" class="labinput"></td></tr>';

      	echo'	<tr><td class="textinput">Date</td>
      	      <td><input type="text" name="date" class="labinput" value="'.date('Y-m-d').'"></td></tr>';

        echo'	<tr><td class="textinput">Heure</td>
                    <td><input type="text" name="heure" class="labinput"></td></tr>';

        echo'	<tr><td class="textinput">Lieu</td>
              <td><input type="text" name="lieu" class="labinput"></td></tr>';

      	echo '</table>';

      	echo '<div id="cfooter" class="textdro">';
      		if($_SESSION['utilisateur']=='Identifie') {
      	echo'<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
      			 <input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';
      	}
        echo '</form>';
      	echo '</div>';
	include'../../Layout/footer.php';

			/*------Fin Aajouter.php----------- */
?>
