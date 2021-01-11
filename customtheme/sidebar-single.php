        </div>
        <!-- /.blog-post -->
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p><?php the_author_meta( 'description' ); ?> </p>
        </div>
        <div class="sidebar-module">
<?php if ( have_posts() ) : ?>
   
    <!-- Start of the main loop. -->
    <?php while ( have_posts() ) : the_post(); ?>
      
        <?php the_title(); ?>
          
        <?php wp_link_pages(); ?> 
       
    <?php endwhile; ?>
  
<?php endif; ?>
        </div>
        
        <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
                <li><a href="#">GitHub</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
            </ol>
        </div>
        </div><!-- /.blog-sidebar -->

        </div><!-- /.row -->