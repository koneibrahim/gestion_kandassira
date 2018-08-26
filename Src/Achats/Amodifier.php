 <?php

   $id_ac=$_GET['id_ac'];
   $date_ac=$_GET['date_ac'];
   $libele=$_GET['libele'];
   $id_po=$_GET['id_po'];
   $nom=$_GET['nom'];
   $prenom=$_GET['prenom'];

	include'achat.php';

				/*------------Debut Amodifier.php-------------*/

	echo'<div id="contvert">';

	echo'<div id="mform"><div id="mform2"><div id="mheader" class="textcen">
		<h2 class="titrecform">Modification achat</h2></div><br/><br/><br/>';

	echo'<form action="achat.php" method="post">';
	echo'<input type="hidden" name="mas" value="AM"/>';
	echo'<input type="hidden" name="id_ac" value="'.$id_ac.'">';

	echo'<table cellpadding="3" class="w95">';

	echo'<tr><td class="textinput">Date</td><td>
		<input type="text" name="date_ac" value="'.$date_ac.'" class="labinput"></td></tr>';

	echo'<tr><td class="textinput">Libele</td><td>
		<input type="text" name="libele" value="'.$libele.'" class="labinput"></td></tr>';

  echo '<tr><td class="textinput">Fournisseur</td><td><select name="id_po" class="labinput">';
    while ($ligne=pg_fetch_assoc($lfournisseur)) {
    echo '<option value="'.$ligne['id_po'].'">'.$ligne['nom'].'  '.$ligne['prenom'].'</option>';
    }


	echo '</table>';

	echo '<div id="mfooter" class="droite">';
	if($_SESSION['utilisateur']=='Identifie') {
	echo'<input type="submit" name="valider" value="Valider"  class="bvalid">&nbsp;&nbsp;
	<input type="submit" name="valider" value="Annuler"  class="bannul"></div></div></div>';
  	}
	echo '</form>';
	echo '</div>';


					/*------------Fin Amodifier.php-------------*/
?>
