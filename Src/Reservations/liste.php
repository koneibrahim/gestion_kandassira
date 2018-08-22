<?php
	 		/* -----Debut Liste.php----------- */
	include'../../Layout/header.php';
	include'../../Layout/header2.php';
	include'../../Layout/retour.php';

	  echo '<div id="menu2">';
					echo ' <a href="/Src/Reservations/liste.php"><button class="bm2">Reservations</button> </a>';
					echo ' <a href="/Src/Mariages/liste.php"> <button class="bm2">Kodumani</button> </a>';
					echo ' <a href="/Src/Prestations/liste.php"> <button class="bm2">Prestations</button> </a>';

					echo '<h4 class="titreh4"> Liste des prestations </h4><br/>';
					while($ligne=pg_fetch_assoc($lpres))
							{
							echo '<a href="liste.php?id_pres='.$ligne['id_pres'].'">
							<button class="butmenu2" title="'.$ligne['nom_pres'].''.$ligne['prix'].'">
							<b class="t18"x>'.$ligne['nom_pres'].' '.$ligne['prix'].'</b>
							</button></a>';
							}

		echo '</div>';

		include'CRUD.php';
				echo'<div id="content">';

				echo'<h3 class="titrecform textgau">Liste des reservations</h3><br/>';
				echo '<table cellpadding="3" border="0" class="w90">';
				echo '<tr class="thajouter">';
				echo '<th colspan="11" class="textdro thtable"><a href="Fajouter.php">
				<img src="/Images/ajouter.png" width="25px"height="25px" class="img" title="Ajouter"></a></th>';
				echo '</tr>';
				echo '<tr class="cth">';
				echo	'<th class="thtable textcen">N°</th>';
				echo	'<th class="thtable textgau">Date reservation </th>';
				echo	'<th class="thtable textgau">Libelle </th>';
				echo	'<th class="thtable textcen">Nom Client </th>';
				echo	'<th class="thtable textcen">Contact </th>';
				echo	'<th class="thtable textcen">Prestations</th>';
				echo	'<th class="thtable textcen">Date de travail </th>';
				echo	'<th class="thtable textcen">Lieu </th>';
				echo	'<th class="thtable textcen">Personnels </th>';
				echo	'<th colspan="2" class="thtable">Action</th>';
				echo'</tr>';
				$i=1;
				while($ligne=pg_fetch_assoc($reservation))
				{
				echo'<tr class="ld'.($i%2).'">';
			  echo'<td class="textcen">'.$i.'</td>';
				echo'<td class="textgau">'.$ligne['date_res'].'</td>';
				echo'<td class="textgau">'.$ligne['libele'].'</td>';
				echo'<td class="textcen">'.$ligne['nom_cli'].' -- '.$ligne['pre_cli'].'<sup></sup></td>';
				echo'<td class="textgau">'.$ligne['tel'].'</td>';
				echo'<td class="textgau">'.$ligne['id_pres'].'</td>';
				echo'<td class="textcen">'.$ligne['date_tr'].'</td>';
				echo'<td class="textcen">'.$ligne['lieu'].'</td>';
				echo'<td class="textcen">'.$ligne['id_p'].'</td>';
				echo'<td class="textcen"><a href="Fmodifier.php?id_res='.$ligne['id_res'].
						'&date_res_p='.$ligne['date_res'].
						'&libele='.$ligne['libele'].
						'&id_cli='.$ligne['id_cli'].
						'&date_tr='.$ligne['date_tr'].
						'&lieu='.$ligne['lieu'].
						'"><img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier"></a></td>';
				echo'<td class="textcen"><a href="Fsupprimer.php?id_res='.$ligne['id_res'].
						'&date_res_p='.$ligne['date_res'].
						'&libele='.$ligne['libele'].
						'&id_cli='.$ligne['id_cli'].
						'&date_tr='.$ligne['date_tr'].
						'&lieu='.$ligne['lieu'].
						'"><img src="/Images/supprimer.png" width="25px"height="25px" class="img" title="Supprimer"></a></td>';
				echo'</tr>';
				$i++;
				}
				/*	echo'<td class="textcen"><a href="yogotterahma/Src/html2pdf_v4.03/examples/exemple04.php"><button> helo</button></a>';*/

				echo'</table>';
				echo'</div>';
	include'../../Layout/footer.php';

		/* -------Fin  liste.php------------- */
?>
