<?php
  $id_ac=$_GET['id_ac'];
	$date_ac=$_GET['date_ac'];
  $date_pay=$_GET['date_pay'];
  $agent=$_GET['agent'];
   include'achat.php';
	/*-------Debut Payement.php------------*/

	echo'<div id="contvert2">';
	echo'<h3 class="titrecform textcen">Etat payement '.$libele.' '.$date_ac.'</h3><br/>';
	echo'<table cellpadding="3" class="w90">';
	if($ligne['total']!=$ligne['montant_paye']) {
  	echo'<tr class="thajouter">';
  	echo'<th colspan="6" class="textdro thtable"><a href="Pajouter.php?id_ac='.$id_ac.'">
  	<img src="/Images/ajouter.png" width="25px"height="25px" class="img" title="Ajouter"></a></th>';
  	echo'</tr>';
	}
	echo'<tr>';
	echo'<th class="thtable textcen"> N° </th>';
	echo'<th class="thtable textcen"> Date </th>';
	echo'<th class="thtable textcen"> Somme </th>';
  echo'<th class="thtable textcen"> Agent </th>';
	echo'<th class="thtable textcen" colspan="2"> Action </th>';
	echo'</tr>';
	$i=1;
	while($ligne=pg_fetch_assoc($payement))
	{
    	echo'<tr class="ld'.($i%2).'">';
      echo'<td class="textcen">'.$i.'</td>';
    	echo'<td class="textcen">'.$ligne['date_pay'].'</td>';
    	echo'<td class="textcen">'.$ligne['somme'].'</td>';
      echo'<td class="textcen">'.$ligne['agent'].'</td>';
    	echo'<td class="textcen"><a href="Pmodifier.php?id_ac='.$id_ac.
          '&id_pay='.$ligne['id_pay'].
    			'&date_pay='.$ligne['date_pay'].
    			'&somme='.$ligne['somme'].
          '&agent='.$ligne['agent'].
    			'"><img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier"></a></td>';
    	echo'<td class="textcen"><a href="Psupprimer.php?id_ac='.$id_ac.
    			'&id_pay='.$ligne['id_pay'].
    			'&date_pay='.$ligne['date_pay'].
    			'"><img src="/Images/supprimer.png" width="25px"height="25px" class="img" title="Supprimer"></a></td>';
    	echo'</tr>';
    	$i++;
	}
	echo'</table>';
	echo'</div>';
	include'../../Layout/footer.php';

		/*-------Fin Payement.php------------*/
?>
