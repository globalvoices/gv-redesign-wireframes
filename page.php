<?php include('header.php');?>



	<div class="row ">
		<div class='large-12 columns'>
			<h2>Page Title <?php echo phpsum_words(2, 2)?></h2>
		</div>
		<div class='post-column large-8 columns'>
			<div class='row'>
				<div class='large-12 columns'>
					<img src="http://placehold.it/750x300&text=featured+image" style='margin-bottom:1em;'>
					<div class="row taxonomy-buttons hide-for-medium-up">
						<div class="small-6 columns">
							<a href="#" class="small button secondary dropdown small-12" data-dropdown="drop-posttrans">Translations</a>

							<ul id="drop-posttrans" class="f-dropdown" data-dropdown-content>
							  <li><a href="#">This is a link</a></li>
							  <li><a href="#">This is another</a></li>
							  <li><a href="#">Yet another</a></li>
							</ul>


						</div>
						<div class="small-6 columns">

							<a href="#"  class="small button secondary dropdown small-12 columns" data-dropdown="drop-postcategories">Other Pages</a>
							<ul id="drop-postcategories" class="f-dropdown content" data-dropdown-content>
							  <li><a href="#">This is a link</a></li>
							  <li><a href="#">This is another</a></li>
							  <li><a href="#">Yet another</a></li>
							</ul>	

						</div>
					</div>
					
				</div>
				<div class='large-1 columns' style='padding-right:0;'>
					<img src="http://placehold.it/30x30&text=tw" style='margin-bottom:.5em;'>
					<img src="http://placehold.it/30x30&text=fb" style='margin-bottom:.5em;'>
					<img src="http://placehold.it/30x30&text=g+" style='margin-bottom:.5em;'>
				</div>
				<div class='post-content large-11 columns'>
					
					<?php echo phpsum(50, 100, 3)?>
					
					<p>
						<i>Posted on [date] &middot; <a>View original version</a></i> &middot;
						<img src="http://placehold.it/30x30&text=tw" style='margin-bottom:.5em;'>
						<img src="http://placehold.it/30x30&text=fb" style='margin-bottom:.5em;'>
						<img src="http://placehold.it/30x30&text=g+" style='margin-bottom:.5em;'>
					</p>
				</div>
			</div>
			<div class='row'>
				
				<div class='large-6 columns'>
					<h3>Child/Sibling Pages</h3>
					<div class='panel'>
						<ul>
							<?php include('_menu-list.php');?>
						</ul>
					</div>
				</div>	
				<div class='large-6 columns'>
					<h3>Other Pages</h3>
					<div class='panel'>
						<ul>
							<?php include('_menu-list.php');?>
						</ul>
					</div>
				</div>
			</div>
			
			<h3>Recommended Posts</h3>
			<div class='row'>
				<div class='large-6 columns'>
					<div class='panel'>
						<h4>HEADLINE</h4>
					</div>
				</div>
				<div class='large-6 columns'>
					<div class='panel'>
						<h4>HEADLINE</h4>
					</div>
				</div>
				<div class='large-6 columns'>
					<div class='panel'>
						<h4>HEADLINE</h4>
					</div>
				</div>
				<div class='large-6 columns'>
					<div class='panel'>
						<h4>HEADLINE</h4>
					</div>
				</div>
			</div>

		</div>
		<div class="large-4 columns">
			<div class="hide-for-small">
				<h3>Translations</h3>
			    <div class="panel">
				    <ul style='list-style:none;'>
					    <?php 
					    $i = 0;
					    while ($i < 4) :
						    $langname = phpsum_words();
						    $title = phpsum_words(7, 7);
						    
						    echo "<li><b>LANGUAGE:</b><a href='#'>$title</a></li>";
						    $i++;
					    endwhile;
					    ?>
				    </ul>
			    </div>
			  
			</div>
			
			<!--<h3>IDENTITY/PROJECTS</h3>-->

			<h3>Recommended Posts 1</h3>
			<div class="panel">
				<h4>HEADLINE</h4>
				<h4>HEADLINE</h4>
				<h4>HEADLINE</h4>
				<h4>HEADLINE</h4>
				<h4>HEADLINE</h4>
			</div>
			<h3>Recommended Posts 2</h3>
			<div class="panel">
				<h4>HEADLINE</h4>
				<h4>HEADLINE</h4>
				<h4>HEADLINE</h4>
				<h4>HEADLINE</h4>
				<h4>HEADLINE</h4>
			</div>
			
			<h3>Random Promo 1</h3>
			<div class="panel">
				<img src="http://placehold.it/300x100&text=BADGE">
				<p>Donec elementum eleifend nunc ut ultrices. Suspendisse potenti. Donec lacinia laoreet elit, nec ultrices sapien pretium tristique. Duis sed neque a lorem aliquam lacinia nec sed erat. Vestibulum in risus in justo tincidunt dapibus.</p>
			</div>
			<h3>Random Promo 2</h3>
			<div class="panel">
				<img src="http://placehold.it/300x100&text=BADGE">
				<p>Donec elementum eleifend nunc ut ultrices. Suspendisse potenti. Donec lacinia laoreet elit, nec ultrices sapien pretium tristique. Duis sed neque a lorem aliquam lacinia nec sed erat. Vestibulum in risus in justo tincidunt dapibus.</p>
			</div>
			
		</div>
	</div>
</div>	
		<hr >
<?php include('footer.php');?>