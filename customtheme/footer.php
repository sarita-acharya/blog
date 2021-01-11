
    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
      <p>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <?php wp_footer(); ?>
</body>
</html>