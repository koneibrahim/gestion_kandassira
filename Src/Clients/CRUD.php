<?php
										/*  lajouter */
			if($_POST['mas']=='LA')
				 {
				$id_cli=$_POST['id_cli'];
				$nom_cli=$_POST['nom_cli'];
				$pre_cli=$_POST['pre_cli'];
				$tel=$_POST['tel'];
				$tel2=$_POST['tel2'];
				$adresse_cli=$_POST['adresse_cli'];
				$requete="insert into clients (nom_cli,pre_cli,tel,tel2,adresse_cli)";
				$requete.=" values ('$nom_cli','$pre_cli','$tel','$tel2','$adresse_cli')";
						if($_POST['valider']=='Valider')
				$resultat=pg_query($dbconn,$requete);
				 }
				             /*  lmodifier */
			elseif($_POST['mas']=='LM')
				 {
			  $id_cli=$_POST['id_cli'];
			  $nom_cli=$_POST['nom_cli'];
				$pre_cli=$_POST['pre_cli'];
			  $tel=$_POST['tel'];
				$tel2=$_POST['tel2'];
				$adresse_cli=$_POST['adresse_cli'];
				$requete2="update clients set nom_cli='$nom_cli',pre_cli='$pre_cli',tel='$tel',tel2='$tel2',adresse_cli='$adresse_cli'";
				$requete2.="  where id_cli='$id_cli'";
						if($_POST['valider']=='Valider')
				$resultat=pg_query($dbconn,$requete2);
				 }
				 				  /*  lsupprimer */
			elseif($_POST['mas']=='LS')	{
			  $id_cli=$_POST['id_cli'];
				$valider=$_POST['valider'];
			 if($valider=='Oui') {
				$requete3="delete from clients where id_cli='$id_cli'";
				$resultat=pg_query($dbconn,$requete3);
				 		}
				 	 }
					$requete="select nom,prenom,tel,tel2,adresse FROM personnes natural join categorie_perso where id_cat= 1";
		 			$personnecli=pg_query($dbconn,$requete);

?>
