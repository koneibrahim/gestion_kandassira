<?php

$id_ve=$_GET['id_ve'];
$date_ve=$_GET['date_ve'];
$libele=$_GET['libele'];
$etat=$_GET['etat'];
 include'vente.php';
       /*------------Debut Amodifier.php-------------*/
  echo'<div id="contvert">';
     echo'<div id="mform"><div id="mform2"><div id="mheader" class="textcen">
       <h2 class="titrecform">Modification achat</h2></div><br/><br/><br/>';
     echo'<form action="vente.php" method="post">';
     echo'<input type="hidden" name="mas" value="VM"/>';
     echo'<input type="hidden" name="id_ve" value="'.$id_ve.'">';
     echo'<table cellpadding="3" class="w95">';
     echo'<tr><td class="textinput">Date</td><td>
        <input type="text" name="date_ve" value="'.$date_ve.'" class="labinput"></td></tr>';
     echo'<tr><td class="textinput">Libele</td><td>
        <input type="text" name="libele" value="'.$libele.'" class="labinput"></td></tr>';
      echo '<tr><td class="textinput">Fournisseur</td>
           <td><select name="id_cli" class="labinput">';
       while ($ligne=pg_fetch_assoc($lclient)) {
         if($id_cli==$ligne['id_cli'])
         echo '<option value="'.$ligne['id_cli'].'"selected>'.$ligne['nom_cli'].'</option>';
         else
         echo '<option value="'.$ligne['id_cli'].'">'.$ligne['nom_cli'].'</option>';
         }
         echo'<tr><td class="textinput">Etat livrasion</td><td>
           <input type="text" name="etat" value="'.$etat.'" class="labinput"></td></tr>';
         echo '</table>';
         echo '<div id="mfooter" class="droite">';
         //if($_SESSION['utilisateur']=='Identifie') {
         echo'<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
             <input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';
          // }
   echo '</form>';
 echo '</div>';
         /*------------Fin Amodifier.php-------------*/
?>
