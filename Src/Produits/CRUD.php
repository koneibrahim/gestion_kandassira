<?php
if($_SESSION['group']=='3') {
if($_POST['mas']=='A')
	 {
	$nom_pro=$_POST['nom_pro'];
	$prix_vente=$_POST['prix_vente'];
	$id_catpro=$_POST['id_catpro'];
	$requete="insert into produits (nom_pro,prix_vente,id_catpro)";
	$requete.="values ('$nom_pro','$prix_vente','$id_catpro')";
		if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);

	 }

elseif($_POST['mas']=='M')
	 {
	$id_pro=$_POST['id_pro'];
	$nom_pro=$_POST['nom_pro'];
	$prix_vente=$_POST['prix_vente'];
	$id_catpro=$_POST['id_catpro'];
	$requete="update produits set nom_pro='$nom_pro',prix_vente='$prix_vente',id_catpro='$id_catpro'";
	$requete.=" where id_pro=$id_pro";
		if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);

	}

elseif($_POST['mas']=='S')
	{
	$id_pro=$_POST['id_pro'];
	$valider=$_POST['valider'];
	if($valider=='Oui') {
	$requete="delete from produits where id_pro=$id_pro";
	$resultat=pg_query($dbconn,$requete);
	 }
	}
   $requete="select id_pro,id_catpro,nom_pro,prix_vente,nom_catpro from produits
	  				 natural join categorie_pro order by id_pro desc ";
	$resultat=pg_query($dbconn,$requete);

	$requete7="select id_catpro,nom_catpro from categorie_pro";
	$lcatpro=pg_query($dbconn,$requete7);


}
?>
