
<?php

  $id_ve=$_GET['id_ve'];
	$date_ve=$_GET['date_ve'];
	$libele=$_GET['libele'];
  $date_pve=$_GET['date_pve'];
   include'vente.php';

	/*-------Debut Payement.php------------*/

	echo'<div id="contvert2">';
      	echo'<h3 class="titrecform textcen">Etat payement du '.$libele.' '.$date_ve.'</h3><br/>';
      	echo'<table cellpadding="3" class="w90">';

      	//if($ligne['montant']!=$ligne['montant_paye']) {
      	echo'<tr class="thajouter">';
      	echo'<th colspan="6" class="textdro thtable"><a href="Pajouter.php?id_ve='.$id_ve.'">
      	<img src="/Images/ajouter.png" width="25px"height="25px" class="img" title="Ajouter"></a></th>';

      	echo'</tr>';
      	//}
      	echo'<tr>';
      	echo'<th class="thtable textcen">N°</th>';
      	echo'<th class="thtable textcen">Date payement</th>';
      	echo'<th class="thtable textcen">Montant payé </th>';
      	echo'<th class="thtable textcen" colspan="2">Action</th>';
      	echo'</tr>';
      	$i=1;
      	while($ligne=pg_fetch_assoc($payement))
      	{
      	echo'<tr class="ld'.($i%2).'">';
         echo'<td class="textcen">'.$i.'</td>';
      	echo'<td class="textcen">'.$ligne['date_pve'].'</td>';
      	echo'<td class="textcen">'.$ligne['montant_pve'].'</td>';
      	echo'<td class="textcen"><a href="Pmodifier.php?id_pve='.$id_pve.
            '&id_pve='.$ligne['id_pve'].
      			'&date_pve='.$ligne['date_pve'].
      			'&montant_pve='.$ligne['montant_pve'].
      			'"><img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier"></a></td>';
      	echo'<td class="textcen"><a href="Psupprimer.php?id_ac='.$id_ac.
        '&id_pve='.$ligne['id_pve'].
        '&date_pve='.$ligne['date_pve'].
        '&montant_pve='.$ligne['montant_pve'].
      			'"><img src="/Images/supprimer.png" width="25px"height="25px" class="img" title="Supprimer"></a></td>';
      	echo'</tr>';
      	$i++;
      	}
      	echo'</table>';
	echo'</div>';
	include'../../Layout/footer.php';

		/*-------Fin Payement.php------------*/
?>
