<?php

 $id_s=$_GET['id_s'];
 $libele=$_GET['libele'];
 $date=$_GET['date'];
 $heure=$_GET['heure'];
 $lieu=$_GET['lieu'];
 $etat=$_GET['etat'];

 include'seminaire.php';

       /*------------Debut Amodifier.php-------------*/

         echo'<div id="contvert">';

         echo'<div id="mform"><div id="mform2"><div id="mheader" class="textcen">
           <h2 class="titrecform">Modification seminaire </h2></div><br/><br/><br/>';

         echo'<form action="seminaire.php" method="post">';
         echo'<input type="hidden" name="mas" value="SM"/>';
         echo'<input type="hidden" name="id_s" value="'.$id_s.'">';

         echo'<table cellpadding="3" class="w95">';

         echo'<tr><td class="textinput">Libele</td><td>
           <input type="text" name="libele" value="'.$libele.'" class="labinput"></td></tr>';

         echo'<tr><td class="textinput">Date</td><td>
           <input type="text" name="date" value="'.$date.'" class="labinput"></td></tr>';

         echo'<tr><td class="textinput">Heure</td><td>
             <input type="text" name="heure" value="'.$heure.'" class="labinput"></td></tr>';

        echo'<tr><td class="textinput">Lieu</td><td>
             <input type="text" name="lieu" value="'.$lieu.'" class="labinput"></td></tr>';

         echo '</table>';
         echo '<div id="mfooter" class="droite">';
         if($_SESSION['utilisateur']=='Identifie') {
         echo'<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
         <input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';
           }
         echo '</form>';
 echo '</div>';



         /*------------Fin Amodifier.php-------------*/
?>
