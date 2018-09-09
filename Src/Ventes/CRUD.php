<?php
//-----VENTES----------------
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
			$id_ve=$_POST['id_ve'];
			$id_pro=$_POST['id_pro'];
			$prix_v=$_POST['prix_v'];
			$qte_v=$_POST['qte_v'];
			$requete="select prix_v from contenu_vente where id_pro=$id_pro";
			$pro=pg_query($dbconn,$requete);
		  $ligne=pg_fetch_assoc($pro);
			$prix_v=$ligne['prix_v'];
			if($qte_v >=10){
					//$prix_v=$prix_v*5/100;
				$requete="insert into contenu_vente (id_ve,id_pro,qte_v,prix_v)";
				$requete.=" values ($id_ve,$id_pro,$qte_v,$prix_v*0.95)";
		  }
	else
		   {
				$requete="insert into contenu_vente (id_ve,id_pro,qte_v,prix_v)";
				$requete.=" values ($id_ve,$id_pro,$qte_v,$prix_v)";
		   }
				if($_POST['valider']=='Valider')
			$CVajouter=pg_query($dbconn,$requete);
			}
	elseif($_POST['mas']=='CVM')
		  {
			$id_cve=$_POST['id_cve'];
			$id_ve=$_POST['id_ve'];
			$id_pro=$_POST['id_pro'];
			$prix_v=$_POST['prix_v'];
			$qte_v=$_POST['qte_v'];
			$requete="update contenu_vente set id_pro=$id_pro,qte_v=$qte_v,prix_v=$prix_v";
			$requete.=" where id_pro=$id_pro";
				if($_POST['valider']=='Valider')
			$vmodifier=pg_query($dbconn,$requete);
			 }
	elseif($_POST['mas']=='CVS')
			{
			$id_cve=$_POST['id_cve'];
			$id_ve=$_POST['id_ve'];
			$valider=$_POST['valider'];
				if($valider=='Oui') {
			$requete="delete from contenu_vente where id_pro=$id_pro";
			$vsupprimer=pg_query($dbconn,$requete);
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

			 $requete4="select id_cve,id_ve,id_pro,nom_pro,qte_v,qte_liv,prix_v from
			 		        contenu_vente natural join produits natural join ventes  where id_ve=$id_ve ";
					$contenuve=pg_query($dbconn,$requete4);

			 $requete5="select id_pro,nom_pro from  produits  ";
		 		  $lproduit=pg_query($dbconn,$requete5);

		  /* $requete5="select id_liv,id_ve,date_liv,libele from liv_vente";
					$livvente=pg_query($dbconn,$requete5);

		   $requete6="select id_pro,id_ve,id_cve,id_cliv,nom_pro,qte_pro,qte_liv,id_liv
					 from contenu_liv_vente  join contenu_liv_vente using  (id_cve) join produits using(id_pro)  where id_liv=$id_liv order by nom_pro";
					$livraison=pg_query($dbconn,$requete6);

			 $requete7="select id_ve,id_pve,date_pve,libele,montant_pve from payvente where id_ve=$id_ve";
			 	  $payement=pg_query($dbconn,$requete7);

			 $requete11="select id_ma,prix_ma,nom_ma from matieres";
			 	  $larticle=pg_query($dbconn,$requete11);
     */

?>
