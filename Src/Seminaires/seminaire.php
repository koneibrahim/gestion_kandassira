<?php

      $id_s=$_GET['id_s'];
      $libele=$_GET['libele'];
      $date=$_GET['date'];
      $horaire=$_GET['horaire'];
      $horaire=$_GET['horaire'];

        function etat_liv($e) {
         if($e=='N') return 'Non livré';
         elseif ($e=='P') return 'Partiellement livré';
         else return 'Totalement livré';
          }
           include 'liste.php';
           /*------------Debut Achat.php-------------*/
         echo'<div id="contvert">';

         $ligne=pg_fetch_assoc($seminaire);

         echo'<h2 class="titrecform textcen"> Details du seminaire </h2>';
         echo '<table  cellpadding="5" class="w90">';

         echo'<tr class="ld'.($i%2).'">';
             echo '<td> Libele </td>';
             echo '<td>'.$ligne['libele'].'</td>';
         echo '</tr>';

         echo '<tr>';
             echo '<td> Date seminaire </td>';
             echo '<td>'.$ligne['date'].'</td>';
         echo '</tr>';

         echo '<tr>';
             echo '<td> Heure </td>';
             echo '<td>'.$ligne['heure'].'</td>';
         echo '</tr>';

         echo '<tr>';
             echo '<td> Lieu </td>';
             echo '<td>'.$ligne['lieu'].'</td>';
         echo '</tr>';

         echo '<tr>';
             echo '<td>Montant</td>';
             echo '<td >'.number_format($ligne['montant'],0,' ',' ').'<sup>F</sup></td>';
         echo '</tr>';

         echo '<tr>';
             echo '<td>Montant payé</td>';
             echo '<td>'.number_format($ligne['montant_paye'],0,' ',' ').'<sup>F</sup></td>';
         echo '</tr>';

         echo '<tr>';
             echo '<td>Reste à payé</td>';
             echo '<td>'.number_format($ligne['montant']-$ligne['montant_paye'],0,' ',' ').'<sup>F</sup></td>';
         echo '</tr>';

         echo '<tr>';
             echo '<td>Etat de validation seminaire </td>';
             echo '<td>'.etat_liv($ligne['etat_liv']).'</td>';
         echo '</tr>';

         echo'<tr>';
         echo'<td class="textcen"><a href="Smodifier.php?id_s='.$id_s.
             '&libele='.$ligne['libele'].
             '&date='.$ligne['date'].
             '&heure='.$ligne['heure'].
             '&lieu='.$ligne['lieu'].'">
             <img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier">';

            // echo'<td class="textcen"><a href="../html2pdf_v4.03/examples/exemple03.php?id_ac='.$id_ac.'">
            // <img src="/Images/imprim.png" width="35px"height="35px" class="img" title="Imprimé"></a>';
             //if($ligne['etat']==0) {
             //if($_SESSION['group']=='3') {
               echo'<a href="Ssupprimer.php?id_s='.$ligne['id_s'].
               '&libele='.$ligne['libele'].'&date='.$ligne['date'].'">
               <img src="/Images/supprimer.png" width="25px"height="25px" class="img" title="Supprimer"></a></td>';
             //	 }
             //}
         echo'</tr>';

         //---------Contenu seminaire------------------------
         echo'<tr>';
         echo'<td colspan="2  class="textgau"><a href="contenusem.php?id_ac='.$id_ac.
             '&date_ac='.$ligne['date_ac'].
             '&libele='.$ligne['libele'].
             '&etat='.$ligne['etat'].
             '"><button class="butachat">Contenu</button></a></td>';
         echo'</tr>';

         //if($ligne['etat']==1) {

         echo'<tr>';

         echo'<td colspan="2" class="textgau"><a href="listeliv.php?id_ac='.$ligne['id_ac'].
               '&date_ac='.$ligne['date_ac'].
               '&libele='.$ligne['libele'].
               '&date_liv='.$ligne['date_liv'].
               '&etat='.$ligne['etat'].
               '"><button class="butachat">Livraison</button></a></td>';
             echo'</tr>';
         echo'<tr>';
         echo'<td colspan="2"  class="textgau"><a href="payement.php?id_ac='.$id_ac.
               '&date_ac='.$ligne['date_ac'].
               '&libele='.$ligne['libele'].
               '&etat='.$ligne['etat'].
             '"><button class="butachat">Payement</button></a></td>';

             echo'</tr>';
              //}
        // else {
           echo'<tr>';
         echo'<td colspan="2" class="textgau"><a href="valider.php?id_ac='.$ligne['id_ac'].
             '&date_ac='.$ligne['date_ac'].
             '&libele='.$ligne['libele'].
             '&etat='.$ligne['etat'].
              '"><button class="butachat">Validation</button></a></td>';
         echo'</tr>';
              //}
         echo'</table>';
         echo'</div>';
         include'../../Layout/footer.php';

             /*------------Fin du fichier Achat.php-------------*/
?>
