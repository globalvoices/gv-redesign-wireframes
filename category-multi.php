<?php include('header.php');?>


<div class="row">
	<div class="small-12 columns">
		<h2 class="inline-block">
			Americas
		</h2>
		<span style='padding-left:1em;font-weight:bold;'> <a href='category.php'>Caribbean</a> &middot; <a href='category.php'>Latin America</a> &middot; <a href='category.php'>North America</a></span>
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


</div>
	<div class="row hero">
		<?php include('_featured-posts.php');?>
			<div class="large-4 columns hide-for-mobile">
			<span class="button small secondary"><a>RSS: Americas</a></span>
			<span class="button small secondary dropdown inline-block" data-dropdown="drop-child-terms">
				Monthly Archives: Americas
			</span>
			<div id="drop-child-terms" class="f-dropdown medium " data-dropdown-content>
				<ul class="side-nav">
					<li>[Month / Year]</li>
					<li>[Month / Year]</li>
					<li>[Month / Year]</li>
					<li>[Month / Year]</li>
					<li>[Month / Year]</li>
					<li>[Month / Year]</li>
					<li>[Month / Year]</li>
					<li>[Month / Year]</li>
				</ul>
			</div>
			<span class="button small secondary dropdown inline-block" data-dropdown="drop-faceted">
				Refine results
			</span>

			<div id="drop-faceted" class="f-dropdown medium content" data-dropdown-content>
			  <p>Options to mix in a second category or remove a category</p>
			</div>

			
			<span class="button small secondary dropdown inline-block"  data-dropdown="drop-child-terms">
				Countries in Caribbean
			</span>
			<div id="drop-child-terms" class="f-dropdown medium" data-dropdown-content>
				<ul class="side-nav">
					<li>Country in Latin America</li>
					<li>Country in Latin America</li>
					<li>Country in Latin America</li>
					<li>Country in Latin America</li>
					<li>Country in Latin America</li>
					<li>Country in Latin America</li>
				</ul>
			</div>
			<span class="button small secondary dropdown inline-block"  data-dropdown="drop-child-terms">
				Countries in Latin America
			</span>
			<div id="drop-child-terms" class="f-dropdown medium" data-dropdown-content>
				<ul class="side-nav">
					<li>Country in Latin America</li>
					<li>Country in Latin America</li>
					<li>Country in Latin America</li>
					<li>Country in Latin America</li>
					<li>Country in Latin America</li>
					<li>Country in Latin America</li>
				</ul>
			</div>
			<span class="button small secondary dropdown inline-block"  data-dropdown="drop-child-terms">
				Countries in North America
			</span>
			<div id="drop-child-terms" class="f-dropdown medium" data-dropdown-content>
				<ul class="side-nav">
					<li>Country in Latin America</li>
					<li>Country in Latin America</li>
					<li>Country in Latin America</li>
					<li>Country in Latin America</li>
					<li>Country in Latin America</li>
					<li>Country in Latin America</li>
				</ul>
			</div>

			
			

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