<?php get_header(); ?>

	<div class="row">
		<div class="col-md-8">

			<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
	get_template_part( 'content-single', get_post_format() );
endwhile; endif;
			?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->
<div>
    <?php //get_template_part( 'sidebar-single', get_post_format() ); ?>
</div>
<?php get_footer(); ?>