<?php include('header.php');?>


<div class="row">
	<div class="small-12 columns">
		<h3 class="inline-block">
			CATEGORY NAME <small class='hide-for-mobile'> &laquo; <A>PARENT</a> &laquo; <a>GRANDPARENT</a></small>
		</h3>
		<div class='panel hide-for-small'>
			<ul class='inline-list'>
				<?php
				$i=0;
				while ($i < 16) :
					echo "<li><a href='#'>Child #$i</a></li>";
					$i++;
				endwhile;
				?>
			</ul>
		</div>
		
	</div>
	<div class="small-12 columns">
			<span class="button small secondary"><a>RSS for Category</a></span>
				<span class="button small secondary dropdown inline-block" style='margin-left:1em' data-dropdown="drop-faceted">
			Refine results
		</span>

		<div id="drop-faceted" class="f-dropdown medium content" data-dropdown-content>
		  <p>Options to mix in a second category or remove a category</p>
		</div>				
		<form class='custom inline-block show-for-mobile' style='display:none;'>
			 <select id="customDropdown1" class="medium">
			   <option>Children of Category</option>
			   <option>Sibling Category</option>
			   <option>Sibling Category</option>
			   <option>Sibling Category</option>
			 </select>
		</form>		
		<form class='custom inline-block'>
			 <select id="customDropdown1" class="medium">
			   <option>Also in PARENT</option>
			   <option>Sibling Category</option>
			   <option>Sibling Category</option>
			   <option>Sibling Category</option>
			 </select>
		</form>		

		<form class='custom inline-block'>
			 <select id="customDropdown1" class="medium">
			   <option>Monthly Archives for Category</option>
			   <option>Month</option>
			   <option>Month</option>
			   <option>Month</option>
			 </select>
		</form>
	</div>
</div>
	<div class="row hero">
		<div class="large-8 columns featured-posts">

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

			<div class="panel">
				<p>[Content from description field of category. Relevant editors, special funders etc.]</p>
				<p>[IF NO CUSTOM CONTENT: ???]</p>
			</div>


		</div>
	</div>
		<hr>
		
		<div class='row'>
			<div class="large-12 columns">
				<h3>LATEST POSTS ABOUT CATEGORY NAME</h3>
			</div>
				<?php 
				$i = 0;
				while ($i < 12) :
					$i++;
					echo "<div class='small-6 large-4 columns'>
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