<?php

   $id_ac=$_GET['id_ac'];
   $id_liv=$_GET['id_liv'];
   $id_cac=$_GET['id_cac'];
   $libele=$_GET['libele'];
   $date_liv=$_GET['date_liv'];
   $qte_ma=$_GET['qte_ma'];

   include'listeliv.php';

   		/*------------Debut  Livraison.php-------------*/

	echo'<div id="contliv2">';
	echo'<tr>';
// echo'<h3 class="titrecform textdro"> '.$libele.' '.$date_liv.' </h3>';
	echo'</br>';
	echo'<td ><a href="LVmodifier.php?id_ac='.$id_ac.
   	   '&id_liv='.$id_liv.
			'&date_liv='.$date_liv.
			'&libele='.$libele.
			'"><img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier"></td><td>
			<a href="LVsupprimer.php?id_ac='.$id_ac.
			'&id_liv='.$id_liv.
			'&date_liv='.$date_liv.
			'&libele='.$libele.
			'"><img src="/Images/supprimer.png" width="25px"height="25px" class="img" title="Supprimer"></a></td>
			<td><h3 class="titrecform textdro"> '.$libele.' '.$date_liv.' </h3><Ltd>
			</td>';
	echo'</tr>';

	echo'<table cellpadding="10" colspan="6" class="w90">';

	echo'<tr>';
	echo'<th class="thtable textcen">N°</th>';
	echo'<th class="thtable textcen">Matières </th>';
	echo'<th class="thtable textcen">Quantité achetée</th>';
	echo'<th class="thtable textcen">Quantité livrée</th>';
	echo'<th class="thtable textcen colspan="2">Action</th>';
	echo'</tr>';
	$i=1;
	while($ligne=pg_fetch_assoc($livraison))
	{
	echo'<tr class="ld'.($i%2).'">';
   echo'<td class="textcen">'.$i.'</td>';
	echo'<td class="textgau">'.$ligne['nom_ma'].'</td>';
	echo'<td class="textcen">'.$ligne['qte_ma'].'</td>';
	echo'<td class="textcen">'.$ligne['qte_l'].'</td>';
   echo'<td class="textcen"><a href="Lmodifier.php?id_ac='.$id_ac.
      	'&id_liv='.$ligne['id_liv'].
   		'&id_cac='.$ligne['id_cac'].
   	   '&id_cliv='.$ligne['id_cliv'].
			'&qte_l='.$ligne['qte_l'].
			'&id_ma='.$ligne['id_ma'].
			'&qte_liv='.$ligne['qte_liv'].'">
			<img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier"></a></td>';

	echo'</tr>';
	$i++;
	}
	echo'</table>';
	echo'</div>';
	include'../../Layout/footer.php';


		/*------------Livraison.php----------*/


?>
