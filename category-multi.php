<?php include('header.php');?>


<div class="row">
	<div class="small-12 columns">
		<h2 class="inline-block">
			<a href=''>CATEGORY NAME</a> or <a href=''><?php echo phpsum_words(1, 3)?></a> or <a href=''><?php echo phpsum_words(1, 3)?></a>
		</h2>
		<p>Posts in any of these categories. <i>[replace "any" with "all" on this line and "or" with "and" above for union instead of intersection]</i></p>
		<div class='panel hide-for-small'>
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
		</div>
		
	</div>
	<div class="small-12 columns hide-for-mobile">
		<span class="button small secondary"><a>RSS for these categories</a></span>
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
			   <option>Monthly Archives for these categories</option>
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
		<div class="large-4 columns">

			<div class="panel">
				<p>[We can't show category description here because it's likely to be way too long if we show one for each of the multi-categories.]</p>
				<p>[So what to show??? Homepage promo box? Post headlines?]</p>
			</div>


		</div>
	</div>
		<hr>
		
		<div class='row'>
			<div class="large-12 columns">
				<h3>LATEST POSTS <del>ABOUT CATEGORY NAME</del></h3>
			</div>
			<?php include('_post-summaries.php') ?>

			</div>
		</div>	
<?php include('footer.php');?>