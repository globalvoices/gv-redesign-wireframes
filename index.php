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
					<p> Ultricies vitae tincidunt vitae, semper id mi. <a href='#'>Ipsum &raquo;</a></p>
					<h4>Rising Voices </h4>
					<p> Ad litora torquent per conubia nostra, per inceptos himenaeos. <a href='#'>Dolor &raquo;</a></p>
				</div>
			<?php endif; ?>
		</div>
	</div>
		<hr>
		
		<div class='row'>
			<div class="large-12 columns">
				<h3>LATEST POSTS</h3>
			</div>
			<?php include('_post-summaries.php') ?>
		</div>
		</div>	
<?php include('footer.php');?>