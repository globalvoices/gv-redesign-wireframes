<hr>
<div class='row'>
	<div class='large-3 small-6 mobile-12 columns'>
		<div class='panel'>
			<h3>Learn More</h3>
			<ul class='side-nav'>
				  <?php include('_menu-list.php');?>
			</ul>
		</div>
	</div>
	<div class='large-3 small-6 mobile-12  columns'>
		<div class='panel'>
			<h3>Subscribe</h3>
			<ul class='small-block-grid-2 large-block-grid-4'>
				<li><img src="http://placehold.it/75x75&text=tw"></li>
				<li><img src="http://placehold.it/75x75&text=fb"></li>
				<li><img src="http://placehold.it/75x75&text=g"></li>
				<li><img src="http://placehold.it/75x75&text=tb"></li>
			</ul>
			<?php include('_email-form.php');?>
		</div>
	</div>
	<div class='large-3 small-6 mobile-12  columns'>
		<div class='panel'>
			<h3>Copyright</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sapien lacus, non adipiscing leo.</p>
			<img src="http://placehold.it/200x50">
			
		</div>
	</div>	
	<div class='large-3 small-6 mobile-12  columns'>
		<div class='panel'>
			<h3>Funders</h3>
			<img src="http://placehold.it/200x50&text=funder+logo">
			<img src="http://placehold.it/200x50&text=funder+logo">
			<img src="http://placehold.it/200x50&text=funder+logo">
			<img src="http://placehold.it/200x50&text=funder+logo">
			<img src="http://placehold.it/200x50&text=funder+logo">
			<img src="http://placehold.it/200x50&text=funder+logo">
		</div>
	</div>	
</div>

<script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'javascripts/vendor/zepto' : 'javascripts/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="javascripts/foundation/foundation.js"></script>
	
	<script src="javascripts/foundation/foundation.alerts.js"></script>
	
	<script src="javascripts/foundation/foundation.clearing.js"></script>
	
	<script src="javascripts/foundation/foundation.cookie.js"></script>
	
	<script src="javascripts/foundation/foundation.dropdown.js"></script>
	
	<script src="javascripts/foundation/foundation.forms.js"></script>
	
	<script src="javascripts/foundation/foundation.joyride.js"></script>
	
	<script src="javascripts/foundation/foundation.magellan.js"></script>
	
	<script src="javascripts/foundation/foundation.orbit.js"></script>
	
	<script src="javascripts/foundation/foundation.placeholder.js"></script>
	
	<script src="javascripts/foundation/foundation.reveal.js"></script>
	
	<script src="javascripts/foundation/foundation.section.js"></script>
	
	<script src="javascripts/foundation/foundation.tooltips.js"></script>
	
	<script src="javascripts/foundation/foundation.topbar.js"></script>
	
  
  <script>
    $(document).foundation();
  </script>
  		<script type='text/javascript'>
			$(document).ready(
			function($) {
				$('#menu-button').click(function(){
					$('#header-menu').toggleClass('hide-for-mobile');
				});
			});
		</script>
</body>
</html>
