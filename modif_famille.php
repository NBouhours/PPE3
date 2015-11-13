<?php
	session_start();
	include_once('class/autoload.php');


	$site = new page_base('Modif famille');
	$site->js='jquery.validate.min';
	$site->js='messages_fr';
	$site->js='jquery.tooltipster.min';
	$site->style='tooltipster';
	$site->style='perso';


	$controleur=new controleur();
	$site-> right_sidebar=$site-> rempli_right_sidebar();

	if ($_SESSION['type']=="admin"){
		$site-> left_sidebar=$controleur->affiche_liste_famille('Modif');
		if (isset($_POST["nom_checkbox"])){
			foreach ($_POST["nom_checkbox"] as $index => $value){
				$site-> left_sidebar=$controleur->retourne_formulaire_famille('Modif',$value);
				$_SESSION['id_eleve']=$value;
				break;
			}
		}
	}

	else if ($_SESSION['type']=="famille")
		$site-> left_sidebar=$controleur->retourne_formulaire_famille('Modif',$_SESSION['id']);


	$site->affiche();

?>
