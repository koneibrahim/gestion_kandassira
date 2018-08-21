<?php

   $id_ve=$_GET['id_ve'];
   $id_liv=$_GET['id_liv'];
         include'vente.php';

         		/*-----------Debut Listeliv.php-------------*/

      	echo '<div id="contliv">';
      	//if($ligne['etat_liv']!='T') {
      	echo '<a href="LVajouter.php?id_ve='.$id_ve.'"><img src="/Images/ajouter.png" width="25px"height="25px"
      	class="img" title="Ajouter"></a>';
      	echo '<h4 class="titreh4"> Faire une livraison </h4><br/>';
      	//}
      	while($ligne=pg_fetch_assoc($lvente))
      	{
      	echo '<a href="livraison.php?id_ve='.$id_ve.
      				'&id_liv='.$ligne['id_liv'].
      				'&libele='.$ligne['libele'].
      				'&date_liv='.$ligne['date_liv'].
      				'">
      	<button class="butmenu2" title="'.$ligne['date_liv'].'
      	'.$ligne['libele'].'"><b class="t18"x>'.$ligne['date_liv'].' '.$ligne['libele'].'</b></button></a>';
      	}
      	echo '</div>';
      	include'../../Layout/footer.php';
	   	/*-----------Fin Listeliv.php-------------*/
?>
