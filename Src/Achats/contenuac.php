<?php

  $id_ac=$_GET['id_ac'];
  $id_cac=$_GET['id_cac'];
  $id_pro=$_GET['id_pro'];
  $nom_pro=$_GET['nom_pro'];
  $qte_pro=$_GET['qte_pro'];
  $qte_liv=$_GET['qte_liv'];
  $date_ac=$_GET['date_ac'];
  $etat=$_GET['etat'];

  include'achat.php';

      			/*-------Debut Contenuac-----------*/

      	echo'<div id="contvert2">';
      	echo'<h3 class="titrecform textcen">Contenu de l\'achat  '.$libele.' '.$date_ac.' </h3><br/>';
      	echo'<table cellpadding="3"  border="0" class="w90">';

      	//if ($etat==0) {

      	echo'<tr class="thajouter">';
      	echo'<th colspan="7" class="textdro thtable">
      	<a href="Cajouter.php?id_ac='.$id_ac.'">
      	<img src="/Images/ajouter.png" width="25px"height="25px" title="Ajouter"></a></th>';
      	echo '</tr>';
      	//}
      	echo'<tr>';
      	echo'<th class="thtable textcen">N°</th>';
      	echo'<th class="thtable textcen">Produit</th>';
      	echo'<th class="thtable textcen">Prix achat</th>';
      	echo'<th class="thtable textcen">Quantité</th>';
      	echo'<th class="thtable textcen">Quantité livré</th>';
      		//if ($etat==0) {
      	echo'<th class="thtable textcen" colspan="2">Action</th>';
          //}
      	echo'</tr>';
      	$i=1;
      	while($ligne=pg_fetch_assoc($contenuac))
      	{
      	echo'<tr class="ld'.($i%2).'">';
      	echo'<td class="textcen">'.$i.'</td>';
      	echo'<td class="textgau">'.$ligne['nom_pro'].'</td>';
      	echo'<td class="textcen">'.$ligne['prix_acha'].'</td>';
      	echo'<td class="textcen">'.$ligne['qte_pro'].'</td>';
        echo'<td class="textcen">'.$ligne['qte_liv'].'</td>';
      	//if ($etat==0) {
         echo'<td class="textcen"><a href="Cmodifier.php?id_ac='.$id_ac.
         		'&id_cac='.$ligne['id_cac'].
      			'&id_pro='.$ligne['id_pro'].
            '&prix_acha='.$ligne['prix_acha'].
      			'&qte_pro='.$ligne['qte_pro'].
      			'"><img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier"></a></td>';
      echo'<td class="textcen"><a href="Csupprimer.php?id_ac='.$id_ac.
            '&id_cac='.$ligne['id_cac'].
            '&id_pro='.$ligne['id_pro'].
            '&prix_acha='.$ligne['prix_acha'].
            '&qte_pro='.$ligne['qte_pro'].
      			'"><img src="/Images/supprimer.png" width="25px"height="25px" class="img" title="Modifier"></a></td>';
         //}
      echo'</tr>';

      	$i++;
      	}
      	echo'</table>';

      	echo'</div>';
	include'../../Layout/footer.php';

?>
