 <?php

       $id_ac=$_GET['id_ac'];
       $date_ac=$_GET['date_ac'];
       $libele=$_GET['libele'];
       $etat=$_GET['etat'];

         function etat_liv($e) {
        	if($e=='N') return 'Non livré';
        	elseif ($e=='P') return 'Partiellement livré';
        	else return 'Totalement livré';
        	 }
          	include 'listeac.php';
        		/*------------Debut Achat.php-------------*/
        	echo'<div id="contvert">';

        	$ligne=pg_fetch_assoc($achat);

        	echo'<h2 class="titrecform textcen"> Details de l\'achat </h2>';
        	echo '<table  cellpadding="5" class="w90">';

        	echo'<tr class="ld'.($i%2).'">';
            	echo '<td>Date achat</td>';
            	echo '<td>'.$ligne['date_ac'].'</td>';
        	echo '</tr>';

        	echo '<tr>';
            	echo '<td>Libele</td>';
            	echo '<td>'.$ligne['libele'].'</td>';
        	echo '</tr>';

        	echo '<tr>';
            	echo '<td>Fournisseur</td>';
            	echo '<td>'.$ligne['nom_fo'].'</td>';
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
            	echo '<td>Etat de livraison</td>';
            	echo '<td>'.etat_liv($ligne['etat_liv']).'</td>';
        	echo '</tr>';

        	echo'<tr>';
        	echo'<td class="textcen"><a href="Amodifier.php?id_ac='.$id_ac.
        			'&date_ac='.$ligne['date_ac'].
        			'&libele='.$ligne['libele'].
        			'&id_fo='.$ligne['id_fo'].
        			'&etat='.$ligne['etat'].
        			'&etat_liv='.$ligne['etat_liv'].'">
        			<img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier">';

        			echo'<td class="textcen"><a href="../html2pdf_v4.03/examples/exemple03.php?id_ac='.$id_ac.'">
        			<img src="/Images/imprim.png" width="35px"height="35px" class="img" title="Imprimé"></a>';

        			//if($ligne['etat']==0) {
              if($_SESSION['group']=='3') {
          			echo'<a href="Asupprimer.php?id_ac='.$ligne['id_ac'].
          			'&date_ac='.$ligne['date_ac'].'&libele='.$ligne['libele'].'">
          			<img src="/Images/supprimer.png" width="25px"height="25px" class="img" title="Supprimer"></a></td>';
          		//	 }
            }
        	echo'</tr>';

        	echo'<tr>';
        	echo'<td colspan="2  class="textgau"><a href="contenuac.php?id_ac='.$id_ac.
        			'&date_ac='.$ligne['date_ac'].
        			'&libele='.$ligne['libele'].
        			'&etat='.$ligne['etat'].
        			'"><button class="butachat">Contenu</button></a></td>';
        	echo'</tr>';

        	if($ligne['etat']==1) {

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
        	     }
        	else {
        		echo'<tr>';
        	echo'<td colspan="2" class="textgau"><a href="valider.php?id_ac='.$ligne['id_ac'].
        			'&date_ac='.$ligne['date_ac'].
        			'&libele='.$ligne['libele'].
        			'&etat='.$ligne['etat'].
        		   '"><button class="butachat">Validation</button></a></td>';
        	echo'</tr>';
        	     }
        	echo'</table>';
        	echo'</div>';
        	include'../../Layout/footer.php';

        			/*------------Fin du fichier Achat.php-------------*/
?>
