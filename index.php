<?php get_header(); ?>
	<div class="container" >
	<div class="row">

		<div class="col-sm-8 blog-main">

			<?php while ( have_posts() ) : the_post();

        		get_template_part( 'content', get_post_format() );

            endwhile; ?>


		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>

	</div> <!-- /.row -->
	</div> <!-- /.conatiner -->

<?php get_footer(); ?>
