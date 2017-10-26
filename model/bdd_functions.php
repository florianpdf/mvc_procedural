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

function getOne(){
	
}

function update(){
	
}

function delete(){
	
}