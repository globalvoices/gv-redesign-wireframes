<?php include('header.php');?>


<div class="row">
	<div class="small-12 columns">
		<h2 class="inline-block">
			AUTHOR NAME 
		</h2>

	</div>
</div>
<div class="row">
	<div class="large-8 columns">
		<div class='panel' data-clearing>
			<img src="http://placehold.it/160x160&text=AVATAR" class="left" style="margin-right: 1em;">
			<p>Author Bio Text. Nam aliquam molestie nisl, vitae adipiscing enim bibendum at. Cras eget cursus tortor. Nulla pellentesque risus a lectus tempor rutrum. Curabitur bibendum nibh sed enim ultrices condimentum. Praesent iaculis sagittis nisl vel molestie. Aenean scelerisque, velit id ultrices semper, orci nisl suscipit erat, sit amet pretium ante nulla id tortor. Mauris ac orci vel eros volutpat euismod. Proin imperdiet blandit facilisis. Integer a consectetur risus. Nulla eget turpis tellus.</p>
<!--			<p></p>-->

			<span class="button small secondary dropdown"><a>Email AUTHOR NAME</a></span>			
			<span class="button small secondary"><a>Follow @authorname on Twitter</a></span>
			
		</div>
	</div>
	<div class="large-4 columns hide-for-mobile">
		<div class="panel">
			<i><p>999 posts &middot; Joined Jan 1 1970</p></i>
			<span class="button small secondary"><a>RSS: AUTHOR NAME</a></span>

			<span class="button small secondary dropdown inline-block" data-dropdown="drop-child-terms">
				Monthly Archives: <span class="inline-block">AUTHOR NAME</span>
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
			<span class="button small secondary"><a>View all contrubutors &raquo;</a></span>

		</div>	

	</div>
	<div class="desktop-context-tools small-12 columns hide-for-mobile">

	</div>

</div>		
<div class='row'>
	<div class="large-8 columns">
<!--		<h3>LATEST POSTS BY AUTHOR</h3>-->
		<?php include('_post-summaries.php') ?>
	</div>

	<div class='large-4 columns'>
<!--		<h3>AUTHOR'S SPACE</h3>-->
		<div class="panel">
			<p>[AUTHOR CUSTOM HTML]</p>
			<img src="http://placehold.it/300x100&text=BADGE">
			<p> Praesent iaculis sagittis nisl vel molestie. Proin imperdiet blandit facilisis. Integer a consectetur risus. Nulla eget turpis tellus.</p>
			
			
		</div>
	</div>
</div>
<?php include('footer.php');?>