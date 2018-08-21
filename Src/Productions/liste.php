
<?php

                /*-------Debut  Liste.php----------*/


        $id_prod=$_GET['id_prod'];
        include'../../Layout/header.php';
        include'../../Layout/header2.php';
        include'../../Layout/content.php';
        include 'CRUD.php';

                echo '<div id="logosahel">';
                    echo'<img src="../../Images/sahel.png" width="100%" height="100%" alt="">';
                echo '</div>';

                echo '<div id="logoyogo">';
                        echo'<img src="../../Images/yogotte.jpg" width="100%" height="100%" alt="">';
                echo '</div>';

                echo '<div id="menu2">';

                echo'<img src="../../Images/productions.png" class="textcen" width="60%" height="20%" alt="">&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

        echo '<a href="Fajouter.php"><img src="/Images/ajouter.png" width="25px"height="25px" class="img"
        title="Ajouter"></a></th>';
        echo '<h4 class="titreh4"> Liste des productions </h4><br/>';

        while($ligne=pg_fetch_assoc($liste))
        {
        echo '<a href="production.php?id_prod='.$ligne['id_prod'].'">

                <button class="butmenu2" title="'.$ligne['date_prod'].' '.$ligne['libele'].'">

        <b class="t18">'.$ligne['date_prod'].' '.$ligne['libele'].'</b> </button> </a>';

			}
	         echo '</div>';
	         include'../../Layout/footer.php';

	                         /*-------Fin  Liste.php----------*/
	 ?>
