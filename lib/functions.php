<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/



function getContent(){
	if(!isset($_GET['pages'])){
		include __DIR__.'/../pages/home.php';
	} else {
		switch($_GET['pages'])
		{
			case 'bio': 
				include __DIR__.'/../pages/bio.php';
				break;
	
			case 'contact':
				include __DIR__.'/../pages/contact.php';
				break;
	
			default:
				include __DIR__.'/../pages/home.php';
		}
	}
}


function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData () {

	$json = file_get_contents("../data/user.json");
	return var_dump(json_decode($json));
}


?>
