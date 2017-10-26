<?php include ('includes/header.php'); ?>


<div class="container">
	<div class="row">
		<h1 class="mx-auto">Welcome to your World</h1>
	</div>
	<div class="row">

		<?php foreach ($result as $value): ?>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="card card_custom"">
					<div class="card-header">
						<?php echo $value['titre']; ?>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							<?php echo $value['contenu']; ?>
						</li>
						<li class="list-group-item mx-auto">
							<a href="#">
								<img src="views/assets/pictures/ic_delete_black_24px.svg" alt="delete">
							</a>
							<a href="#">
								<img src="views/assets/pictures/ic_mode_edit_black_24px.svg" alt="edit">
							</a>
						</li>
					</ul>
				</div>
			</div>
		<?php endforeach ?>
			
	</div>
</div>



<?php include ('includes/footer.php'); ?>