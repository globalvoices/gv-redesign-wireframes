<?php include('header.php');?>


<div class="row">
	<div class="small-12 columns">
		<h2 class="inline-block">
			<a href=''>Americas</a>
		</h2>
		<span style='padding-left:1em;font-weight:bold;'>Posts in <a href='category.php'>Caribbean</a> or <a href='category.php'>Latin America</a> or <a href='category.php'>North America</a></span>
<!--		<div class='panel hide-for-small'>
			<ul class='inline-list'>
				<?php
				$i=0;				
				while ($i < 26) :
					$lipsum_name = phpsum_words(1, 2);
					echo "<li><a href='#'>$lipsum_name</a></li>";
					$i++;
				endwhile;
				?>
				<li><i>[Child Categories of the various categories. All together? Separate?]</i></li>
			</ul>
		</div>-->
		
	</div>

	<div class="show-for-mobile small-12 columns">
		<span class="button small secondary dropdown " data-dropdown="drop-cat-tools" style="width:100%">
			Category Tools
		</span>

		<div id="drop-cat-tools" class="f-dropdown medium content" data-dropdown-content>
					<span class="button small secondary"><a>RSS for these categories</a></span>

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
			   <option>Monthly Archives for these categories</option>
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
				<div class="large-4 columns hide-for-mobile">

			<span class="button small secondary"><a>RSS for Category</a></span>
			<span class="button small secondary dropdown inline-block" style='margin-left:1em' data-dropdown="drop-faceted">
				Refine results
			</span>

			<div id="drop-faceted" class="f-dropdown medium content" data-dropdown-content>
			  <p>Options to mix in a second category or remove a category</p>
			</div>
			
			<form class='custom inline-block'>
			 <select id="customDropdown1" class="medium">
			   <option>Countries in Caribbean</option>
			   <option>CHILD COUNTRY</option>
			   <option>CHILD COUNTRY</option>
			   <option>CHILD COUNTRY</option>
			   <option>CHILD COUNTRY</option>
			   <option>CHILD COUNTRY</option>
			   <option>CHILD COUNTRY</option>
			   <option>CHILD COUNTRY</option>
			 </select>
			 <select id="customDropdown1" class="medium">
			   <option>Countries in Latin America</option>
			   <option>CHILD COUNTRY</option>
			   <option>CHILD COUNTRY</option>
			   <option>CHILD COUNTRY</option>
			   <option>CHILD COUNTRY</option>
			   <option>CHILD COUNTRY</option>
			   <option>CHILD COUNTRY</option>
			   <option>CHILD COUNTRY</option>
			 </select>
			 <select id="customDropdown1" class="medium">
			   <option>Countries in North America</option>
			   <option>CHILD COUNTRY</option>
			   <option>CHILD COUNTRY</option>
			   <option>CHILD COUNTRY</option>
			   <option>CHILD COUNTRY</option>
			   <option>CHILD COUNTRY</option>
			   <option>CHILD COUNTRY</option>
			   <option>CHILD COUNTRY</option>
			 </select>
				
			 <select id="customDropdown1" class="medium">
			   <option>Monthly Archives for Category</option>
			   <option>Month</option>
			   <option>Month</option>
			   <option>Month</option>
			 </select>
			</form>

		</div>
	</div>
		<hr>
		
		<div class='row'>
			<div class="large-8 columns">
				<h3>LATEST POSTS</h3>
				<?php include('_post-summaries.php') ?>
			</div>
			<div class="large-4 columns">
				<h3>QUICK READS</h3>
				<?php include('_quickreads.php');?>
			</div>
		</div>		
<?php include('footer.php');?>