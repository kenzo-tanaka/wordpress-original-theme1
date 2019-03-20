  <footer class="site-footer">
    <div class="site-info container">
      <p>
      Copyright © <?php bloginfo('name') ?> All Rights Reserved.
      </p>
    </div>
  </footer><!-- .footer -->
  <?php wp_footer(); ?>
  <script>
  // gnav drawer open
    $(function() {
      $('.drbtn').on('click', function () {
        $('.drawer').toggleClass('action');
        $('body').toggleClass('action');
      });
    });

    // gnav drawer close
    $(function() {
      $('.gnav_btn_close').on('click', function () {
        $(window).scrollTop(0);
        $('.drawer').toggleClass('action');
        $('body').toggleClass('action');
      });
    });
  </script>
</body>
</html>
