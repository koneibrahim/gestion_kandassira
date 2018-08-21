<?php
	include'./Layout/header.php';
	include'./Layout/logosahel.php';
	include'./Layout/logoyogo.php';
	include'./Layout/header2.php';
	include'./Layout/menu2.php';
	include'CRUD1.php';

	echo'<div id="content">';
				//	echo'<img src="Images/bgone.jpg" width="100%" height="100%" alt="">';

				if($_SESSION['utilisateur']!='Identifie') {
					echo '<div id="mform"><div id="mform2"><div id="mheader" class="centre">Authentification</div><br/><br/><br/>';
				   echo '<form action="index.php" method="post">';
					echo '<input type="hidden" name="amd" value="AU">';
					echo '<table cellpadding="5" class="w90">';
					echo '<tr><td class="crouge" colspan="2">'.$_SESSION['erreur'].'</td></tr>';

					echo '<tr><td class="textinput">Login</td><td><input type="text" name="nom_user" class="labinput" value=""></td></tr>';

					echo '<tr><td class="textinput">Mot de passe</td><td><input type="password" name="password" class="labinput" value=""></td></tr>';
					echo '</table></div>';

					echo '<div id="mfooter" class="droite">

					<input type="submit" name="valider" value="valider" class="bvalid">&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" name="annuler" value="Annuler" class="bannul"></div></div></div>';

					echo '</form>';
					}
					echo'</div>';

					echo'<div id="menu2">
					 <video width="320" height="240" controls>
				  			<source src="Images/spotok.mp4" type="video/mp4">
 					 </video>';

 				 echo '<a href="/Src/Personnels/liste.php"> <button class="bmh2">KODUMANI</button> </a>';

  	echo'</div>';

	include'./Layout/footer.php';

?>
