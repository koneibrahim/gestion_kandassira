
<?php

	SESSION_START();

	$_SESSION= ARRAY();

 	$_SESSION['utilisateur']= NULL;

	SESSION_DESTROY();

	header('location: /index.php');

?>
