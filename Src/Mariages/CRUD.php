<?php

		 $requete="select nom,prenom,tel,tel2,adresse,nom_f,prenom_f,date FROM personnes natural join categorie_perso where id_cat= 4";
	 	$personnemari=pg_query($dbconn,$requete);

?>
