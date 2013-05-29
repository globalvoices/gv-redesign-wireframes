<div class='row'>
<?php

	$i = 0;
	while ($i < 12) :
		$i++;
		echo "<div class='small-6 large-6 mobile-12 columns'>
				<div class='panel'>
					<h3>POST SUMMARY $i</h3> <img src='http://placehold.it/300x150&text=featured+image'> 
				</div>
			</div>";
	endwhile;

?>
	<div class='small-6 columns'>
		<span class='button secondary small'>&laquo; Older Posts</span>
	</div>
	<div class='small-6 columns text-right'>
		<span class='button secondary small'>Newer Posts &raquo;</span>
	</div>
</div>	