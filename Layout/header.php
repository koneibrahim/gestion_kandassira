
<?php
 session_start();
	echo '<!DOCTYPE html>';
	echo '<html>';
	echo '<head>';
	echo '<meta charset="utf-8" />';
	echo '<title></title>';

  echo '<link href="/Bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">';
  echo '<script type="text/javascript" src="/Bootstrap/js/bootstrap.js"> </script>';
	echo '<link href="/Style/style.css" type="text/css" rel="stylesheet">';

	echo '</head>';
	echo '<body>';

	$dbconn=pg_connect("dbname=kandassira user=ikone password=okokok host=localhost port=5432");

	echo '<div id="header">';
	echo '<h1 class="titreh1"> G-KANDASSIRA  </h1>';
	echo '<h5 class="titreh5">HAMDALLAYE ACI 2000  Tel: 20 22 46 00 / 20 71 06 60
	Site : www.kandasira.com</h5>';
	echo '</div>';
?>
