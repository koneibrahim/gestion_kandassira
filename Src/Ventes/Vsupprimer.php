<?php

$id_ve=$_GET['id_ve'];
$date_ve=$_GET['date_ve'];
$libele=$_GET['libele'];
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];

 include'vente.php';

       /*------------Debut Amodifier.php-------------*/
 echo'<div id="contvert">';

   echo'<form action="vente.php" method="post">';
       echo'<input type="hidden" name="mas" value="VS"/>';
       echo'<input type="hidden" name="id_ve" value="'.$id_ve.'">';
              echo '<div id="sform"><div id="sform2"><div id="sheader" class="titrecform">Suppression</div><br/><br/><br/><br/><br/>
          <p class="textcen" >Voulez vous supprimer la commande du
           <b class="crouge">'.$date_ve.' '.$libele.' de  '.$nom.' '.$prenom.' ?</b></p>

              <div id="sfooter">';
            //  if($_SESSION['utilisateur']=='Identifie') {
              echo'<input type="submit" name="valider" value="Oui" class="bvalid">
                   <input type="submit" name="valider" value="Non" class="bannul"></div></div></div>';
            //  }
   echo '</form>';
 echo '</div>';
         /*------------Fin Amodifier.php-------------*/
?>
