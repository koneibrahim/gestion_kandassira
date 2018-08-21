<?php

	$id_ma=$_GET['id_ma'];
	$id_pro=$_GET['id_pro'];
	$nom_ma=$_GET['nom_ma'];
	$qte_compo=$_GET['qte_compo'];

			/*-------Debut Fsupprimer.php----------*/
	include'composant.php';
	echo '<div id="contright">';
				echo'<form action="composant.php" method="post">';
				echo'<input type="hidden" name="mas" value="CS"/>';
				echo'<input type="hidden" name="id_ma" value="'.$id_ma.'">';
			  echo'<input type="hidden" name="id_pro" value="'.$id_pro.'">';
				echo'<input type="hidden" name="nom_pro" value="'.$nom_pro.'">';

				echo '<div id="sform"><div id="sform2"><div id="sheader" class="titrecform">Suppression</div><br/><br/><br/><br/><br/>
					 <p class="textcen" >Voulez vous supprimer le composant
					  <b class="crouge"> '.$nom_ma.' dont la quatité '.$qte_compo.'?</b></p>

			   		<div id="sfooter">

					 		 <input type="submit" name="valider" value="Oui" class="bvalid">
					 		 <input type="submit" name="valider" value="Non" class="bannul"></div></div></div>';

				echo '</form>';
	echo '</div>';

			/*-------Fin Fsupprimer.php----------*/
?>
