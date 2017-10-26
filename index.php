<!-- Contrôleur global du blog / Controlleur frontal / Point d'entré -->

<?php

// Base de donnée
include ('model/bdd_user_info.php');
include ('model/bdd_connexion.php');
include ('model/bdd_functions.php');

// Traitement PHP
include ('controller/article_controller.php');

if (empty($_GET)){
	// Voir article_controller.php
	showAllArticle();
}
elseif($_GET['section'] == 'add'){
	include ('views/new_article.php');
}
elseif ($_GET['section'] == "showOne") {
	// Voir article_controller.php
	showOneArticle();
}