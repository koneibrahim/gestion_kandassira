<?php
if($_SESSION['group']=='3') {
	if($_POST['mas']=='A')
	 {
	$id_m=$_POST['id_m'];
	$nom_m=$_POST['nom_m'];
	$prenom_m=$_POST['prenom_m'];
	//$contact=$_POST['contact'];
	$nom_f=$_POST['nom_f'];
	$prenom_f=$_POST['prenom_f'];
	$adresse=$_POST['adresse'];
	$requete="insert into mariages (nom_m,prenom_m,nom_f,prenom_f,adresse)";
	$requete.=" values ('$nom_m','$prenom_m','$nom_f','$prenom_f','$adresse')";
			if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);
	 }

	              /*CRUD pour  Fmodifier */

elseif($_POST['mas']=='M')
	 {
		 $id_m=$_POST['id_m'];
 		$nom_m=$_POST['nom_m'];
 		$prenom_m=$_POST['prenom_m'];
 		//$contact=$_POST['contact'];
 		$nom_f=$_POST['nom_f'];
 		$prenom_f=$_POST['prenom_f'];
 		$adresse=$_POST['adresse'];
	$requete="update mariages set nom_m='$nom_m',prenom_m='$prenom_m',nom_f='$nom_f',prenom_f='$prenom_f',adresse='$adresse'";
	$requete.="  where id_m='$id_m'";
			if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);
	 }

	 				  /*CRUD pour  Fsupprimer */

elseif($_POST['mas']=='S')
	{
	$id_m=$_POST['id_m'];
	$valider=$_POST['valider'];
 if($valider=='Oui') {
	$requete="delete from mariages where id_m='$id_m'";
	$resultat=pg_query($dbconn,$requete);

	 		}
	 	 }
		 $requete="select nom,prenom,tel,tel2,adresse,nom_f,prenom_f,date FROM personnes natural join categorie_perso where id_cat= 4";
	 	$personnemari=pg_query($dbconn,$requete);
}
?>
