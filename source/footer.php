    <footer class="site-footer">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | Powered by WordPress</p>
        <div class="footer-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'menu_class' => 'footer-links',
                'container' => false,
                'fallback_cb' => false,
            ));
            ?>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
