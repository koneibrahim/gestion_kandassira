<?php

  $id_ve=$_GET['id_ve'];
  $id_po=$_GET['id_po'];
  $date_ve=$_GET['date_ve'];
  $libele=$_GET['libele'];
  $etat=$_GET['etat'];

  include'vente.php';
       /*------------Debut Amodifier.php-------------*/
  echo'<div id="contvert">';
     echo'<div id="mform"><div id="mform2"><div id="mheader" class="textcen">
       <h2 class="titrecform">Modification vente</h2></div><br/><br/><br/>';
     echo'<form action="vente.php" method="post">';
       echo'<input type="hidden" name="mas" value="VM"/>';
       echo'<input type="hidden" name="id_ve" value="'.$id_ve.'">';
       echo'<table cellpadding="3" class="w95">';
       echo'<tr><td class="textinput"> Date </td><td>
          <input type="text" name="date_ve" value="'.$date_ve.'" class="labinput"></td></tr>';
       echo'<tr><td class="textinput"> Libele </td><td>
          <input type="text" name="libele" value="'.$libele.'" class="labinput"></td></tr>';

          echo'<tr><td class="textinput"> Client </td><td><select name="id_po" class="labinput">';
          while ($ligne=pg_fetch_assoc($lpersonne)) {
          echo'<option value="'.$ligne['id_po'].'">'.$ligne['nom'].' => '.$ligne['prenom'].'</option>';
           }
           echo '</table>';
           echo '<div id="mfooter" class="droite">';
           echo'<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
               <input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';

   echo '</form>';
 echo '</div>';
 include'../../Layout/footer.php';

         /*------------Fin Amodifier.php-------------*/
?>
