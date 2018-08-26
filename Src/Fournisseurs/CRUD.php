<?php

		 $requete="select nom,prenom,tel,adresse FROM personnes natural join categorie_perso where id_cat= 2";
	 	$personnefour=pg_query($dbconn,$requete);
?>
