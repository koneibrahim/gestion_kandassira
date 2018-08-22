<?php
if($_SESSION['group']=='3') {
	if($_POST['mas']=='A')
	 {
	$id_res=$_POST['id_res'];
	$id_cli=$_POST['id_cli'];
	$id_p=$_POST['id_p'];
	$id_pres=$_POST['id_pres'];
	$date_res=$_POST['date_res'];
	$libele=$_POST['libele'];
	$date_tr=$_POST['date_tr'];
	$lieu=$_POST['lieu'];
	$requete="insert into reservations (id_res,id_cli,id_p,id_pres,date_res,libele,date_tr,lieu)";
	$requete.=" values ($id_res','$id_cli','$id_p',$id_pres','$date_res','$libele','$id_cli','$id_p','$id_pres','$lieu')";
			if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);
	 }

	              /*CRUD pour  Fmodifier */

elseif($_POST['mas']=='M')
	 {
		$id_res=$_POST['id_res'];
	 	$nom_p=$_POST['nom_p'];
	 	$prenom_p=$_POST['prenom_p'];
	 	$fonction=$_POST['fonction'];
	 	$tel=$_POST['tel'];
	 	$adresse=$_POST['adresse'];
	$requete="update personnels set nom_p='$nom_p',prenom_p='$prenom_p',fonction='$fonction',tel='$tel',adresse='$adresse'";
	$requete.="  where id_p='$id_p'";
			if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);
	 }

	 				  /*CRUD pour  Fsupprimer */

elseif($_POST['mas']=='S')
	{
	$id_res=$_POST['id_res'];
	$valider=$_POST['valider'];
 if($valider=='Oui') {
	$requete="delete from personnels where id_p='$id_p'";
	$resultat=pg_query($dbconn,$requete);

	 		}
	 	 }
	//$requete="select *  from reservations order by date_res ASC";
	//$resultat2=pg_query($dbconn,$requete);
	$requete7="select id_cli,nom_cli from clients";
	$lclient=pg_query($dbconn,$requete7);

	$requete8="select id_pres,nom_pres from prestations";
	$lprestation=pg_query($dbconn,$requete8);

	$requete9="select id_p,nom_p from personnels";
	$lpersonnel=pg_query($dbconn,$requete9);

	$requete10="select * from prestations";
	$lpres=pg_query($dbconn,$requete10);

	$requete="select id_res,id_cli,id_pres,id_p,date_res,libele,date_tr,lieu,nom_cli,pre_cli,tel
	from reservations natural join clients  order by id_res";
	$reservation=pg_query($dbconn,$requete);

}
?>
