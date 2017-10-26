<!-- Contrôleur global du blog / Controlleur frontal / Point d'entré -->

<?php

include ('model/bdd_user_info.php');
include ('model/bdd_connexion.php');
include ('model/bdd_functions.php');
include ('controller/profil_controller.php');

if (empty($_GET)){
	showAllProfils();
}
elseif($_GET['section'] == 'add'){
	include ('views/new_article.php');
}