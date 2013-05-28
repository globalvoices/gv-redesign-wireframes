<?php
/**
 * Lorem-PHPSum library to give phpsum() function that generates random text.
 */
include ('lorem-phpsum.php');
/**
 * Wrapper to easily generate random Lorum words
 */
function phpsum_words($min = 1, $max = 1) {
	return phpsum($min, $max, array(
		'minCharsInWords' => 6,
		'lorem' => 'false',
		'periods' => 'false',
		'html' => 'false',
	));
}

/**
 * Define settings that can be used to alter behavior
 */
$header_taxonomy_menus = true;

if (isset($_GET['collapsed_taxonomies']) AND $_GET['collapsed_taxonomies'])
	$header_taxonomy_menus = false;

if (isset($_GET['special_coverage_homepage']) AND $_GET['special_coverage_homepage'])
	$special_coverage_homepage = true;
//$full_regions = true;

?>
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
  <title>GV Wireframes</title>

  
  <link rel="stylesheet" href="stylesheets/app.css" />
  

  <script src="javascripts/vendor/custom.modernizr.js"></script>

</head>
<body>
	<div class="row">
		<div class="large-12 columns">
			<div class="panel hide-for-small">
				<p>
					<small>TRANSLATIONS: Lorem, Ipsum, Dolor, Sit, Amet, Consectetur, Adipiscing, Elit, Donec, Piscing, Elit, Τύπος, Манифест, Лингва, للمدونين, অনুবাদকেরা, 번역팀, 关于全球之声, <a href="">Learn more &raquo;</a></small>
				</p>					
			</div>
			<div class='small button secondary dropdown hide-for-medium-up' data-dropdown="drop-langs">
				Trâñ$ Låñªg µµary 
			</div>

			<ul id="drop-langs" class="f-dropdown inline-list" data-dropdown-content>
			  <li><a href="#">Lang 1</a></li>
			  <li><a href="#">Lang 2</a></li>
			  <li><a href="#">Lang 3</a></li>
			  <li><a href="#">Lang 4</a></li>
			  <li><a href="#">Lang 5</a></li>
			  <li><a href="#">Lang 6</a></li>
			</ul>
			
		</div>
	</div>	
	<div class="row">
		<div class="large-4 small-6 mobile-12 columns">
			<a href='index.php'>
				<img src="http://placehold.it/300x100&text=LOGO" style="margin-bottom:1.25em">
			</a>	

		</div>
		<div class="large-8 small-6 mobile-12 columns">
			<div class="panel" style='margin-bottom:0;'>
				<div class="row collapse">
					<div class="large-6 small-12 mobile-12 columns">
						<div class='small button secondary' style='margin-bottom:0;' data-dropdown="drop-menu">
							MENU &#9776;
						</div>

						<ul id="drop-menu" class="f-dropdown" data-dropdown-content>
						  <?php include('_menu-list.php');?>
						  
						</ul>
						
						<img src="http://placehold.it/30x30&text=fb">
						<img src="http://placehold.it/30x30&text=tw">
						<img src="http://placehold.it/30x30&text=g">
						<img src="http://placehold.it/30x30&text=tb">
					</div>
					<div class="large-6 small-12 mobile-12 columns">
						<form style='margin-bottom:0;'>
							 <div class="row collapse">
							   <div class="small-8 columns">
								<input type="text" placeholder="Search" style='margin-bottom:0;'>
							   </div>
							   <div class="small-4 columns">
								<a href="#" class="button postfix radius" style='margin-bottom:0;'>Search</a>
							   </div>
							 </div>
						</form>
					</div>
				</div>
				<div class="row taxonomy-buttons <?php if ($header_taxonomy_menus) echo "hide-for-medium-up";?>">
					<div class="small-6 columns">
						<a href="#" class="small button secondary dropdown small-12" style='margin-bottom:0;margin-top:.5em;' data-dropdown="drop1">Regions</a>

						<ul id="drop1" class="f-dropdown" data-dropdown-content>
						  <li><a href="#">This is a link</a></li>
						  <li><a href="#">This is another</a></li>
						  <li><a href="#">Yet another</a></li>
						</ul>


					</div>
					<div class="small-6 columns">

						<a href="#"  class="small button secondary dropdown small-12 columns" style='margin-bottom:0;margin-top:.5em;' data-dropdown="drop2">Topics</a>
						<ul id="drop2" class="f-dropdown content" data-dropdown-content>
						  <li><a href="#">This is a link</a></li>
						  <li><a href="#">This is another</a></li>
						  <li><a href="#">Yet another</a></li>
						</ul>	

					</div>
				</div>
			</div>
			
		</div>
		
	</div>
	<?php if ($header_taxonomy_menus) : ?>
	<div class='row taxonomy hide-for-small'>
		<div class='large-12 columns'>
			<div class="section-container horizontal-nav" data-section="horizontal-nav" data-options="one_up: false;">
			<?php 
				
				$region_names = array(
					'',
					'[METAREGIONS]',
					'Quisque',
					'Consequat',
					'Henderit',
					'Ultrices',
					'Aenean',
				);
				$i = 0;
				while ($i < 6) :
					$i++;
					echo " <section>
					    <p class='title' data-section-title><b><a href='#panel1'>{$region_names[$i]} </a></b></p>
					    <div class='content' data-section-content>
						 <p><a href='#'>All posts from {$region_names[$i]}</a></p>
						 <ul class='side-nav'>";
					$x = 0;
					while ($x < 10) :
						$x++;
						echo "<li>Country$x</li>";
					
							
					endwhile;
					echo "</ul>
					    </div>
					  </section>
					";
				endwhile;
				?>

			</div>
		</div>
		<div class='large-12 columns'>
			<ul class='button-group'>
				<li><a href='#' class="small button secondary">[TOPICS]</a></li>
				<li><a href='#' class="small button secondary">LORUM IPSUM</a></li>
				<li><a href='#' class="small button secondary">DOLOR</a></li>
				<li><a href='#' class="small button secondary">ESQUIMET</a></li>
				<li><a href='#' class="small button secondary">SIT AMET</a></li>
				<li><a href='#' class="small button secondary">LECTUS VELIT</a></li>
				<li><a href='#' class="small button secondary">VENEATIS</a></li>
				<li><a href='#' class="small button secondary">VESTIBULUM</a></li>
				<li><a href='#' class="small button secondary dropdown ">All Topics</a></li>
			</ul>
		</div>	
<!--		<div class='large-2 columns'>
			<div class="button dropdown secondary">All Topics</div>
		</div>-->
	</div>
	<?php endif;// $header_taxonomy_menus?>
	<hr>


