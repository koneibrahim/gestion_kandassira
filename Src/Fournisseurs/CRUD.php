<?php

	 $requete="select nom,prenom,tel,tel2,adresse FROM personnes natural join categorie_perso where id_cat= 2";
	 			$lfournisseur=pg_query($dbconn,$requete);
?>
