<?php get_header(); ?>
	<div class="row">
		<div class="col-sm-8 blog-main">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                get_template_part( 'content', get_post_format() ); ?>
		</div>
<?php endwhile; ?>
<nav>
	<ul class="pager">
	<li> </li>
		<li><?php next_posts_link( 'Previous' ); ?></li>
		<li><?php previous_posts_link( 'Next' ); ?></li>
	</ul>
</nav>
<?php endif; ?>
			
		<?php get_sidebar(); ?>
	</div> <!-- /.row -->
<?php get_footer(); ?>