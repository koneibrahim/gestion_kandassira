<?php
if($_SESSION['group']=='3') {
	if($_POST['mas']=='A')
	 {
	$id_p=$_POST['id_p'];
	$nom_p=$_POST['nom_p'];
	$prenom_p=$_POST['prenom_p'];
	$fonction=$_POST['fonction'];
	$tel=$_POST['tel'];
	$adresse=$_POST['adresse'];
	$requete="insert into personnels (nom_p,prenom_p,fonction,tel,adresse)";
	$requete.=" values ('$nom_p','$prenom_p','$fonction','$tel','$adresse')";
			if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);
	 }

	              /*CRUD pour  Fmodifier */

elseif($_POST['mas']=='M')
	 {
		$id_p=$_POST['id_p'];
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
	$id_p=$_POST['id_p'];
	$valider=$_POST['valider'];
 if($valider=='Oui') {
	$requete="delete from personnels where id_p='$id_p'";
	$resultat=pg_query($dbconn,$requete);

	 		}
	 	 }
	$requete="select * from personnels order by id_p ASC";
	$resultat=pg_query($dbconn,$requete);
}
?>
