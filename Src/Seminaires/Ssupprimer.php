<?php

$id_s=$_GET['id_s'];
$libele=$_GET['libele'];
$date=$_GET['date'];

  include'seminaire.php';
       /*------------Debut Amodifier.php-------------*/

 echo'<div id="contvert">';

       echo'<form action="seminaire.php" method="post">';
           echo'<input type="hidden" name="mas" value="SS"/>';
           echo'<input type="hidden" name="id_s" value="'.$id_s.'">';

           echo '<div id="sform"><div id="sform2"><div id="sheader" class="titrecform">Suppression
           </div><br/><br/><br/><br/><br/>
           <p class="textcen" >Voulez vous supprimer le seminaire
           <b class="crouge">'.$libele.' de  '.$date.'?</b></p>

            <div id="sfooter">';
            if($_SESSION['utilisateur']=='Identifie') {
            echo'<input type="submit" name="valider" value="Oui" class="bvalid">
                 <input type="submit" name="valider" value="Non" class="bannul"></div></div></div>';
            }
        echo '</form>';
 echo '</div>';


         /*------------Fin Amodifier.php-------------*/
?>
