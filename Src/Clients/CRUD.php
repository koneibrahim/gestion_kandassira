<?php
										/*  lajouter */
	
					$requete="select nom,prenom,tel,tel2,adresse FROM personnes natural join categorie_perso where id_cat= 1";
		 			$personnecli=pg_query($dbconn,$requete);

?>
