<?php
	session_start();
	include_once('class/autoload.php');


	$site = new page_base('Liste enfants');
	$site->js='jquery.validate.min';
	$site->js='messages_fr';
	$site->js='jquery.tooltipster.min';
	$site->style='tooltipster';
	$site->style='perso';


	$controleur=new controleur();

	$site-> right_sidebar=$site-> rempli_right_sidebar();
	if ($_SESSION['type']=='famille')
		$site-> left_sidebar=$controleur->affiche_liste_enfant_famille();
	else if ($_SESSION['type']=='admin')
		$site-> left_sidebar=$controleur->affiche_liste_enfant();

	$site->affiche();
?>