<?php
if($_SESSION['group']=='3') {
	if($_POST['mas']=='A')
	 {
	$id_pres=$_POST['id_pres'];
	$nom_pres=$_POST['nom_pres'];
	$prix=$_POST['prix'];
	$requete="insert into prestations (nom_pres,prix)";
	$requete.=" values ('$nom_pres','$prix')";
			if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);
	 }

	              /*CRUD pour  Fmodifier */

elseif($_POST['mas']=='M')
	 {
	$id_pres=$_POST['id_pres'];
 	$nom_pres=$_POST['nom_pres'];
 	$prix=$_POST['prix'];
	$requete="update prestations set nom_pres='$nom_pres',prix='$prix'";
	$requete.="  where id_pres='$id_pres'";
			if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);
	 }

	 				  /*CRUD pour  Fsupprimer */

elseif($_POST['mas']=='S')
	{
	$id_pres=$_POST['id_pres'];
	$valider=$_POST['valider'];
 if($valider=='Oui') {
	$requete="delete from prestations where id_pres='$id_pres'";
	$resultat=pg_query($dbconn,$requete);

	 		}
	 	 }
	$requete="select * from prestations order by nom_pres ASC";
	$resultat=pg_query($dbconn,$requete);
}
?>
