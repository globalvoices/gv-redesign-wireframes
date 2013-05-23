<?php include('header.php');?>



	<div class="row hero">
		<div class="large-8 columns featured-posts">
			<!--<h3>FEATURED POSTS</h3>-->

			<!-- Grid Example -->
			<div class="row">
				<div class="large-12 columns">
					<div class="panel">
						<img src="http://placehold.it/750x300&text=featured-image">
						<div class='row'>
							<div class='small-4 columns '>
								<div class='panel'>
								FEATURED HEADLINE 
								</div>
							</div>
							<div class='small-4 columns '>
								<div class='panel'>
								FEATURED HEADLINE 
								</div>							</div>
							<div class='small-4 columns '>
								<div class='panel'>
								FEATURED HEADLINE 
								</div>							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div><!--large-8-->
		<div class="large-4 columns">
			<!--<h3>IDENTITY/PROJECTS</h3>-->

			<div class="panel">
				<h4>Pitch/Action</h4>
				<p> In sit amet orci feugiat mi pretium lobortis. <a href='#'>Lorum &raquo;</a> </p>
				<h4>Advocacy Pitch</h4>
				<p> Ultricies vitae tincidunt vitae, semper id mi. <a href='#'>Ipsum &raquo;</a></p>
				<h4>Rising Voices </h4>
				<p> Ad litora torquent per conubia nostra, per inceptos himenaeos. <a href='#'>Dolor &raquo;</a></p>
			</div>
		</div>
	</div>
		<hr>
		
		<div class='row'>
			<div class="large-12 columns">
				<h3>LATEST POSTS</h3>
			</div>
				<?php 
				$i = 0;
				while ($i < 12) :
					$i++;
					echo "<div class='small-6 large-4 mobile-12 columns'>
							<div class='panel'>
								<h3>POST SUMMARY $i</h3> <img src='http://placehold.it/300x150&text=featured+image'> 
							</div>
						</div>";
				endwhile;
				?>
			</div>
		</div>	
		<hr >
<?php include('footer.php');?>