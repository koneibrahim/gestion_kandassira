
 <?php

 		/*----Debut  Liste.php------------*/

 	$id_prod=$_GET['id_prod'];
 	$date_prod=$_GET['date_prod'];
 	$libele=$_GET['libele'];
 	$id_cprod=$_GET['id_cprod'];
 	 $etat=$_GET['etat'];

	include 'liste.php';

			/*----Debut  Production.php----*/

	echo'<div id="content">';

	$ligne=pg_fetch_assoc($production);

	echo'<h2 class="titrecform textcen">Production '.$date_prod.' '.$libele.'</h2>';
	echo '<table  cellpadding="13" class="w90">';

	echo '<tr>';
	echo '<td>Libele</td>';
	echo '<td>'.$ligne['libele'].'</td>';
	echo '</tr>';

	echo '<tr class="ligne">';
	echo '<td >Date de Production</td>';
	echo '<td >'.$ligne['date_prod'].'</td>';
	echo '</tr>';

	echo '<tr>';
	echo '<td>Quantite produit</td>';
	echo '<td>'.$ligne['qte'].'</td>';
	echo '</tr>';

		if($ligne['etat']==0) {
	echo'<tr  class="ligne">';
  echo'<td><a href="valider.php?id_prod='.$ligne['id_prod'].
			'&date_prod='.$ligne['date_prod'].
			'&libele='.$ligne['libele'].
			'&qte='.$ligne['qte'].
				'&etat='.$ligne['etat'].
			'"><img src="/Images/valider.png" width="25px"height="25px" class="img" title="Valider"></a></td>';

	    echo'<td  class="textgau"><a href="Fmodifier.php?id_prod='.$ligne['id_prod'].
			'&date_prod='.$ligne['date_prod'].
			'&libele='.$ligne['libele'].
			'&qte='.$ligne['qte'].
			'&etat='.$ligne['etat'].
			'"><img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier"></a></td>';
      //&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
    }
      if($_SESSION['group']=='3') {
      echo'<td><a href="Fsupprimer.php?id_prod='.$ligne['id_prod'].
			'&date_prod='.$ligne['date_prod'].
			'&libele='.$ligne['libele'].
			'&qte='.$ligne['qte'].
			'"><img src="/Images/supprimer.png" width="25px"height="25px" class="img"title="Supprimer"></a></td>';
    }


	echo'</tr>';

			echo'</table>';

				/*-----Contenu Production----*/

	echo'<h2 class="titreform textcen"> Contenu production</h2>';
	echo'<table cellpadding="13" class="w90">';
	echo'<tr class="thajouter">';
	echo'<th colspan="3"> </th>';
	echo '</tr>';
	echo'<tr>';
	echo'<th class="thtable textcen">N°</th>';
	echo'<th class="thtable textcen">Matière</th>';
	echo'<th class="thtable textcen">Quantité </th>';
	echo '</tr>';
	$i=1;
	while($ligne=pg_fetch_assoc($cproduction))
	{
	echo'<tr class="ld'.($i%2).'">';
   echo'<td class="textcen">'.$i.'</td>';
   echo'<td class="textgau">'.$ligne['nom_ma'].'</td>';
   echo'<td class="textgau">'.$ligne['qte'].'</td>';
   echo '</tr>';

	$i++;
	}
	echo'</table>';
	echo'</div>';
	include'../../Layout/footer.php';


			/*----Fin  Production.php------------*/

?>
