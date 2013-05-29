<?php include('header.php');?>


<div class="row">
	<div class="small-12 columns">
		<img src="http://placehold.it/750x150&text=special+category+logo" style='margin-bottom:1em;'>
	</div>
<!--	<div class='small-4 columns'>
		<div class='panel'>
			ddd
		</div>
	</div>-->
	<div class="small-12 columns hide-for-mobile">
		<span class="button small secondary"><a>RSS for Category</a></span>
		<span class="button small secondary dropdown inline-block" style='margin-left:1em' data-dropdown="drop-faceted">
			Refine results
		</span>

		<div id="drop-faceted" class="f-dropdown medium content" data-dropdown-content>
		  <p>Options to mix in a second category or remove a category</p>
		</div>				
	
<!--		<form class='custom inline-block'>
			 <select id="customDropdown1" class="medium">
			   <option>Also in PARENT</option>
			   <option>Sibling Category</option>
			   <option>Sibling Category</option>
			   <option>Sibling Category</option>
			 </select>
		</form>		-->

		<form class='custom inline-block'>
			 <select id="customDropdown1" class="medium">
			   <option>Monthly Archives for Category</option>
			   <option>Month</option>
			   <option>Month</option>
			   <option>Month</option>
			 </select>
		</form>
	</div>
	<div class="show-for-mobile small-12 columns">
		<span class="button small secondary dropdown " data-dropdown="drop-cat-tools" style="width:100%">
			Category Tools
		</span>

		<div id="drop-cat-tools" class="f-dropdown medium content" data-dropdown-content>
					<span class="button small secondary"><a>RSS for Category</a></span>

		  	<form class='custom inline-block'>
			 <select id="customDropdown1" class="medium">
			   <option>Children of Category</option>
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
					<span class="button small secondary"><a>Refine Results</a></span>

		</div>				

	</div>
</div>
	<div class="row hero">
		<?php include('_featured-posts.php');?>
		<div class="large-4 columns">

			<div class="panel">
				<p>[Content from description field of category. Relevant editors, special funders etc.]</p>
				<p>[IF NO CUSTOM CONTENT: ??? Homepage promo box? Post headlines?]</p>
			</div>


		</div>
	</div>
		<hr>
			
		<div class='row'>
			<div class="large-8 columns">
				<h3>LATEST POSTS ABOUT CATEGORY NAME</h3>
				<?php include('_post-summaries.php') ?>
			</div>
			<div class="large-4 columns">
				<h3>QUICK READS</h3>
				<?php include('_quickreads.php');?>
			</div>
		</div>	
		
<?php include('footer.php');?>