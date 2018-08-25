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

		 /*-----------Contenu Seminaires-------*/

		 if($_POST['mas']=='CA')
		 {
		 $id_ac=$_POST['id_s'];
		 $id_ma=$_POST['id_s'];
		 $libele=$_POST['libele'];
		 $date=$_POST['date'];
		 $rprix="select prix_ma from matieres where id_ma=$id_ma";
		 $eprix=pg_query($dbconn,$rprix);
		 $ligne=pg_fetch_assoc($eprix);
		 $prix_ma=$ligne['prix_ma'];
		 $requete="insert into contenu_acha (id_ma,qte_ma,id_ac,prix) values ($id_ma,$qte_ma,$id_ac,$prix_ma)";
		  if($_POST['valider']=='Valider')
		  {
		 	 $cajouter=pg_query($dbconn,$requete);

		 	 $requete="update achats set montant= t.smontant from (select sum(prix*qte_ma) as smontant from
		 	 contenu_acha where id_ac=$id_ac) as t where id_ac=$id_ac";
		 	 $cajouter=pg_query($dbconn,$requete);

		 	 $requete="update matieres set qte_vir=qte_vir+$qte_ma where id_ma=$id_ma";
		 		$resultat=pg_query($dbconn,$requete);

		  }

		 }

		 elseif($_POST['mas']=='CM')
		 {
		 $id_ac=$_POST['id_ac'];
		 $id_cac=$_POST['id_cac'];
		 $qte_ma=$_POST['qte_ma'];
		 $id_ma=$_POST['id_ma'];
		 $qte_ma_orig=$_POST['qte_ma_orig'];
		 $requete="update contenu_acha set qte_ma=$qte_ma";
		 $requete.=" where id_cac=$id_cac";
		 	 if($_POST['valider']=='Valider'){
		 			 $cmodifier=pg_query($dbconn,$requete);
		 			 $requete="update matieres set qte_vir=qte_vir+$qte_ma-$qte_ma_orig where id_ma=$id_ma";
		 			 $resultat=pg_query($dbconn,$requete);

		 	 }
		 }

		 elseif($_POST['mas']=='CS')
		 {
		 $id_ac=$_POST['id_ac'];
		 $id_cac=$_POST['id_cac'];
		 $qte_ma=$_POST['qte_ma'];
		 $id_ma=$_POST['id_ma'];
		 $valider=$_POST['valider'];
		 if($valider=='Oui') {
		 		 $requete="delete from contenu_acha where id_cac=$id_cac";
		 		 $asupprimer=pg_query($dbconn,$requete);
		 		 $requete="update matieres set qte_vir=qte_vir-$qte_ma where id_ma=$id_ma";
		 			$resultat=pg_query($dbconn,$requete);

		 }
		 }


		 /*---AUTRE REQUETTES SELECT----------------*/

	$requete="select id_s,libele,date from seminaires";
	$listesemi=pg_query($dbconn,$requete);

	$requete2="select id_s,libele,date,heure,lieu,montant,montant_paye from seminaires  where id_s=$id_s";
	$seminaire=pg_query($dbconn,$requete2);

	$requete3="select id_s,id_sec,id_cli,id_pres,id_m,prix from
	 contenu_semi natural join clients natural join seminaires natural join prestations where id_s=$id_s";
	$contenusemi=pg_query($dbconn,$requete3);
}
?>
