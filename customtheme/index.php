<?php get_header(); ?>
<div class="row">
    <div class="col-sm-8 blog-main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                get_template_part( 'content', get_post_format() ); ?>
    </div>
    <?php endwhile; ?>
    <nav>
        <ul class="pager">
            <li><?php
					global $wp_query;
					
					$big = 999999999; // need an unlikely integer
					$translated = __( 'Page', 'mytextdomain' ); // Supply translatable string
					
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages,
							'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'
					) );
					?></li>
            <li><?php //next_posts_link( 'Previous' ); ?></li>
            <li><?php //previous_posts_link( 'Next' ); ?></li>
        </ul>
    </nav>
    <?php endif; ?>

    <?php get_sidebar(); ?>
</div> <!-- /.row -->
<?php get_footer(); ?>