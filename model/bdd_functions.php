<?php 

/**
 * Get all article
 * @return [array] Tableau associatif avec toutes les données de la table article
 */
function getAll(){
	global $bdd;

	$reqResult = mysqli_query($bdd, 'SELECT * FROM articles');
	$result = mysqli_fetch_all($reqResult, MYSQLI_ASSOC);

	return $result;
}

/**
 * Get One Article
 * @param  [int] $id id de l'élément à visualiser
 * @return [array] Le contenu de l'élément récupéré
 */
function getOne($id){
	global $bdd;

	$reqResult = mysqli_query($bdd, "SELECT * FROM articles WHERE id = $id");
	$result = mysqli_fetch_all($reqResult, MYSQLI_ASSOC);

	return $result;
}

function update(){
	
}

function delete(){
	
}