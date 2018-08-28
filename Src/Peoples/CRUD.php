<?php
if($_SESSION['group']=='3') {
	if($_POST['mas']=='A')
	 {
	$id_po=$_POST['id_po'];
	$id_cat=$_POST['id_cat'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$poste=$_POST['poste'];
	$tel=$_POST['tel'];
	$tel2=$_POST['tel2'];
	$nom_f=$_POST['nom_f'];
	$prenom_f=$_POST['prenom_f'];
	$adresse=$_POST['adresse'];
	$requete="insert into personnes (id_cat,nom,prenom,poste,tel,tel2,nom_f,prenom_f,adresse)";
	$requete.=" values ('$id_cat','$nom','$prenom','$poste','$tel','$tel2','$nom_f','$prenom_f','$adresse')";
			if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);
	 }

	              /*CRUD pour  Fmodifier */

elseif($_POST['mas']=='M')
	 {
		$id_po=$_POST['id_po'];
 		$id_cat=$_POST['id_cat'];
 		$nom=$_POST['nom'];
 		$prenom=$_POST['prenom'];
		//$poste=$_POST['poste'];
 		$tel=$_POST['tel'];
		$tel2=$_POST['tel2'];
 		$adresse=$_POST['adresse'];
	$requete="update personnes set id_cat='$id_cat',nom='$nom',prenom='$prenom',tel='$tel',tel2='$tel2',adresse='$adresse'";
	$requete.="  where id_po='$id_po'";
			if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);
	 }

	 				  /*CRUD pour  Fsupprimer */

elseif($_POST['mas']=='S')
	{
	$id_po=$_POST['id_po'];
	$valider=$_POST['valider'];
 if($valider=='Oui') {
	$requete="delete from personnes where id_po='$id_po'";
	$resultat=pg_query($dbconn,$requete);

	 		}
	 	 }

	$requete="select id_po,nom,prenom,nom_cat,tel,tel2,adresse FROM personnes
				natural join categorie_perso order by id_po desc ";
	 		$lpersonne=pg_query($dbconn,$requete);

		$requete="select id_cat,nom_cat from categorie_perso";
		 	 $lcategorie=pg_query($dbconn,$requete);

		$requete7="select id_cat,nom_cat from categorie_perso";
			 $lcatperso=pg_query($dbconn,$requete7);
}
?>
