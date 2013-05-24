<?php include('header.php');?>


<div class="row">
	<div class="small-12 columns">
		<h2 class="inline-block">
			AUTHOR NAME <small class='hide-for-mobile'>999 posts &middot; Joined Jan 1 1970</small>
		</h2>
	</div>
</div>
<div class="row">
	<div class="large-8 columns">
		<div class='panel' data-clearing>
			<img src="http://placehold.it/160x160&text=AVATAR" class="left" style="margin-right: 1em;">
			<p>Author Bio Text. Nam aliquam molestie nisl, vitae adipiscing enim bibendum at. Cras eget cursus tortor. Nulla pellentesque risus a lectus tempor rutrum. Curabitur bibendum nibh sed enim ultrices condimentum. Praesent iaculis sagittis nisl vel molestie. Aenean scelerisque, velit id ultrices semper, orci nisl suscipit erat, sit amet pretium ante nulla id tortor. Mauris ac orci vel eros volutpat euismod. Proin imperdiet blandit facilisis. Integer a consectetur risus. Nulla eget turpis tellus.</p>

		</div>
	</div>
	<div class="large-4 columns hide-for-mobile">
		<div class="panel">
			<p>[AUTHOR CUSTOM HTML]</p>
			<img src="http://placehold.it/300x100&text=BADGE">
			<p> Praesent iaculis sagittis nisl vel molestie. Proin imperdiet blandit facilisis. Integer a consectetur risus. Nulla eget turpis tellus.</p>
			
		</div>
	</div>
	<div class="desktop-context-tools small-12 columns hide-for-mobile">
		<span class="button small secondary"><a>RSS for Author</a></span>
		<span class="button small secondary"><a>Email Author</a></span>
		<span class="button small secondary"><a>Follow @author on Twitter</a></span>
	
		<form class='custom inline-block'>
			 <select id="customDropdown1" class="medium">
			   <option>Monthly Archives for Author</option>
			   <option>Month</option>
			   <option>Month</option>
			   <option>Month</option>
			 </select>
		</form>
	</div>
	<div class="mobile-context-tools show-for-mobile small-12 columns">
		<span class="button small secondary dropdown " data-dropdown="drop-cat-tools" style="width:100%">
			Author Tools
		</span>

		<div id="drop-cat-tools" class="f-dropdown medium content" data-dropdown-content>
			<span class="button small secondary"><a>RSS for Author</a></span>
			<span class="button small secondary"><a>Email Author</a></span>
			<span class="button small secondary"><a>Follow @author on Twitter</a></span>

			<form class='custom inline-block'>
				 <select id="customDropdown1" class="medium">
				   <option>Monthly Archives for Author</option>
				   <option>Month</option>
				   <option>Month</option>
				   <option>Month</option>
				 </select>
			</form>
		</div>				

	</div>

</div>		
<hr>
<div class='row'>
		<div class="large-12 columns">
			<h3>LATEST POSTS BY AUTHOR</h3>
		</div>
		<?php include('_post-summaries.php') ?>

	</div>
<?php include('footer.php');?>