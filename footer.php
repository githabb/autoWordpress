<footer class="footer">
    <div class="container">
      <div class="footer__inner">
      <?php the_custom_logo(); ?>
        <div class="social footer__social">
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/images/icon/instagram.svg" alt="instagram icon">
          </a>
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/images/icon/telegram.svg" alt="telegram icon">
          </a>
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/images/icon/whatsapp.svg" alt="whatsapp icon">
          </a>
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/images/icon/facebook.svg" alt="facebook icon">
          </a>
        </div>

        <a class="footer__copy" href="<?php echo get_page_link(74); ?>">
          Политика конфиденциальности
        </a>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>


  
</body>

</html>