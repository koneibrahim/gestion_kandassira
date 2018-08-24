<?php

/*CRUD pour  Sajouter */

if($_SESSION['group']=='3') {
	if($_POST['mas']=='SA')
	 {
		$id_s=$_POST['id_s'];
	 	$libele=$_POST['libele'];
	 	$date=$_POST['date'];
	 	$heure=$_POST['heure'];
	 	$lieu=$_POST['lieu'];
	$requete="insert into seminaires (libele,date,heure,lieu)";
	$requete.=" values ('$libele','$date','$heure','$lieu')";
			if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);
	 }

	              /*CRUD pour  Smodifier */

elseif($_POST['mas']=='SM')
	 {
		$id_s=$_POST['id_s'];
 		$libele=$_POST['libele'];
		$date=$_POST['date'];
		$heure=$_POST['heure'];
 		$lieu=$_POST['lieu'];
	$requete="update seminaires set libele='$libele',date='$date',heure='$heure',lieu='$lieu'";
	$requete.="  where id_s='$id_s'";
			if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);
	 }

	 				  /*CRUD pour  Ssupprimer */

elseif($_POST['mas']=='SS')
	{
	$id_s=$_POST['id_s'];
	$valider=$_POST['valider'];
 if($valider=='Oui') {
	$requete="delete from seminaires where id_s='$id_s'";
	$resultat=pg_query($dbconn,$requete);

	 		}
	 	 }

		 /*---AUTRE REQUETTES SELECT----------------*/

	$requete="select id_s,libele,date from seminaires";
	$listesemi=pg_query($dbconn,$requete);

	$requete2="select id_s,libele,date,heure,lieu,montant,montant_paye from seminaires  where id_s=$id_s";
	$seminaire=pg_query($dbconn,$requete2);
}
?>
