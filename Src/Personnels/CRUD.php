<?php

		 $requete="select nom,prenom,poste,tel,tel2,adresse FROM personnes natural join categorie_perso where id_cat= 3";
		$lperso=pg_query($dbconn,$requete);

?>
