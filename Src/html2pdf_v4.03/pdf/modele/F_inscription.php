<?php
	echo 	'<style type="text/css">
<!--
	table.page_header {width: 100%; border: none; background-color: #DDDDFF; border-bottom: solid 1mm #FFFFFF; padding: 2mm }
	table.page_footer {width: 100%; border: none; background-color: #DDDDFF; border-top: solid 1mm #AAAADD; padding: 2mm}
	h1 {color: #000033;}
	h2 {color: #000055;text-align: center;text-transform: uppercase;}
	h3 {color: #000077}
	h1,h2,h3,h4{
		margin: 0;
	}
	h1,h4{
		text-align: center;
	}
	
	th{
		padding: 1mm;
		padding-left: 4mm;
		padding-right: 4mm;
	}
	td{
		text-align: center;
	}
	hr{
		margin: 0;
	}
	.t-left{
		text-align: left;
	}
	.t-right{
		text-align: right;
	}
-->
</style>';
	echo 	'<page backtop="14mm" backbottom="14mm" backleft="10mm" backright="10mm" style="font-size: 12pt">';
	/*echo 	'<page_header>
		<table class="page_header">
			<tr>
				<td style="width: 100%; text-align: left">
					Exemple d\'utilisation des bookmarks
				</td>
			</tr>
		</table>
	</page_header>';*/
	echo 	'<page_header>';
	echo 		'<h1>COLLEGE AVICENNE</h1>';
	//echo 		'<hr style="border: 1px;"/>';
	echo 		'<hr />';
	echo 		'<h4><u><small>&nbsp;&nbsp;Bamako Missabougou Boulevard de l\'Hôpital  du  Mali à 500 m vers Yirimadio&nbsp;&nbsp;</small></u></h4>';
	//echo 		'<hr />';
	echo 	'</page_header>';
	echo 		'<br />';
	echo 	'<page_footer>
		<table class="page_footer">
			<tr>
				<td style="width: 33.3%; text-align: left">Tel: 75 23 26 26</td>
				<td style="width: 33.3%; text-align: center">76 42 63 15</td>
				<td style="width: 33.3%; text-align: right">65 23 26 26</td>
			</tr>
		</table>
	</page_footer>';

	function annee_scolaire($a){
    $a = date ("Y");
     if (date ("m")>=10&&date ("m")<=12) {
     return date ("Y").'&nbsp;-&nbsp;'.date ("Y")+1;
  }
   elseif (date ("m")>=1&&date ("m")<=8) {
    return (date ("Y")-1).'&nbsp;-&nbsp;'.date ("Y");
  }

   }
   $fr_ins=$_POST['fr_ins'];
   $date_ins=$_POST['date_ins'];
   $fr_tr=$_POST['fr_tr'];
   $date_tr1=$_POST['date_tr1'];
   $date_tr2=$_POST['date_tr2'];
   $date_tr3=$_POST['date_tr3'];
   $tenue=$_POST['tenue'];
   $activ=$_POST['activ'];
   $date_tn=$_POST['date_tn'];
   $date_ac=$_POST['date_ac'];
   $nom=$_POST['nom'];
   $prenom=$_POST['prenom'];
   $mont_glob=$fr_ins+$tenue+$activ+3*$fr_tr;
 //echo annee_scolaire();

	/*echo 	'<page_footer>
		<table class="page_footer">
			<tr>
				<td style="width: 100%; text-align: right">
					page [[page_cu]]/[[page_nb]]
				</td>
			</tr>
		</table>
	</page_footer>';*/
	echo 		'<br />';
	echo  				'<b style="text-align: left">Premier&nbsp;Cycle</b>';
	echo  				'
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						';
	echo  				'<b style="text-align: right">Ann&eacute;e&nbsp;scolaire&nbsp;'.annee_scolaire().'</b>';
	echo 		'<br />';
	echo 		'<b>1</b><sup>&egrave;re</sup>,&nbsp;<b>2</b><sup>&egrave;me</sup>,&nbsp;<b>3</b><sup>&egrave;me</sup>
				,&nbsp;<b>4</b><sup>&egrave;me</sup>,&nbsp;<b>5</b><sup>&egrave;me</sup>,&nbsp;<b>6</b><sup>&egrave;me</sup>';
	echo 		'<br />';
	echo 		'<br />';
	echo 		'<h2>fiche d&acute;inscription/reinscription</h2>';
	echo 		'<br />';
	echo 		'<br />';
	echo  		'<b>Ref&nbsp;:&nbsp;</b>............................';
	echo 		'<br />';
	echo 		'<br />';
	echo  		'<b>NOM&nbsp;:&nbsp;</b>...................................&nbsp;&nbsp;&nbsp;<b>Pr&eacute;noms&nbsp;:&nbsp;</b>..........................................&nbsp;&nbsp;&nbsp;<b><u>Classe&nbsp;:</u>&nbsp;</b>.......................';
	echo 		'<br />';
	echo 		'<br />';
	echo  		'<b><u>Date&nbsp;et&nbsp;lieu&nbsp;de&nbsp;naissance&nbsp;:</u>&nbsp;</b>........./..................../..........&nbsp;&nbsp;&nbsp;<b><u>&agrave;&nbsp;:</u>&nbsp;</b>.........................................................';
	echo 		'<br />';
	echo 		'<br />';
	echo  		'<b>Fils(Fille)&nbsp;de&nbsp;:&nbsp;</b>..............................................&nbsp;&nbsp;&nbsp;<b><u>Profession&nbsp;:</u>&nbsp;</b>.........................................................';
	echo 		'<br />';
	echo  		'<b><u>Tel&nbsp;:</u>&nbsp;</b>........................................................................&nbsp;&nbsp;&nbsp;<b><u>email&nbsp;:</u>&nbsp;</b>.........................................................';
	echo 		'<br />';
	echo 		'<br />';
	echo  		'<b><u>Et&nbsp;de&nbsp;:</u>&nbsp;</b>..........................................................&nbsp;&nbsp;&nbsp;<b><u>Profession&nbsp;:</u>&nbsp;</b>.........................................................';
	echo 		'<br />';
	echo  		'<b><u>Tel&nbsp;:</u>&nbsp;</b>........................................................................&nbsp;&nbsp;&nbsp;<b><u>email&nbsp;:</u>&nbsp;</b>.........................................................';
	echo 		'<br />';
	echo 		'<br />';
	echo 		'<br />';
	echo  		'<b>Tuteur&nbsp;(le&nbsp;cas&nbsp;&eacute;ch&eacute;ant)&nbsp;:&nbsp;</b>.............................................................................................................';
	echo 		'<br />';
	echo  		'<b><u>Tel&nbsp;:</u>&nbsp;</b>........................................................................&nbsp;&nbsp;&nbsp;<b><u>email&nbsp;:</u>&nbsp;</b>.........................................................';
	echo 		'<br />';
	echo  		'<b>Adresse&nbsp;:&nbsp;</b>.......................................................................................................................................';
	echo 		'<br />';
	echo 		'<br />';
	echo 		'<br />';
	echo 		'<h3><em>Tableau&nbsp;de&nbsp;paiement&nbsp;des&nbsp;frais&nbsp;de&nbsp;scolarit&eacute;</em></h3>';
	echo  		'<table border="1">';
	echo  			'<tr>';
	echo  				'<th><em>D&eacute;signation</em></th>';
	echo  				'<th><em>Inscription</em></th>';
	echo  				'<th><em>1<sup>&egrave;re</sup>&nbsp;Trimestre</em></th>';
	echo  				'<th><em>2<sup>&egrave;me</sup>&nbsp;Trimestre</em></th>';
	echo  				'<th><em>3<sup>&egrave;me</sup>&nbsp;Trimestre</em></th>';
	echo  			'</tr>';
	echo  			'<tr>';
	echo  				'<th><em>Montant</em></th>';
	echo  				'<td><em>'.(number_format($fr_ins,0,' ',' ')).'<sup>F</sup></em></td>';
	echo  				'<td><em>'.(number_format($fr_tr,0,' ',' ')).'<sup>F</sup></em></td>';
	echo  				'<td><em>'.(number_format($fr_tr,0,' ',' ')).'<sup>F</sup></em></td>';
	echo  				'<td><em>'.(number_format($fr_tr,0,' ',' ')).'<sup>F</sup></em></td>';
	echo  			'</tr>';
	echo  			'<tr>';
	echo  				'<th><em>Date&nbsp;limite&nbsp;de&nbsp;<br />paiement</em></th>';
	echo  				'<td><em>'.$date_ins.'</em></td>';
	echo  				'<td><em>'.$date_tr1.'</em></td>';
	echo  				'<td><em>'.$date_tr2.'</em></td>';
	echo  				'<td><em>'.$date_tr3.'</em></td>';
	echo  			'</tr>';
	echo  		'</table>';
	//echo 		'<br />';
	echo 		'<br />';
	echo 		'<br />';
	echo 			'<b><em><u>Autres&nbsp;frais&nbsp;:</u></em></b>';
	echo  		'<ul>';
	echo  			'<li>';
	echo  				'<em>Frais&nbsp;de&nbsp;la&nbsp;tenue&nbsp;scolaire&nbsp;:&nbsp;'.(number_format($tenue,0,' ',' ')).'&nbsp;francs&nbsp;&agrave;
						&nbsp;payer&nbsp;au&nbsp;plus&nbsp;tard&nbsp;le&nbsp;'.$date_tn.'</em>';
	echo  			'</li>';
	echo  			'<li>';
	echo  				'<em>Frais&nbsp;des&nbsp;activit&eacute;&nbsp;culturelles&nbsp;:&nbsp;'.(number_format($activ,0,' ',' ')).'&nbsp;francs&nbsp;&agrave;
						&nbsp;payer&nbsp;au&nbsp;plus&nbsp;tard&nbsp;le&nbsp;'.$date_ac.'</em>';
	echo  			'</li>';
	echo  		'</ul>';
	//echo 		'<br />';
	//echo 		'<br />';
	echo 			'<b><em><u>Montant&nbsp;global&nbsp;:</u>&nbsp;('.(number_format($mont_glob,0,' ',' ')).')&nbsp;francs</em></b>';
	echo 		'<br />';
	echo 		'<br />';
	echo 		'<div style="text-align: right">Bamako&nbsp;le&nbsp;:......../................/'.date('Y').'</div>';
	echo 		'<br />';
	echo 		'<br />';
	//echo 		'<h4>'
	echo   			'<b class="t-left">Signature&nbsp;du&nbsp;Parent&nbsp;ou&nbsp;du&nbsp;tuteur</b>';
	echo  				'
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						';
	echo   			'<b class="t-right">Le&nbsp;Directeur&nbsp;de&nbsp;l&acute;&eacute;cole</b>';
	//echo 		'</h4>';
	echo 		'<br />';
	echo 		'<br />';
	echo 		'<br />';
	echo 		'<div style="text-align: right">'.$nom.'&nbsp;'.$prenom.'</div>';
	echo 	'</page>';
/*<page pageset="old">
	<bookmark title="Chapitre 2" level="0" ></bookmark><h1>Chapitre 2</h1>
	<div class="niveau">
		intro au chapitre 2
		<bookmark title="Chapitre 2.1" level="1" ></bookmark><h2>Chapitre 2.1</h2>
		<div class="niveau">
			Contenu du chapitre 2.1
		</div>
		<bookmark title="Chapitre 2.2" level="1" ></bookmark><h2>Chapitre 2.2</h2>
		<div class="niveau">
			Contenu du chapitre 2.2
		</div>
		<bookmark title="Chapitre 2.3" level="1" ></bookmark><h2>Chapitre 2.3</h2>
		<div class="niveau">
			Contenu du chapitre 2.3
		</div>
	</div>
</page>
<page pageset="old">
	<bookmark title="Chapitre 3" level="0" ></bookmark><h1>Chapitre 3</h1>
	<div class="niveau">
		intro au chapitre 3
		<bookmark title="Chapitre 3.1" level="1" ></bookmark><h2>Chapitre 3.1</h2>
		<div class="niveau">
			Contenu du chapitre 3.1
		</div>
		<bookmark title="Chapitre 3.2" level="1" ></bookmark><h2>Chapitre 3.2</h2>
		<div class="niveau">
			intro au chapitre 3.2
			<bookmark title="Chapitre 3.2.1" level="2" ></bookmark><h3>Chapitre 3.2.1</h3>
			<div class="niveau">
				Contenu du chapitre 3.2.1
			</div>
			<bookmark title="Chapitre 3.2.2" level="2" ></bookmark><h3>Chapitre 3.2.2</h3>
			<div class="niveau">
				Contenu du chapitre 3.2.2
			</div>
		</div>
	</div>
</page>';*/

?>