
<?php
	/*------Debut  Liste.php----------*/
	include'../../Layout/header.php';
	include'../../Layout/header2.php';
			echo '<div id="logosahel">';
				 	echo'<img src="../../Images/sahel.png" width="100%" height="100%" alt="">';
			echo '</div>';
			echo '<div id="logoyogo">';
				 	echo'<img src="../../Images/yogotte.jpg" width="100%" height="100%" alt="">';
			echo '</div>';
			echo '<div id="menu2">';
				 	echo'<img src="../../Images/stocks.png" width="60%" height="20%" alt="">';
					echo'<a href="/Src/Clients/liste.php"> <button class="butmenu2">Clients</button> </a>';
					echo'<a href="/Src/Articles/liste.php"> <button class="butmenu2">Stock des produits</button> </a>';
			echo '</div>';

      include'CRUD.php';

      	echo'<div id="content">';
        	 echo'<h3 class="titrecform textcen">Stock ventes produits</h3><br/>';
      	   echo'<table cellpadding="13" class="w90">';
            	echo'<tr class="thtable">';
            	echo'<th colspan="5" class="textdro thtable"></th></a></th>';
            	echo'</tr>';
            	echo'<tr>';
            	echo'<th class="thtable textcen">N°</th>';
            	echo'<th class="thtable textgau">Nom produit </th>';
            	echo'<th class="thtable textcen">Quantité virtuel</th>';
            	echo'<th class="thtable textcen">Quantité réele</th>';
            	echo'</tr>';
            	$i=1;
            	while($ligne=pg_fetch_assoc($resultat))
            	{
            	echo'<tr class="ld'.($i%2).'">';
               echo'<td class="textcen">'.$i.'</td>';
            	echo'<td class="textgau">'.$ligne['nom_pro'].'</td>';
            	echo'<td class="textcen">'.$ligne['qte_vir'].'</td>';
            	echo'<td class="textcen">'.$ligne['qte_reel'].'</td>';
            	echo'</tr>';
            	$i++;
            	}
      	   echo'</table>';
      	echo'</div>';

    include'../../Layout/footer.php';

      		/*------Fin Liste.php----------*/

?>
