<?php include ('includes/header.php'); ?>

<div class="container">
	<div class="row">
		<h1 class="mx-auto">Ajout d'un article</h1>
	</div>
	
	<div class="row d-flex justify-content-center mt-5">			
		<form action="index.php?section=add" method="POST">
			<div class="form-row">
				<div class="form-group col-xs-6">
					<label for="titre">Votre titre</label>
					<input type="text" name="titre" id="titre" class="form-control" placeholder="Votre titre">
				</div>
				<div class="form-group col-xs-6">
					<label for="contenu">Votre contenu</label>
					<input type="text" name="contenu" id="contenu" class="form-control" placeholder="Votre contenu">
				</div>				
			</div>

			<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
		</form>
	</div>
</div>

<?php include ('includes/footer.php'); ?>