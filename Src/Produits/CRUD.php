<?php
	  $requete="select * from produits order by nom_pro asc";
	  $resultat=pg_query($dbconn,$requete);
?>
