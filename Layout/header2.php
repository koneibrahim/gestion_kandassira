<?php

	include'CRUD1.php';
	if($_SESSION['utilisateur']=='Identifie') {
	echo '<div id="header2">';
	// Si utilistaeur ne fait pas partir du group 3 ces liens serons masqueés de sa vision
	if($_SESSION['group']=='3') {
		echo ' <a href="/Src/Produits/liste.php"> <button class="bmh2">Produits</button> </a>';
		echo ' <a href="/Src/Achats/listeac.php"> <button class="bmh2">Achats</button> </a>';
		echo ' <a href="/Src/Stocks/liste.php"> <button class="bmh2">Etat stock</button> </a>';
		echo ' <a href="/Src/Ventes/listevente.php"> <button class="bmh2">Ventes</button> </a>';
		echo ' <a href="/Src/Peoples/liste.php"> <button class="bmh2">Peoples</button> </a>';
		echo ' <a href="/Src/Clients/liste.php"> <button class="bmh2">Clients</button> </a>';
		echo ' <a href="/Src/Fournisseurs/liste.php"> <button class="bmh2">Fournisseurs</button> </a>';
		echo ' <a href="/Src/Personnels/liste.php"> <button class="bmh2">Personnels</button> </a>';
		echo ' <a href="/Src/Mariages/liste.php"> <button class="bmh2">Mariages</button> </a>';

		}

		if($_SESSION['group']=='2') {
			echo ' <a href="/Src/Achats/listeac.php"> <button class="bmh2">Achats</button> </a>';
			echo ' <a href="/Src/Productions/liste.php"> <button class="bmh2">Productions</button> </a>';
			echo ' <a href="/Src/Stocks/liste.php"> <button class="bmh2">Stocks</button> </a>';
			}

			if($_SESSION['group']=='4') {
				echo ' <a href="/Src/Productions/liste.php"> <button class="bmh2">Productions</button> </a>';
				}

				if($_SESSION['group']=='1') {
					echo ' <a href="/Src/Productions/liste.php"> <button class="bmh2">Productions</button> </a>';
					}
							echo '</div>';
						echo '<div id="logoconnex">';
					echo'<a href="/Layout/logout.php"><button class="butconnex">Déconnexion</button></a>';
				echo'</div>';
							}
					?>
