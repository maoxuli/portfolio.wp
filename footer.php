</div>
<div id="footer" role="contentinfo">
    <p>Copyright 2009 <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>. Powered by WordPress.</p>
    <a href="<?php bloginfo('url'); ?>">
        <img src="<?php bloginfo('template_url'); ?>/images/logo3.gif" /></a>
    <div class="clear"></div>
</div><!-- #footer -->
</div><!-- #wrapper -->
<?php
    /* Always have wp_footer() just before the closing </body>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to reference JavaScript files.
     */

    wp_footer();
?>
</body>
</html>
