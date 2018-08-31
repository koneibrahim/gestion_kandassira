<?php

 	include'../../Layout/header.php';
  include'../../Layout/retour.php';
  include'../../Layout/header2.php';

   	    echo '<div id="logo">';

      	echo '</div>';

      	echo '<div id="logo">';

      	echo '</div>';

      	include'CRUD.php';

      	echo '<div id="menu2">';
          	echo '<a href="Aajouter.php">	<img src="/Images/ajouter.png" width="25px"height="25px"   	class="img" title="Ajouter"></a></th>';
          	echo '<h4 class="titreh4"> Liste des achats </h4><br/>';
          	while($ligne=pg_fetch_assoc($listeac))
              	{
              	echo '<a href="achat.php?id_ac='.$ligne['id_ac'].'"><button class="butmenu2" title="'.$ligne['date_ac'].'
              	'.$ligne['libele'].' '.$ligne['nom'].' '.$ligne['prenom'].'"><b class="t18"x>'.$ligne['date_ac'].' '.$ligne['libele'].'
                '.$ligne['nom'].' '.$ligne['prenom'].' '.$ligne['tel'].'</b></button></a>';
              	}

        echo '</div>';

	include'../../Layout/footer.php';

?>
