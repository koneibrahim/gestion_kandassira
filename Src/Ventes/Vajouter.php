<?php

    $id_ve=$_GET['id_ve'];
    $date_ve=$_GET['date_ve'];
    $libele=$_GET['libele'];
    $etat=$_GET['etat'];

    include 'listevente.php';

   /*----------- Debut Vajouter.php----------- */
         echo '<div id="content">';
         echo '<div id="cform"><div id="cform2">
             <div id="cheader"><h2 class="titrecform">Faire une vente</h2></div><br/><br/><br/>';

           echo'<form action="listevente.php" method="post">';
               echo'<input type="hidden" name="mas" value="VA"/>';
               echo'<table cellpadding="3" class="w95" >';
                   echo'<tr><td class="textinput">Date</td>
                      <td><input type="text" name="date_ve" class="labinput" value="'.date('Y-m-d').'"></td></tr>';
                   echo'<tr><td class="textinput">Libele</td>
                      <td><input type="text" name="libele" class="labinput"></td></tr>';
                   echo'<tr><td class="textinput">Client</td><td><select name="id_cli" class="labinput">';
                   while ($ligne=pg_fetch_assoc($lclient)) {
                   echo'<option value="'.$ligne['id_cli'].'">'.$ligne['nom_cli'].'</option>';
                    }
               echo'</table>';
               echo'<div id="cfooter" class="textdro">';
               echo'<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
                    <input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';
           echo '</form>';
         echo '</div>';
         include'../../Layout/footer.php';
                      /*------Fin Vajouter.php----------- */
?>
