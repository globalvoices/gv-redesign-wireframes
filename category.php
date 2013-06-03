<?php include('header.php');?>


<div class="row">
	<div class="small-12 columns">
		<h2 class="inline-block">
			Dominican Republic
		</h2>
	</div>
</div>
	<div class="row hero">
		<?php include('_featured-posts.php');?>
		<div class="large-4 columns hide-for-mobile">
			<span class="button small secondary inline-block" style="color:#aaa">
				<a>World</a> / <a href='category.php' >Latin America</a> / <span class="inline-block">Dominican Republic</span>
			</span>	

			<span class="button small secondary"><a>RSS: Dominican Republic</a></span>
		
			<span class="button small secondary dropdown inline-block" data-dropdown="drop-child-terms">
				Monthly Archives: Dominican Republic
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
				Other countries in Latin America
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


			
			<div class="panel">
				<p>[Content from description field of category. Relevant editors, special funders etc.]</p>
				<p></p>
			</div>



		</div>
	</div>
		<hr>


		<div class='row'>
			<div class="large-8 columns">
				<h3 class='hide-for-mobile'>Latest Dominican Republic Stories	</h3>
				<?php include('_post-summaries.php') ?>
			</div>
			<div class="large-4 columns">
				<h3>Quick Reads</h3>
				<?php include('_quickreads.php');?>
			</div>
		</div>			
			
<?php include('footer.php');?>