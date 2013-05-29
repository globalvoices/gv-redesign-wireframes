<?php

/**
 * If ?quickreads=1 show a special format with right column filled with quickreads
 */
//if (isset($_GET['quickreads']) AND $_GET['quickreads'])
	$quickreads = true;

if ($quickreads) :
	echo "<div class='row'>";
	echo "<div class='small-6 large-4 mobile-12 columns'>";
	$i = 0;
	while ($i < 5) :
		$i++;
//		echo "<div class='small-6 large-4 mobile-12 columns'>";
		echo "
				<div class='panel'>
					<h3>POST SUMMARY </h3> <img src='http://placehold.it/300x150&text=featured+image'> 
				</div>";
//		echo "</div>";
	endwhile;
	echo "</div>";
	echo "<div class='small-6 large-4 mobile-12 columns'>";
	while ($i < 10 ) :
		$i++;
//		echo "<div class='small-6 large-4 mobile-12 columns'>";
		echo "
				<div class='panel'>
					<h3>POST SUMMARY</h3> <img src='http://placehold.it/300x150&text=featured+image'> 
				</div>";
//		echo "</div>";
	endwhile;
	echo "</div>";
	
	echo "<div class='small-12 large-4 mobile-12 columns'>";
	echo "<div class='panel text-center'>";
	$i = 0;
	while ($i < 10) :
		$i++;
//		echo "<div class='small-6 large-4 mobile-12 columns'>";
		echo "<h3>QUICK READ HEADLINE $i</h3>";
//		echo "</div>";
	endwhile;
	?>

			<a>QUICKREADS ONLY LINK &raquo;</a>
			</div>
			<h3>OPTIONAL PROMO WIDGET</h3>
			<div class='panel'>
				<h5>OR OTHER CONTENT LISTING.</h5>
				<p>
					 <?php echo phpsum_words(20, 20);?> 
				</p>
			</div>	
		</div>
	</div><!--row-->

	<?php	
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