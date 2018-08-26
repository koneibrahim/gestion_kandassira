<?php
if($_SESSION['group']=='3') {
if($_POST['mas']=='A')
	 {
	$nom_ma=$_POST['nom_ma'];
	$unite=$_POST['unite'];
	$prix_ma=$_POST['prix_ma'];
	$requete="insert into matieres (nom_ma,unite,prix_ma)";
	$requete.="values ('$nom_ma','$unite',$prix_ma)";
		if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);

	 }

elseif($_POST['mas']=='M')
	 {
	$id_ma=$_POST['id_ma'];
	$nom_ma=$_POST['nom_ma'];
	$unite=$_POST['unite'];
	$prix_ma=$_POST['prix_ma'];
	$requete="update matieres set nom_ma='$nom_ma',unite='$unite',prix_ma=$prix_ma";
	$requete.=" where id_ma=$id_ma";
		if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);

	}

elseif($_POST['mas']=='S')
	{
	$id_ma=$_POST['id_ma'];
	$valider=$_POST['valider'];
	if($valider=='Oui') {
	$requete="delete from matieres where id_ma=$id_ma";
	$resultat=pg_query($dbconn,$requete);
	 }
	}
   $requete="select nom_pro,nom_catpro from produits  natural join categorie_pro ";
	$resultat=pg_query($dbconn,$requete);
}
?>
