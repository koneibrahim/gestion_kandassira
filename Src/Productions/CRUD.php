
<?php
    // PRODUCTION

     if($_POST['mas']=='A')
	 {
$id_pro=$_POST['id_pro'];
$date_prod=$_POST['date_prod'];
$libele=$_POST['libele'];
$qte=$_POST['qte'];
$requete="insert into productions (date_prod,libele,qte,id_pro)";
$requete.="values ('$date_prod','$libele',$qte,$id_pro) returning id_prod";
		if($_POST['valider']=='Valider'){
			if($resultat=pg_query($dbconn,$requete))
			{
				$ligne=pg_fetch_assoc($resultat);
				$id_prod=$ligne['id_prod'];

				$requete="select qte_pro from produits where id_pro=$id_pro";
				$resultat=pg_query($dbconn,$requete);
				$ligne=pg_fetch_assoc($resultat);
				$qte_pro=$ligne['qte_pro'];

				$requete="select id_ma,qte_compo from composants where id_pro=$id_pro";
				$resultat=pg_query($dbconn,$requete);
				while($ligne=pg_fetch_assoc($resultat)) {
					$id_ma=$ligne['id_ma'];
					$qte_compo=$ligne['qte_compo'];
					$requete="insert into contenu_prod (id_prod,id_ma,qte) values ($id_prod,$id_ma,$qte*$qte_compo/$qte_pro)";
					$resultat1=pg_query($dbconn,$requete);
					$requete="update matieres set qte_vir=qte_vir-($qte*$qte_compo/$qte_pro) where id_ma=$id_ma";
	 	         $resultat2=pg_query($dbconn,$requete);
				}
			}

		 }
	}


elseif($_POST['mas']=='M')
	 {
	$id_prod=$_POST['id_prod'];
	$date_prod=$_POST['date_prod'];
	$libele=$_POST['libele'];
	$qte=$_POST['qte'];
	$requete="update productions set date_prod='$date_prod',libele='$libele',qte=$qte";
	$requete.=" where id_prod=$id_prod";
			if($_POST['valider']=='Valider')
	$resultat=pg_query($dbconn,$requete);

	 }

elseif($_POST['mas']=='S')
	{
	$id_prod=$_POST['id_prod'];
	$valider=$_POST['valider'];
	if($valider=='Oui') {
	$requete="delete from productions where id_prod='$id_prod'";
	$resultat=pg_query($dbconn,$requete);
	 }
  }

 elseif($_POST['mas']=='V')
	 {
	$id_prod=$_POST['id_prod'];
	$etat=$_POST['etat'];
  	$valider=$_POST['valider'];
	if($valider=='Oui') {
	$requete="update  productions set etat=1 where id_prod=$id_prod";
	$avalider=pg_query($dbconn,$requete);

	         $requete="select qte_pro,id_pro,qte from produits join productions using (id_pro) where id_prod=$id_prod";
				$resultat=pg_query($dbconn,$requete);
				$ligne=pg_fetch_assoc($resultat);
				$qte_pro=$ligne['qte_pro'];
				$id_pro=$ligne['id_pro'];
				$qte=$ligne['qte'];
	         $requete="select id_ma,qte_compo from composants where id_pro=$id_pro";
	         $resultat=pg_query($dbconn,$requete);
				while($ligne=pg_fetch_assoc($resultat)) {
					$id_ma=$ligne['id_ma'];
					$qte_compo=$ligne['qte_compo'];
					$requete="update matieres set qte_reel=qte_reel-($qte*$qte_compo/$qte_pro)
					 where id_ma=$id_ma";
	 	         $resultat2=pg_query($dbconn,$requete);
				}
	 }
	 }

    $requete="select id_prod,date_prod,libele,etat from productions order by date_prod ";
	 $liste=pg_query($dbconn,$requete);

	 $requete2="select id_prod,libele,date_prod,qte,etat from productions where id_prod='$id_prod'";
	 $production=pg_query($dbconn,$requete2);

	 $requete3="select id_cprod,id_prod,id_ma,nom_ma,qte from contenu_prod natural join matieres
	 				 where id_prod=$id_prod";
	 $cproduction=pg_query($dbconn,$requete3);



	 $requete="select nom_ma from matieres" ;
	 $ajouter=pg_query($dbconn,$requete);

	 $requete="select * from produits order by nom_pro" ;
	 $lproduit=pg_query($dbconn,$requete);	
?>
