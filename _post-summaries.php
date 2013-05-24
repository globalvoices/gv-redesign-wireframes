<?php

/**
 * If ?quickreads=1 show a special format with right column filled with quickreads
 */
if (isset($_GET['quickreads']) AND $_GET['quickreads']) :
	echo "<div class='row'>";
	echo "<div class='small-6 large-4 mobile-12 columns'>";
	$i = 0;
	while ($i < 5) :
		$i++;
//		echo "<div class='small-6 large-4 mobile-12 columns'>";
		echo "
				<div class='panel'>
					<h3>POST SUMMARY $i</h3> <img src='http://placehold.it/300x150&text=featured+image'> 
				</div>";
//		echo "</div>";
	endwhile;
	echo "</div>";
	echo "<div class='small-6 large-4 mobile-12 columns'>";
	$i = 0;
	while ($i < 5 ) :
		$i++;
//		echo "<div class='small-6 large-4 mobile-12 columns'>";
		echo "
				<div class='panel'>
					<h3>POST SUMMARY $i</h3> <img src='http://placehold.it/300x150&text=featured+image'> 
				</div>";
//		echo "</div>";
	endwhile;
	echo "</div>";
	
	echo "<div class='small-6 large-4 mobile-12 columns'>";
	$i = 0;
	while ($i < 10) :
		$i++;
//		echo "<div class='small-6 large-4 mobile-12 columns'>";
		echo "
				<div class='panel'>
					<h3>QUICKREAD HEADLINE $i</h3> 
				</div>";
//		echo "</div>";
	endwhile;
	echo "</div>";	
	
	
	
	echo "</div><!--row-->";
	
/**
 * Otherwise show default where all posts are shown in a single grid
 */
else :
	$i = 0;
	while ($i < 12) :
		$i++;
		echo "<div class='small-6 large-4 mobile-12 columns'>
				<div class='panel'>
					<h3>POST SUMMARY $i</h3> <img src='http://placehold.it/300x150&text=featured+image'> 
				</div>
			</div>";
	endwhile;
endif;

?>
	<div class='small-4 columns'>
		<span class='button secondary small'>&laquo; Older Posts</span>
	</div>
	<div class='small-4 columns text-right'>
		<span class='button secondary small'>Newer Posts &raquo;</span>
	</div>