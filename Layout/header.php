
<?php
 session_start();
	echo '<!DOCTYPE html>';
	echo '<html>';
	echo '<head>';
	echo '<meta charset="utf-8" />';
	echo '<title></title>';
	echo '<link href="/Style/style.css" type="text/css" rel="stylesheet">';
	echo '</head>';
	echo '<body>';

	$dbconn=pg_connect("dbname=kandassira user=ikone password=okokok host=localhost port=5432");

	echo '<div id="header">';
	echo '<h1 class="titreh1"> G-STORE  </h1>';
	echo '<h5 class="titreh5">HAMDALLAYE ACI 2000  Tel: 00 00 00 00 / 00 00 00 00
	E-mai:xxxxxxxxxxx@xxxx.com</h5>';
	echo '</div>';
?>
