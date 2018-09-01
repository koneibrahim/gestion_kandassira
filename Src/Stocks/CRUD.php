<?php

	  $requete="select nom_pro,qte_pro,qte_v  from produits natural join contenu_acha natural join
		 	contenu_vente where id_ac=$id_ac";
	  $resultat=pg_query($dbconn,$requete);

?>
