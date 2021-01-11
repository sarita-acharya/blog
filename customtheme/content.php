<div class="blog-post">
<?php if ( has_post_thumbnail() ) { ?>
    <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail( 'medium', array( 'class' => 'left',
            'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) )
        ) ); ?>
    </a>
<?php } ?>
  <h2 class="blog-post-title"><a href="<?php echo get_permalink($ID); ?>"><?php the_title(); ?></a></h2>
  <p class="blog-post-meta"><?php the_date(); ?> <a href="#"><?php the_author(); ?></a></p>


  <hr />

  <!-- the rest of the content -->
