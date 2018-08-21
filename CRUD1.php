<?php

if($_POST['amd']=='AU') {
	$nom_user=$_POST['nom_user'];
	$password=$_POST['password'];
	$_SESSION['erreur']='Erreur d\'authentification';
	$requete="select * from users where nom_user='$nom_user'";
	if($_POST['valider']=='valider')
	$resultat=pg_query($dbconn,$requete);
	$user=pg_fetch_assoc($resultat);
	if ($user['password']==md5($password)) {
     $_SESSION['utilisateur']='Identifie';

		 //----Declaration du group_users-----------
		 $_SESSION['group']=$user['id_g'];

		 	 /* echo '<div id="footer">';
    			echo 'Bienvenue dans votre compte';
				echo'</div>';*/

     $_SESSION['erreur']=' ';
        }
}
?>
