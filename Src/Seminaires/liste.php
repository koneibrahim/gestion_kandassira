<?php
	 		/* -----Debut Liste.php----------- */
	include'../../Layout/header.php';
	include'../../Layout/header2.php';
	include'../../Layout/retour.php';

				 echo '<div id="logo">';

				 echo '</div>';

				 echo '<div id="logo">';
					      	echo '</div>';
					      	include 'CRUD.php';
					      	echo '<div id="menu2">';
					      	echo '<a href="Sajouter.php">
										<img src="/Images/ajouter.png" width="25px"height="25px" class="img" title="Ajouter"></a></th>';
					      	echo '<h4 class="titreh4"> Liste des semainaires </h4><br/>';
					      	while($ligne=pg_fetch_assoc($listesemi))
					          	{
					        echo '<a href="seminaire.php?id_s='.$ligne['id_s'].'"><button class="butmenu2" title="'.$ligne['libele'].'
					          	'.$ligne['date'].'"><b class="t18"x>'.$ligne['libele'].' '.$ligne['date'].'</b></button></a>';
					          	}

				echo '</div>';
		include'../../Layout/footer.php';

	?>
