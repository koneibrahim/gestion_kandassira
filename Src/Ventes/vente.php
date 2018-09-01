<?php

  $id_ve=$_GET['id_ve'];
  $date_ve=$_GET['date_ve'];
  $libele=$_GET['libele'];
  $etat=$_GET['etat'];

      function etat_liv($e) {
       if($e=='N') return 'Non livré';
       elseif ($e=='P') return 'Partiellement livré';
       else return 'Totalement livré';
      }
   include 'listevente.php';
   /*------------Debut Vente.php-------------*/
 echo'<div id="contvert">';
           $ligne=pg_fetch_assoc($vente);
     echo'<h2 class="titrecform textcen"> Details de la vente </h2>';
     echo '<table  cellpadding="5" class="w90">';
           echo'<tr class="ld'.($i%2).'">';
               echo '<td> Date vente </td>';
               echo '<td>'.$ligne['date_ve'].'</td>';
           echo '</tr>';
           echo '<tr>';
               echo '<td> Libele </td>';
               echo '<td>'.$ligne['libele'].'</td>';
           echo '</tr>';
           echo '<tr>';
               echo '<td> Client </td>';
               echo '<td>'.$ligne['nom'].' '.$ligne['prenom'].'</td>';
           echo '</tr>';
           echo '<tr>';
               echo '<td> Téléphone </td>';
               echo '<td>'.$ligne['tel'].' / '.$ligne['tel2'].'</td>';
           echo '</tr>';
           echo '<tr>';
               echo '<td> Montant </td>';
               echo '<td >'.number_format($ligne['montant'],0,' ',' ').'<sup>F</sup></td>';
           echo '</tr>';
           echo '<tr>';
               echo '<td> Montant payé </td>';
               echo '<td>'.number_format($ligne['montant_paye'],0,' ',' ').'<sup>F</sup></td>';
           echo '</tr>';
           echo '<tr>';
               echo '<td> Reste à payé </td>';
               echo '<td>'.number_format($ligne['montant_res']-$ligne['montant_paye'],0,' ',' ').'<sup>F</sup></td>';
           echo '</tr>';
           echo '<tr>';
               echo '<td> Etat de la vente </td>';
               echo '<td>'.etat_liv($ligne['etat']).'</td>';
           echo '</tr>';
           echo'<tr>';
           echo'<td class="textcen"><a href="Vmodifier.php?id_ve='.$id_ve.
               '&date_ve='.$ligne['date_ve'].
               '&libele='.$ligne['libele'].'">
               <img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier">';
           echo'<td class="textcen"><a href="../html2pdf_v4.03/examples/exemple03.php?id_ve='.$id_ve.'">
               <img src="/Images/imprim.png" width="35px"height="35px" class="img" title="Imprimé"></a>';
                //   if($ligne['etat']==0) {
           echo'<a href="Vsupprimer.php?id_ve='.$ligne['id_ve'].
               '&date_ve='.$ligne['date_ve'].
               '&libele='.$ligne['libele'].'">
          <img src="/Images/supprimer.png" width="25px"height="25px" class="img" title="Supprimer"></a></td>';
              //  }
           echo'</tr>';
           echo'<tr>';
               echo'<td colspan="2  class="textgau"><a href="contenuve.php?id_ve='.$id_ve.
                   '&date_ve='.$ligne['date_ve'].
                   '&libele='.$ligne['libele'].'">
                   <button class="butachat"> Contenu de la commande </button></a></td>';
           echo'</tr>';
        //   if($ligne['etat']==0) {
           echo'<tr>';
               echo'<td colspan="2" class="textgau"><a href="listeliv.php?id_ve='.$id_ve.
                   //'&date_liv='.$ligne['date_liv'].
                   '&libele='.$ligne['libele'].
                   '&etat='.$ligne['etat'].
                     '"><button class="butachat">Livraison de la vente</button></a></td>';
           echo'</tr>';
           echo'<tr>';
               echo'<td colspan="2"  class="textgau"><a href="payvente.php?id_ve='.$id_ve.
                   '&date_ve='.$ligne['date_ve'].
                   '&libele='.$ligne['libele'].
                   '&etat='.$ligne['etat'].
                   '"><button class="butachat">Payement de la vente</button></a></td>';
          echo'</tr>';
          // }
          // else {
          echo'<tr>';
               echo'<td colspan="2" class="textgau"><a href="valider.php?id_ve='.$id_ve.
                   '&date_ve='.$ligne['date_ve'].
                   '&libele='.$ligne['libele'].
                   '&etat='.$ligne['etat'].
                    '"><button class="butachat">Validation</button></a></td>';
           echo'</tr>';
        //   }
     echo'</table>';
   echo'</div>';
           include'../../Layout/footer.php';
     /*------------Fin du fichier Achat.php-------------*/
?>
