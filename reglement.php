<?php
	session_start();
	include_once('class/autoload.php');
	
	
	$site = new page_base('Réglement');
	$controleur=new controleur();
	$site-> right_sidebar=$site->rempli_right_sidebar();
	$site-> left_sidebar=$controleur->retourne_reglement();

	
	$site->affiche();
?>