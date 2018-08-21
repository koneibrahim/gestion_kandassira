<?php


 	include'../../Layout/header.php';
  include'../../Layout/retour.php';

   	echo '<div id="logosahel">';
      		// 	echo'<img src="../../Images/sahel.png" width="100%" height="100%" alt="">';
      		echo '</div>';

      	echo '<div id="logoyogo">';
      	//	 	echo'<img src="../../Images/yogotte.jpg" width="100%" height="100%" alt="">';
      	echo '</div>';
      	include'../../Layout/header2.php';
      	include 'CRUD.php';
      	echo '<div id="menu2">';
      		/* 	echo'<img src="../../Images/achats.png" width="60%" height="20%" alt="">';*/
      	echo '<a href="Aajouter.php">
          	<img src="/Images/ajouter.png" width="25px"height="25px"
          	class="img" title="Ajouter"></a></th>';
      	echo '<h4 class="titreh4"> Liste des achats </h4><br/>';
      	while($ligne=pg_fetch_assoc($listeac))
          	{
          	echo '<a href="achat.php?id_ac='.$ligne['id_ac'].'"><button class="butmenu2" title="'.$ligne['date_ac'].'
          	'.$ligne['libele'].'"><b class="t18"x>'.$ligne['date_ac'].' '.$ligne['libele'].'</b></button></a>';
          	}
   echo '</div>';
	include'../../Layout/footer.php';

?>
