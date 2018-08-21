<?php
if($_SESSION['group']=='3'||$_SESSION['group']=='2') {

	  $requete="select * from matieres order by unite asc";
	  $resultat=pg_query($dbconn,$requete);
}

?>
