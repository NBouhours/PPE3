<?php
	session_start();

	include_once('../class/autoload.php');

	$errors         = array();
	$data 			= array();
	$data['success']=false;




	$tab=array();
	$mypdo=new mypdo();


	$tab['id']=$_POST['id'];
	$tab['mp']=$_POST['mp'];
	$tab['categ']=$_POST['categ'];


	$resultat = $mypdo->connect($tab);

	if(isset($resultat))
	{
		$_SESSION['type']=$tab['categ'];
		
		if($tab['categ']=="famille")
			$_SESSION['id']=$resultat->id_famille;

		else if($tab['categ']=="admin")
			$_SESSION['id']=$resultat->id;

		else if($tab['categ']=="perso")
			$_SESSION['id']=$resultat->id_personnel;

		$data['success']=true;
	}
	else
	{
		$errors['message']='Identifiant,mot de passe,catégorie invalide !';
	}



	if ( ! empty($errors)) {
		$data['success'] = false;
		$data['errors']  = $errors;
	} 
	else {
		if($data['success'])
			$data['message'] = "Vous êtes bien connecté  !";
	}


	echo json_encode($data);
?>