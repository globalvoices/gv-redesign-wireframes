<?php include('header.php');?>



	<div class="row hero">
				<?php include('_featured-posts.php');?>

		<div class="large-4 columns">
			<!--<h3>IDENTITY/PROJECTS</h3>-->

			<?php if ($special_coverage_homepage) : ?>
				<div class="panel">
					<h4>SPECIAL COVERAGE HEADLINE</h4>
					<h4>SPECIAL COVERAGE HEADLINE</h4>
				</div>
				<div class="panel">
					<?php include('_email-form.php');?>
				</div>
			<?php else :?>
				<div class="panel">
										<?php include('_email-form.php');?>

					<h4>Advocacy Pitch</h4>
					<p> Ultricies vitae tincidunt vitae. <a href='#'>Ipsum &raquo;</a></p>
					<h4>Rising Voices </h4>
					<p> Ad litora torquent per conubia nostra. <a href='#'>Dolor &raquo;</a></p>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<?php if ($homepage_promo_widgets) :?>
		<hr>

		<div class="row hero">
			<div class="large-4 columns">
				<div class="panel">
					<h4>OPTIONAL HOMEPAGE PROMO WIDGET</h4>
				</div>
			</div>
			<div class="large-4 columns">
				<div class="panel">
					<h4>OPTIONAL HOMEPAGE PROMO WIDGET</h4>
				</div>
			</div>
			<div class="large-4 columns">
				<div class="panel">
					<h4>OPTIONAL HOMEPAGE PROMO WIDGET</h4>
				</div>
			</div>
		</div>
	<?php endif;?>
		<hr>
		
		<div class='row'>
			<div class="large-8 columns">
				<h3>LATEST POSTS</h3>
			</div>
			<div class="large-4 columns">
				<h3>QUICK READS</h3>
			</div>
			<?php include('_post-summaries.php') ?>
		</div>
		<hr>
		<div class='row'>
			<h3>OPTIONAL USER AVATAR BUFFET	</h3>
			<div class='panel text-center'>
				<img src="http://placehold.it/75x75&text=avatar">
				<img src="http://placehold.it/75x75&text=avatar">
				<img src="http://placehold.it/75x75&text=avatar">
				<img src="http://placehold.it/75x75&text=avatar">
				<img src="http://placehold.it/75x75&text=avatar">
				<img src="http://placehold.it/75x75&text=avatar">
				<img src="http://placehold.it/75x75&text=avatar">
				<img src="http://placehold.it/75x75&text=avatar">
				<img src="http://placehold.it/75x75&text=avatar">
				<img src="http://placehold.it/75x75&text=avatar">
				<img src="http://placehold.it/75x75&text=avatar">
				<img src="http://placehold.it/75x75&text=avatar">
			</div>
		</div>
		
	<?php if ($homepage_promo_widgets) :?>
		<hr>

		<div class="row hero">
			<div class="large-4 columns">
				<div class="panel">
					<h4>OPTIONAL HOMEPAGE PROMO WIDGET</h4>
				</div>
			</div>
			<div class="large-4 columns">
				<div class="panel">
					<h4>OPTIONAL HOMEPAGE PROMO WIDGET</h4>
				</div>
			</div>
			<div class="large-4 columns">
				<div class="panel">
					<h4>OPTIONAL HOMEPAGE PROMO WIDGET</h4>
				</div>
			</div>
		</div>
	<?php endif;?>		
		</div>	
<?php include('footer.php');?>