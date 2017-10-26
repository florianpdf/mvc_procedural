<?php include ('includes/header.php'); ?>

<div class="container">
	<div class="row">
		<h1 class="mx-auto">Welcome to your World</h1>
	</div>
	<div class="row">

		<?php foreach ($result as $value): ?>
			<?php 
				echo $value['titre'] . "<br>" . $value['contenu']; 
			?>
		<?php endforeach ?>

	</div>
</div>

<?php include ('includes/footer.php'); ?>