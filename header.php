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
//if (isset($_GET['header_single_taxonomy_menu']) AND $_GET['header_single_taxonomy_menu'])
	$header_single_taxonomy_menu = true;

$header_taxonomy_menus = true;

if (isset($_GET['collapsed_taxonomies']) AND $_GET['collapsed_taxonomies'])
	$header_taxonomy_menus = false;

//if (isset($_GET['special_coverage_homepage']) AND $_GET['special_coverage_homepage'])
	$special_coverage_homepage = true;

$homepage_promo_widgets = true;
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
					<small>Languages <span style="letter-spacing:.2em;"><big>يእ</big>ΩЖ译</span>: Lorem, Ipsum, Dolor, Sit, Amet, Consectetur, Adipiscing, Elit, Donec, Piscing, Elit, Τύπος, Манифест, Лингва, للمدونين, অনুবাদকেরা, 번역팀, 关于全球之声, <a href="">Learn more &raquo;</a></small>
				</p>					
			</div>
			<div class='small button secondary dropdown hide-for-medium-up' data-dropdown="drop-langs">
				Languages <span style="letter-spacing:.2em;"><big>يእ</big>ΩЖ译 </span>
			</div>
			
			<ul id="drop-langs" class="f-dropdown large inline-list" data-dropdown-content>
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
		<div class="large-4 small-6 mobile-8 columns">
			<a href='index.php'>
				<img src="http://placehold.it/300x100&text=LOGO" style="margin-bottom:1.25em">
			</a>	

		</div>
		<span class="menu-button button small secondary show-for-mobile mobile-inline-block" id="menu-button" style='margin-bottom:.5em;' data-dropdown="drop-menu">
			Menu &#9776;
		</span>

		<div id="header-menu" class="header-menu large-8 small-6 mobile-12 hide-for-mobile columns">
				<div class="row collapse">
					<div class="large-6 small-12 mobile-12 columns">

							<div class='small button secondary dropdown' style='margin-bottom:.5em;' data-dropdown="drop-menu">
								About Us
							</div>

							<ul id="drop-menu" class="f-dropdown" data-dropdown-content>
							  <?php include('_menu-list.php');?>

							</ul>
							<span class="subscribe-button button small secondary dropdown inline-block" style=' margin-bottom:.5em;' data-dropdown="drop-subscribe">
								Subscribe 
							</span>
							<div id="drop-subscribe" class="f-dropdown medium content" data-dropdown-content>
								<?php include('_email-form.php');?>

								<p>
									<span class="button small secondary"><a>Like on Facebook</a></span>
									<span class="button small secondary"><a>Follow on Twitter</a></span>
								</p>
								<p>
									<img src="http://placehold.it/30x30&text=g">
									<img src="http://placehold.it/30x30&text=tb">
									<img src="http://placehold.it/30x30&text=ln">
								</p>
							</div>
							<span class="subscribe-button button small secondary dropdown small-inline-block hide-for-medium-up" style=' margin-bottom:.5em;' data-dropdown="drop-regions">
								Regions
							</span>

							<ul id="drop-regions" class="f-dropdown" data-dropdown-content>
							  <li><a href="#">This is a link</a></li>
							  <li><a href="#">This is another</a></li>
							  <li><a href="#">Yet another</a></li>
							</ul>
							<span class="subscribe-button button small secondary dropdown inline-block small-inline-block hide-for-medium-up" style=' margin-bottom:.5em;' data-dropdown="drop-topics">
								Topics
							</span>

							<ul id="drop-regions" class="f-dropdown" data-dropdown-content>
							  <li><a href="#">This is a link</a></li>
							  <li><a href="#">This is another</a></li>
							  <li><a href="#">Yet another</a></li>
							</ul>


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
<!--				<div class="row taxonomy-buttons <?php if ($header_taxonomy_menus) echo "hide-for-medium-up";?>">
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
				</div>-->
			</div>
			
		</div>
		
	</div>
	<?php if ($header_single_taxonomy_menu) :?>
		<div class='row hide-for-small'>
			<div class='large-12 columns'>
				<ul class='button-group' style='height:2em;overflow:hidden;'>
					<li><a href='category-multi.php' class="small button secondary">Africa</a></li>
					<li><a href='category-multi.php' class="small button secondary">Americas</a></li>
					<li><a href='category-multi.php' class="small button secondary">Asia</a></li>
					<li><a href='category-multi.php' class="small button secondary">Europe</a></li>
					<li><a href='category-multi.php' class="small button secondary">Middle East</a></li>
					<li><a href='category.php' class="small button secondary">Politics</a></li>
					<li><a href='category.php' class="small button secondary">Human Rights</a></li>
					<li><a href='category.php' class="small button secondary">Arts & Culture</a></li>
					<li><a href='category.php' class="small button secondary">Video</a></li>
					<li><a href='category.php' class="small button secondary">Photos</a></li>
					<li><a href='category.php' class="small button secondary dropdown " data-dropdown="drop-unified-taxonomy">More</a></li>
				</ul>

				<div id="drop-unified-taxonomy" style='width:100%' class="f-dropdown large content" data-dropdown-content>
					<div class='row'>
						<div class='large-3 small-6 columns'>
							<b><a>World</a></b>
							<ul class='side-nav'>
								<li><a href='category.php'>	Caribbean</a></li>
								<li><a href='category.php'>	Central Asia & Caucasus</a></li>
								<li><a href='category.php'>East Asia</a></li>
								<li><a href='category.php'>Eastern & Central Europe</a></li>
								<li><a href='category.php'>Latin America</a></li>
								<li><a href='category.php'>Middle East & North Africa</a></li>
								<li><a href='category.php'>North America</a></li>
								<li><a href='category.php'>Oceania</a></li>
								<li><a href='category.php'>South Asia</a></li>
								<li><a href='category.php'>Sub-Saharan Africa</a></li>
								<li><a href='category.php'>Western Europe</a></li>
							</ul>
							<a>All regions and countries &raquo;</a>
						</div>
						<div class='large-9 small-6 columns'>
							<b><a>Topics</a></b>
							<div class='row'>
								<div class='large-4 small-12 columns'>
									<ul class='side-nav'>
											<li class=""><a href="http://test.globalvoicesonline.org/-/topics/arts-culture/" rel="tag">Arts &amp; Culture</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/breaking-news/" rel="tag">Breaking News</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/citizen-media/" rel="tag">Citizen Media</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/development/" rel="tag">Development</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/digital-activism/" rel="tag">Digital Activism</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/disaster/" rel="tag">Disaster</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/economics-business/" rel="tag">Economics &amp; Business</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/education/" rel="tag">Education</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/elections/" rel="tag">Elections</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/environment/" rel="tag">Environment</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/ethnicity-race/" rel="tag">Ethnicity &amp; Race</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/film/" rel="tag">Film</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/food/" rel="tag">Food</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/freedom-of-speech/" rel="tag">Freedom of Speech</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/gay-rights-lgbt/" rel="tag">Gay Rights (LGBT)</a></li>
									</ul>
								</div>	
								<div class='large-4 columns'>
									<ul class='side-nav'>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/governance/" rel="tag">Governance</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/health/" rel="tag">Health</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/history/" rel="tag">History</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/human-rights/" rel="tag">Human Rights</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/humanitarian-response/" rel="tag">Humanitarian Response</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/humor/" rel="tag">Humor</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/ideas/" rel="tag">Ideas</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/indigenous/" rel="tag">Indigenous</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/international-relations/" rel="tag">International Relations</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/labor/" rel="tag">Labor</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/language/" rel="tag">Language</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/law/" rel="tag">Law</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/literature/" rel="tag">Literature</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/media-journalism/" rel="tag">Media &amp; Journalism</a></li>
									</ul>
								</div>	
								<div class='large-4 columns'>
									<ul class='side-nav'>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/migration-immigration/" rel="tag">Migration &amp; Immigration</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/music/" rel="tag">Music</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/photography/" rel="tag">Photography</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/politics/" rel="tag">Politics</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/protest/" rel="tag">Protest</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/refugees/" rel="tag">Refugees</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/religion/" rel="tag">Religion</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/science/" rel="tag">Science</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/sport/" rel="tag">Sport</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/technology/" rel="tag">Technology</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/travel/" rel="tag">Travel</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/war-conflict/" rel="tag">War &amp; Conflict</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/women-gender/" rel="tag">Women &amp; Gender</a></li>
											<li class="taxonomy-list-item taxonomy-list-item-topics"><a href="http://test.globalvoicesonline.org/-/topics/youth/" rel="tag">Youth</a></li>
									</ul>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div> 

	<?php elseif ($header_taxonomy_menus) : ?>
	<div class='row taxonomy hide-for-small'>
		<div class='large-12 columns'>
			<div class="section-container horizontal-nav" data-section="horizontal-nav" data-options="one_up: false;">
			<?php 
				
				$region_names = array(
					'',
					'Africa',
					'Americas',
					'Asia',
					'Europe',
					'Middle East',
				);
				$i = 0;
				while ($i < 5) :
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
				<section>
					<p class='title' data-section-title>
						<a href='?header_single_taxonomy_menu=1'>[show unified taxonomy menu]</a>	
					</p>
				</section>
			</div>
		</div>
		<div class='large-12 columns'>
			<ul class='button-group'>
				<li><a href='category.php' class="small button secondary">Politics</a></li>
				<li><a href='category.php' class="small button secondary">Digital Activism</a></li>
				<li><a href='category.php' class="small button secondary">Human Rights</a></li>
				<li><a href='category.php' class="small button secondary">War & Conflict</a></li>
				<li><a href='category.php' class="small button secondary">Arts & Culture</a></li>
				<li><a href='category.php' class="small button secondary">Video</a></li>
				<li><a href='category.php' class="small button secondary">Photos</a></li>
				<li><a href='#' class="small button secondary dropdown ">All Topics</a></li>
			</ul>
		</div>	
<!--		<div class='large-2 columns'>
			<div class="button dropdown secondary">All Topics</div>
		</div>-->
	</div>
	<?php endif;// $header_taxonomy_menus?>


