<?php
if($_SESSION['group']=='3') {
	if($_POST['mas']=='A')
	 {
	$nom_pro=$_POST['nom_pro'];
	$qte_pro=$_POST['qte_pro'];
	$requete="insert into produits (nom_pro,qte_pro)";
	$requete.="values ('$nom_pro',$qte_pro)";
		if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);
	 }
 elseif($_POST['mas']=='M')	 {
	$id_pro_orig=$_POST['id_pro_orig'];
	$id_pro=$_POST['id_pro'];
	$nom_pro=$_POST['nom_pro'];
	$qte_pro=$_POST['qte_pro'];
	$requete="update produits set nom_pro='$nom_pro',qte_pro='$qte_pro'";
	$requete.=" where id_pro='$id_pro_orig'";
			if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);
	 }
elseif($_POST['mas']=='S'){
	$id_pro=$_POST['id_pro'];
	$valider=$_POST['valider'];
	if($valider=='Oui') {
	$requete="delete from produits where id_pro='$id_pro'";
	$resultat=pg_query($dbconn,$requete);
	 }
	}
 // ----COMPOSANT-----------
if($_POST['mas']=='CA') {
	$id_ma=$_POST['id_ma'];
	$id_pro=$_POST['id_pro'];
	$nom_pro=$_POST['nom_pro'];
	$qte_compo=$_POST['qte_compo'];
	$requete="insert into composants (id_ma,qte_compo,id_pro)";
	$requete.=" values ($id_ma,$qte_compo,$id_pro)";
		if($_POST['valider']=='Valider')
	$cajouter=pg_query($dbconn,$requete);
	 }
 elseif($_POST['mas']=='CM'){
	$id_ma=$_POST['id_ma'];
	$id_pro=$_POST['id_pro'];
 	$nom_pro=$_POST['nom_pro'];
 	$nom_ma=$_POST['nom_ma'];
 	$qte_compo=$_POST['qte_compo'];
	$requete="update composants set qte_compo=$qte_compo where id_ma=$id_ma and id_pro=$id_pro";
			if($_POST['valider']=='Valider')
	$cmodifier=pg_query($dbconn,$requete);
	 }
elseif($_POST['mas']=='CS'){
	$id_ma=$_POST['id_ma'];
	$id_pro=$_POST['id_pro'];
	$valider=$_POST['valider'];
	if($valider=='Oui') {
	$requete="delete from composants where id_ma=$id_ma and id_pro=$id_pro";
	$csupprimer=pg_query($dbconn,$requete);
	 }
	}
	$requete="select * from produits order by nom_pro";
	$produit=pg_query($dbconn,$requete);

	 $requete="select id_ma,nom_ma,qte_compo from composants natural join matieres where id_pro=$id_pro order by nom_ma";
	 $composant=pg_query($dbconn,$requete);

	 $requete="select id_ma,nom_ma from matieres where id_ma not in (select id_ma from composants where id_pro=$id_pro)" ;
	 $ajouter=pg_query($dbconn,$requete);
 }
?>
