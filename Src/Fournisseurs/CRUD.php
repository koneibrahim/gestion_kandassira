<?php
if($_SESSION['group']=='3') {
	if($_POST['mas']=='A')
	 {
	$id_fo=$_POST['id_fo'];
	$nom_fo=$_POST['nom_fo'];
	$telephone=$_POST['telephone'];
	$addresse=$_POST['addresse'];
	$requete="insert into fournisseurs (nom_fo,telephone,addresse)";
	$requete.=" values ('$nom_fo','$telephone','$addresse')";
			if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);
	 }

	              /*CRUD pour  Fmodifier */

elseif($_POST['mas']=='M')
	 {
	$id_fo=$_POST['id_fo'];
	$nom_fo=$_POST['nom_fo'];
	$telephone=$_POST['telephone'];
	$addresse=$_POST['addresse'];
	$requete="update fournisseurs set nom_fo='$nom_fo',telephone='$telephone',addresse='$addresse'";
	$requete.="  where id_fo='$id_fo'";
			if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);
	 }

	 				  /*CRUD pour  Fsupprimer */

elseif($_POST['mas']=='S')
	{
	$id_fo=$_POST['id_fo'];
	$valider=$_POST['valider'];
 if($valider=='Oui') {
	$requete="delete from fournisseurs where id_fo='$id_fo'";
	$resultat=pg_query($dbconn,$requete);

	 		}
	 	 }
	$requete="select * from fournisseurs order by id_fo";
	$resultat=pg_query($dbconn,$requete);
}
?>
