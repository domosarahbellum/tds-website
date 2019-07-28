<footer id="footer">
  <div class="">
    
    <?php if (has_nav_menu('footer')): ?>
      <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
      <?php endif; ?>
    <div id="footer-meta">
        &copy;<?php echo esc_html(date_i18n(__('Y','ss-foundation'))); ?> <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html(get_bloginfo('name')); ?></a>
        
        <?php if (is_active_sidebar('footer')): ?>
          <div id="footer-widgets">
            <?php dynamic_sidebar('footer'); ?>
          </div>
        <?php endif; ?>
        
      </div>
  </div>
</footer>
<?php wp_footer(); ?>

</div>
</body>
</html>
