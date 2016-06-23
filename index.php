<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>


	<div id="content">

		<h2><a href = "<?php the_permalink(); ?>"><?php the_title();?></a></h2>
		<p><?php the_content();?></p>
	</div><!--end of content-->
	
	<?php endwhile;
	else :
		echo "<p>No content found</p>";
endif;

get_footer();

?>

