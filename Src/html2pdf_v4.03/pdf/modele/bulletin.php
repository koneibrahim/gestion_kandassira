<?php
	echo '<style type="text/css">;
			<!--
			table.morpion
			{
				border:        dashed 1px #444444;
			}

			table.morpion td
			{
				font-size:    15pt;
				font-weight:  bold;
				border:       solid 1px #000000;
				padding:      1px;
				text-align:   center;
				width:        25px;
			}

			table.morpion td.j1 { color: #0A0; }
			table.morpion td.j2 { color: #A00; }

			-->
		</style>';
		
		
	$conn=pg_connect("host=localhost port=5432 dbname=sygepp user=milano password=cheva7");
	$id_pr=$_GET['id_pr'];
	$mois=$_GET['mois'];
	$requete=" SELECT distinct mois,nom_pr,prenom_pr,montant,annee,id_bul 
	from bulletins join professeurs using(id_pr) join cours using(id_pr) natural join emargements
    where id_pr=$id_pr and  mois=$mois";
function f_mois($m) {
		switch($m) {
			case 1:		return	'Javier';		break;
			case 2:		return	'Fevrier';		break;
			case 3:		return	'Mars';			break;
			case 4:		return	'Avril';		break;
			case 5:		return	'Mai';			break;
			case 6:		return	'Juin';			break;
			case 10:	return	'Octobre';		break;
			case 11:	return	'Novembre';		break;
			default:	return	'Decembre';	
		}
	}  
	$result=pg_query($conn,$requete);
	while ($line=pg_fetch_assoc($result)) {	
	echo  	'<table>';
	echo  	'<tr>';
	echo  	'<td colspan="5">'; 
	echo  	'<img src="logo.jpg" width="160" height="75" />';
	echo  	'</td>'; 
	echo  	'<td colspan="5">'; 
	echo  	'<b>Rectorat</b>';
	echo  	'</td>'; 
	echo  	'</tr>';
	echo  	'<tr>';
	echo  	'<td colspan="6"><b>'; 
	echo  	'<hr />';
	echo  	'</tr>';
	echo  	'<tr>';	
	echo    '<b><th colspan="6">Bulletin de paiement des professeurs contractuels</th></b>';
	echo  	'</tr>';
   	echo  	'<tr>';
	echo 	'<td><b>Mois:</b>&nbsp;&nbsp;<u>'.f_mois($ligne['mois']).'</u></td>';
	//echo    '</u>';
	echo 	'<td><b>Ann&eacute;e:</b>&nbsp;&nbsp;<u>'.$line['annee'].'</u></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	echo 	'<td><b>N&deg;:</b>&nbsp;&nbsp;<u>'.$i.'</u></td>'; 
	//echo    '</u>';
	echo  	'</tr>';
	echo  	'<tr>';               
	echo    '<td><b>Nom du professeur:</b>&nbsp;&nbsp;<u>'.$line['nom_pr'].' '.$line['prenom_pr'].'</u></td>';
	echo 	'<td><b>Mati&egrave;rs:</b>&nbsp;&nbsp;<u>'.$line['nom_ma'].'</u></td>';
	echo  	'</tr>';
	echo  	'<tr>'; 
	echo  	'<td><b>';                                
	echo    'Les salaires par heure:';
	echo    '</b>&nbsp;&nbsp;<u>'.$line['tarif'].'</u></td>';
	echo  	'</tr>';
	echo  	'<tr>';
	echo  	'<td><b>'; 
	echo    'Nombre d\'heures hebdomadaire:  ';
	echo    '</b>&nbsp;&nbsp;<u>'.$line['vol_h_eb'].'</u></td>';
	echo  	'</tr>';
	echo  	'<tr>';
	echo  	'<td><b>';                          
    echo    'Le nombre d\'heures ex&eacute;cut&eacute;es dans ce mois-ci:';
    echo    '</b>&nbsp;&nbsp;<u>'.$line['heure'].'</u></td>';
    echo  	'</tr>';
    echo  	'<tr>'; 
    echo  	'<td colspan="6"><b>';                                    
	echo    'Le montant total:';
	echo    '</b></td>';
	echo  	'</tr>';
	echo  	'<tr>'; 
	echo  	'<td><b>'; 
	echo    'En chiffre';
	echo    '</b>&nbsp;&nbsp;<u>'.$line['montant'].'</u></td>';
	echo  	'<td><b>'; 
	echo 	'Lettre:';
	echo    '</b>&nbsp;&nbsp;<u>'.$line['montant'].'</u></td>';
	echo  	'</tr>';
	echo  	'<tr>';
	echo  	'<td><b>';                                                               
	echo    '  En ch&egrave;que';
	echo    '</b>&nbsp;&nbsp;<u>'.$line['mod_paie'].'</u></td>';
	echo  	'<td><b>'; 
	echo 	' En esp&egrave;ce';
	echo    '</b>&nbsp;&nbsp;<u>'.$line['mod_paie'].'</u></td>';
	echo  	'</tr>';
	echo  	'<tr>';
	echo  	'<td colspan="6" style="text-align:right"><b>';                                                                       
	echo    'Le recteur';
	echo    '</b></td>';
	echo  	'</tr>';
	echo  	'<tr>';
	echo  	'<td colspan="6" style="text-align:right"><b>'; 
	echo    'Dr.Seydou M. Sylla';
	echo    '</b></td>';
	echo  	'</tr>';
	echo  	'<tr>';
	echo  	'<td colspan="6"><b>'; 
	echo    'Singature du professeur &agrave; la r&eacute;ception.......................la date........../......./201';
	echo    '</b></td>';
	echo  	'</tr>';
	echo  	'<tr>';
	echo  	'<td colspan="6"><b>'; 
	echo    'Observations...............................................................
							...............................................';
	echo    '</b></td>';
	echo  	'</tr>';
   echo  	'<tr>';
	echo  	'<td colspan="6"><b>'; 
	echo  	'</tr>';
	echo  	'<tr>';
	echo  	'<td colspan="6"><b>'; 
	echo  	'</tr>';
	echo  	'<tr>';
	echo  	'<td colspan="6"><b>'; 
	echo  	'</tr>';
	echo  	'<tr>';
	echo  	'<td colspan="6"><b>'; 
	echo  	'</tr>';
	echo  	'<tr>';
	echo  	'<td colspan="6"><b>'; 
	echo  	'</tr>';
	echo  	'<tr>';
	echo  	'<td colspan="6"><b>'; 
	echo  	'</tr>';
	echo  	'<tr>';
	echo  	'<td colspan="6"><b>'; 
	echo    '
				X====================================================================

			';
		echo    '</b></td>';
		echo  	'</tr>';*/
	}
	echo  	'</table>';
?>
