<?php ?>
</main>
<footer class="site-footer">
  <div class="container">
    <nav class="footer-nav">
      <?php wp_nav_menu(['theme_location' => 'footer', 'container' => false, 'menu_class' => 'menu']); ?>
    </nav>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> — All rights reserved.</p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
