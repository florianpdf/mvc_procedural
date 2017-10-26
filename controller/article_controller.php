<?php 

/**
 * Récupère tous les articles en BDD
 */
function showAllArticle(){
	// Voir bdd_function.php
	$result = getAll();
	include ('views/home.php');
}

/**
 * Voir un article
 */
function showOneArticle(){
	$id = $_GET['id'];

	// Voir bdd_function.php
	$result = getOne($id);
	include ('views/showOne.php');
}

function newArticle(){
	
}

function editArticle(){
	
}

function deleteArticle(){
	
}