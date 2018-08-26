<?php

$requete="select id_pro,nom_pro,prix FROM produits natural join categorie_pro where id_catpro= 2";
$proprestation=pg_query($dbconn,$requete);

?>
