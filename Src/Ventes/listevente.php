<?php

 	include'../../Layout/header.php';
  include'../../Layout/header2.php';
  include'../../Layout/retour.php';

     echo'<div id="menu2">';

     echo '</div>';
	include 'CRUD.php';

       echo'<div id="menu2">';
		 	       echo'<a href="Vajouter.php">
          	<img src="/Images/ajouter.png" width="25px"height="25px"
          	class="img" title="Ajouter"></a></th>';
          	echo '<h4 class="titreh4"> Liste des ventes </h4><br/>';
          	while($ligne=pg_fetch_assoc($listeve))
          	{
          	echo '<a href="vente.php?id_ve='.$ligne['id_ve'].'"><button class="butmenu2" title="'.$ligne['date_ve'].'
          	'.$ligne['libele'].'"><b class="t18"x>'.$ligne['date_ve'].' '.$ligne['libele'].' '.$ligne['nom_cli'].'
            '.$ligne['pre_cli'].'
            '.$ligne['tel'].' </b></button></a>';
          	}
	     echo '</div>';
	include'../../Layout/footer.php';

?>
