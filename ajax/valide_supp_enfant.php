<?php

session_start();

include_once('../class/autoload.php');

$errors         = array();
$data 			= array();



$data['success']=false;




$tab=array();
$mypdo=new mypdo();

$tab['id_enfant']=$_REQUEST['id_enfant'];

$data=$mypdo->supp_enfant_famille($tab);

print_r (json_encode($data));
?>