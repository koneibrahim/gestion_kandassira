<?php

		 $requete="select nom,prenom,poste,tel,adresse FROM personnes natural join categorie_perso where id_cat= 3";
		$personneperso=pg_query($dbconn,$requete);

?>
