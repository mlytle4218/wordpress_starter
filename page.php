<?php get_header(); ?>

	<div class="row">
	<div class="container">
		<div class="col-sm-8">
		<?php if (have_posts()) :
			$count_posts = wp_count_posts();
			// $bob = var_dump(get_object_vars($count_posts));

			// echo $bob;
			$array = json_decode(json_encode($count_posts), true);
			// print_r($array);
			echo $array["publish"];
		endif;
		 ?>

			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					echo get_post_format();
  	
					get_template_part( 'content', get_post_format() );
  
				endwhile; endif; 
			?>
			<?php
    while ( have_posts() ) : the_post();   
    	echo the_post();
        the_content();
    endwhile;
?>

		</div> <!-- /.col -->
		<?php get_sidebar(); ?>
		</div>
	</div> <!-- /.row -->

<?php get_footer(); ?>