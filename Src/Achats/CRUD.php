<?php

	if($_SESSION['group']=='3'||$_SESSION['group']=='2') {
		//------ACHAT-------
	if($_POST['mas']=='AA')
		 {
		$date_ac=$_POST['date_ac'];
		$libele=$_POST['libele'];
		$id_po=$_POST['id_po'];
		$requete="insert into achats (date_ac,libele,id_po)";
		$requete.=" values ('$date_ac','$libele',$id_po)";
			if($_POST['valider']=='Valider')
		$aajouter=pg_query($dbconn,$requete);
		 }
	elseif($_POST['mas']=='AM')
		 {
		$id_ac=$_POST['id_ac'];
		$id_po=$_POST['id_po'];
		$date_ac=$_POST['date_ac'];
		$libele=$_POST['libele'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$requete="update achats set date_ac='$date_ac',libele='$libele',id_po=$id_po";
		$requete.=" where id_ac=$id_ac";
				if($_POST['valider']=='Valider')
		$amodifier=pg_query($dbconn,$requete);
		  }
	elseif($_POST['mas']=='AS')
		 {
		$id_ac=$_POST['id_ac'];
		$valider=$_POST['valider'];
		if($valider=='Oui') {
		$requete="delete from achats where id_ac=$id_ac";
		$asupprimer=pg_query($dbconn,$requete);
		 }
		 }

		 	  	 //-----VALIDATION--------------
	elseif($_POST['mas']=='V')
		 {
		$id_ac=$_POST['id_ac'];
		$etat=$_POST['etat'];
		$valider=$_POST['valider'];
		if($valider=='Oui') {
		$requete="update  achats set etat=1 where id_ac=$id_ac";
		$avalider=pg_query($dbconn,$requete);
		  }
		 }

	 	 //-----CONTENU ACHAT-----------

	 	 if($_POST['mas']=='CA')
		 {
		$id_ac=$_POST['id_ac'];
		$id_pro=$_POST['id_pro'];
		$prix_acha=$_POST['prix_acha'];
		$qte_pro=$_POST['qte_pro'];
		$requete="insert into contenu_acha (id_ac,id_pro,prix_acha,qte_pro)";
		$requete.=" values ($id_ac,$id_pro,$prix_acha,$qte_pro)";
			if($_POST['valider']=='Valider')
		$resultat=pg_query($dbconn,$requete);
		//$resultat=pg_query($dbconn, "update  achats set montant=montant+prix_acha*qte_pro  where id_ac=$id_ac");
		 }
	elseif($_POST['mas']=='CM')
		 {
		$id_cac=$_POST['id_cac'];
		$id_ac=$_POST['id_ac'];
		$id_pro=$_POST['id_pro'];
		$prix_acha=$_POST['prix_acha'];
		$qte_pro=$_POST['qte_pro'];
		$requete="update contenu_acha set id_pro=$id_pro,qte_pro=$qte_pro,prix_acha=$prix_acha";
		$requete.=" where id_pro=$id_pro";
				if($_POST['valider']=='Valider')
			$cmodifier=pg_query($dbconn,$requete);
		 }
		 elseif($_POST['mas']=='CS')
	 		 {
			$id_cac=$_POST['id_cac'];
	 		$id_ac=$_POST['id_ac'];
			$id_pro=$_POST['id_pro'];
			$qte_pro=$_POST['qte_pro'];
	 		$valider=$_POST['valider'];
	 		if($valider=='Oui') {
	 		$requete="delete from contenu_acha where id_cac=$id_cac";
	 		$asupprimer=pg_query($dbconn,$requete);
	 		 }
	 		 }
	 	  	 //----------LIVRAISONS-----------

	 	if($_POST['mas']=='LVA')
		 {
	  $id_liv=$_POST['id_liv'];
		$id_ac=$_POST['id_ac'];
		$date_liv=$_POST['date_liv'];
		$libele=$_POST['libele'];
		$requete="insert into livraisons (id_ac,date_liv,libele) values ($id_ac,'$date_liv','$libele') returning id_liv" ;
				if($_POST['valider']=='Valider'){
					$lajouter=pg_query($dbconn,$requete);
					$ligne=pg_fetch_assoc($lajouter);
					$id_liv=$ligne['id_liv'];
					$requetel="select id_cac from contenu_acha where id_ac=$id_ac and qte_pro>qte_liv";
					$lcontenu=pg_query($dbconn,$requetel);
					while($lignel=pg_fetch_assoc($lcontenu)) {
						$id_cac=$lignel['id_cac'];
						$requeteli="insert into contenu_liv (id_liv,id_cac) values ($id_liv,$id_cac)";
						$rcontenu=pg_query($dbconn,$requeteli);
				}
		 }
	}
	elseif($_POST['mas']=='LVM')
		 {
		$id_ac=$_POST['id_ac'];
		$id_liv=$_POST['id_liv'];
		$date_liv=$_POST['date_liv'];
		$libele=$_POST['libele'];
		$requetec=" update livraisons set date_liv='$date_liv',libele='$libele'";
		$requetec.=" where id_ac=$id_ac ";
			if($_POST['valider']=='Valider')
		$lvmodifier=pg_query($dbconn,$requetec);
		}
	elseif($_POST['mas']=='LVS')
		 {
		$id_ac=$_POST['id_ac'];
		$id_liv=$_POST['id_liv'];
		$valider=$_POST['valider'];
			if($valider=='Oui') {
		$requete="delete from livraisons where id_liv=$id_liv";
		$asupprimer=pg_query($dbconn,$requete);
		 }
		 }

			//-------MODIFICTAION CONTENU LIVRAISON--------

	elseif($_POST['mas']=='LM')
		 {
		$id_ac=$_POST['id_ac'];
		$id_liv=$_POST['id_liv'];
		$id_pro=$_POST['id_pro'];
		$id_cliv=$_POST['id_cliv'];
		$id_cac=$_POST['id_cac'];
		$qte_l=$_POST['qte_l'];
		$qte_liv=$_POST['qte_liv'];
		$qte_l_orig=$_POST['qte_l_orig'];
		if($_POST['valider']=='Valider'){
			$req = "update contenu_liv set qte_l=$qte_l where id_cliv=$id_cliv";
			$req=pg_query($dbconn,$req);
			$req=pg_query($dbconn,"update contenu_acha set qte_liv=qte_liv-$qte_l_orig+$qte_l where id_cac=$id_cac");

		$eliv=pg_query($dbconn,"select count(*) as nb from contenu_acha where id_ac=$id_ac and qte_liv<>0");
		$leliv=pg_fetch_assoc($eliv);
		if($leliv['nb']!=0) $r=pg_query($dbconn,"update achats set etat_liv='P' where id_ac=$id_ac");
		$eliv=pg_query($dbconn,"select count(*) as nb from contenu_acha where id_ac=$id_ac and qte_liv<qte_pro");
		$leliv=pg_fetch_assoc($eliv);
		if($leliv['nb']==0) $r=pg_query($dbconn,"update achats set etat_liv='T' where id_ac=$id_ac");
	 	}
	 	}
	 //------------PAYEMENT----------------
	  if($_POST['mas']=='PA')
		 {
		$id_ac=$_POST['id_ac'];
		$date_pay=$_POST['date_pay'];
		$somme=$_POST['somme'];
		$agent=$_POST['agent'];
		$requete="insert into payements (id_ac,date_pay,somme,agent) values ($id_ac,'$date_pay',$somme,'$agent')";
			if($_POST['valider']=='Valider'){
				if(pg_query($dbconn,"update achats set montant_paye=montant_paye+$total where id_ac=$id_ac")) {
				$pajouter=pg_query($dbconn,$requete);
				}
			}
		 }

	elseif($_POST['mas']=='PM')
		 {
		$id_ac=$_POST['id_ac'];
		$id_pay=$_POST['id_pay'];
		$date_pay=$_POST['date_pay'];
		$somme=$_POST['somme'];
		$requete="update payements set somme=$somme,date_pay='$date_pay',agent='$agent' where id_pay=$id_pay ";
				if($_POST['valider']=='Valider')
				if(pg_query($dbconn,"update achats set montant_paye=montant_paye+$total where id_ac=$id_ac"))
		$pmodifier=pg_query($dbconn,$requete);
		 }
	elseif($_POST['mas']=='PS')
		 {
		$id_pay=$_POST['id_pay'];
		$valider=$_POST['valider'];
		if($valider=='Oui') {
		$requete="delete from payements where id_pay=$id_pay";
		$lsupprimer=pg_query($dbconn,$requete);
		 }
		 }
	 $requete="select id_ac,date_ac,libele,id_po,nom,prenom,tel from achats natural join
		 			personnes order by id_ac desc limit 50";
		 	$listeac=pg_query($dbconn,$requete);

	 $requete="select id_ac,id_po,nom,prenom,date_ac,libele,nom,montant,montant_paye,etat_liv,etat
				from achats natural join personnes where id_ac=$id_ac";
			 $achat=pg_query($dbconn,$requete);

	 $requete2="select id_ac,id_po,nom,prenom,date_ac,libele,nom,montant,montant_paye,etat_liv,etat,
				 sum(prix_acha*qte_pro) as total from	achats natural join personnes natural join contenu_acha
			    where id_ac=$id_ac group by id_ac,id_po,nom,prenom,date_ac,libele,montant,montant_paye,etat_liv,etat";
	  		  $lachat=pg_query($dbconn,$requete2);

	 $requete3="select id_cac,id_pro,nom_pro,prix_acha,qte_pro,prix_acha*qte_pro as montant,qte_liv
		 			from contenu_acha natural join produits where id_ac=$id_ac order by nom_pro desc ";
				$contenuac=pg_query($dbconn,$requete3);

	 $requete4="select id_po,nom,prenom from personnes order by nom asc";
		 		$lfournisseur=pg_query($dbconn,$requete4);

	 $requete5="select * from  produits natural join categorie_pro where id_catpro=1 ";
		 		$lproduit=pg_query($dbconn,$requete5);

 	 $requete6="select id_ac,id_liv,date_liv,libele from livraisons where id_ac=$id_ac";
		 		$listeliv=pg_query($dbconn,$requete6);

	 $requete7="select id_liv,id_cac,id_cliv,id_ac,nom_pro,qte_pro,qte_l from contenu_liv
		 			natural join contenu_acha natural join produits where id_ac=$id_ac; ";
		 		$livraison=pg_query($dbconn,$requete7);

     $requete8="select id_pay,id_ac,date_pay,somme,agent from payements natural join
		 			achats where id_ac=$id_ac";
		 		$payement=pg_query($dbconn,$requete8);

     $requete9="select id_ac,libele,date_ac from achats where id_ac=$id_ac" ;
		 		$pachat=pg_query($dbconn,$requete9);
      /*
		 $requete12="select id_ac, sum(montant) from achats group by id_ac";
		 $tachat=pg_query($dbconn,$requete12);    */
	 }
	?>
