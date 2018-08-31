<?php
//-----VENTES
if($_POST['mas']=='VA')
	 {
		$date_ve=$_POST['date_ve'];
		$libele=$_POST['libele'];
		$id_po=$_POST['id_po'];
		$requete="insert into ventes (date_ve,libele,id_po)";
		$requete.=" values ('$date_ve','$libele',$id_po)";
			if($_POST['valider']=='Valider')
		$vajouter=pg_query($dbconn,$requete);
	}
elseif($_POST['mas']=='VM')
	 {
		$id_ve=$_POST['id_ve'];
		$id_po=$_POST['id_po'];
		$date_ve=$_POST['date_ve'];
		$libele=$_POST['libele'];
		$id_cli=$_POST['id_cli'];
		$requete="update ventes set date_ve='$date_ve',libele='$libele',id_po=$id_po";
		$requete.=" where id_ve=$id_ve";
				if($_POST['valider']=='Valider')
		$vmodifier=pg_query($dbconn,$requete);
	  }
elseif($_POST['mas']=='VS')
	 {
		$id_ve=$_POST['id_ve'];
		$valider=$_POST['valider'];
		if($valider=='Oui') {
		$requete="delete from ventes where id_ve=$id_ve";
		$vsupprimer=pg_query($dbconn,$requete);
	 }
	 }

 	 //-----CONTENU VENTE-----------

if($_POST['mas']=='CVA')
	 {
		$id_cve=$_POST['id_cve'];
		$id_ma=$_POST['id_ma'];
		$nom_ma=$_POST['nom_ma'];
		$qte_v=$_POST['qte_v'];
		$prix_v=$_POST['prix_v'];

		$id_pres=$_POST['id_pres'];
		$nom_pres_pres=$_POST['nom_pres'];

			//$rprix="select prix_pro from produits where id_pro=$id_pro";
			//$eprix=pg_query($dbconn,$rprix);
			//$ligne=pg_fetch_assoc($eprix);
			//$prix_pro=$ligne['prix_pro'];
			$requete11="insert into contenu_vente (id_ve,id_cve,id_ma,id_pres,nom_ma,nom_pres,qte_v,prix_v)
			values ($id_ve,$id_cve,$nom_pro,$qte_v,$prix_pro)";
if($_POST['valider']=='Valider')
	{
		$cvajouter=pg_query($dbconn,$requete11);

		$requete="update ventes set montant= t.smontant from (select sum(prix*qte_v) as smontant from
		contenu_vente where id_ve=$id_ve) as t where id_ve=$id_ve";
		$cajouter=pg_query($dbconn,$requete);
	}
  }





// -----LES DIFFERENTS SELECTS---------//

	 $requete="select id_ve,date_ve,libele,id_po,tel,nom,prenom from ventes natural join personnes order by id_ve desc";
      $listeve=pg_query($dbconn,$requete);

   $requete2="select id_ve,id_po,date_ve,libele,nom,prenom,tel,tel2,montant,montant_paye,montant_res,etat from
	            ventes natural join personnes where id_ve=$id_ve";
	    $vente=pg_query($dbconn,$requete2);

   $requete3="select id_po,nom,prenom,adresse from personnes";
      $lpersonne=pg_query($dbconn,$requete3);

	 $requete4="select id_ve,id_cve,id_ma,nom_ma,prix,qte_v,qte_liv from
	 		contenu_ve natural join matieres natural join prestations natural join ventes where id_ve=$id_ve ";
			$contenuve=pg_query($dbconn,$requete4);

   $requete5="select id_liv,id_ve,date_liv,libele from liv_vente";
			$livvente=pg_query($dbconn,$requete5);

   $requete6="select id_pro,id_ve,id_cve,id_cliv,nom_pro,qte_pro,qte_liv,id_liv
			 from contenu_liv_vente  join contenu_liv_vente using  (id_cve) join produits using(id_pro)  where id_liv=$id_liv order by nom_pro";
			$livraison=pg_query($dbconn,$requete6);

	 $requete7="select id_ve,id_pve,date_pve,libele,montant_pve from payvente where id_ve=$id_ve";
	 	  $payement=pg_query($dbconn,$requete7);

	 $requete9="select id_pro,nom_pro from produits" ;
	 	  $lproduit=pg_query($dbconn,$requete9);

	$requete10="select prix from produits" ;
			$lprix=pg_query($dbconn,$requete10);

	$requete11="select id_ma,prix_ma,nom_ma from matieres";
	 	 $larticle=pg_query($dbconn,$requete11);

		 $requete12="select id_pres,nom_pres,prix from prestations";
	 	 	 $lprestation=pg_query($dbconn,$requete12);
?>
