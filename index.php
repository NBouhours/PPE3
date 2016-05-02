<?php
	session_start();
	include_once('class/autoload.php');
	
	
	$site = new page_base('Accueil');		
	$site->js='jssor.core';
	$site->js='jssor.utils';
	$site->js='jssor.slider';
	$site->js='jssor.pbdc';

	$controleur=new controleur();
	$site-> right_sidebar=$site->rempli_right_sidebar();
	$site-> left_sidebar=$controleur->retourne_carroussel();
	$site-> left_sidebar=$controleur->retourne_article_accueil();
	
	$site->affiche();
?>