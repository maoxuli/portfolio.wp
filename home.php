<?php get_header(); ?>
<div class="post">
    <?php query_posts('pagename=about');
        if (have_posts()) : the_post();?>
        <div class="post-content"><?php the_content(''); ?></div>
    <?php endif;?>
</div>
<div id="grid">
    <?php $odd_or_even = 'odd'; ?>
    <?php foreach (get_categories('orderby=order&hide_empty=0&exclude=1') as $category) { ?>
        <div class="section <?php echo $odd_or_even; ?>">
            <div class="logo">
                <a href="<?php bloginfo('url'); ?>/<?php echo $category->category_nicename; ?>">
                <img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/logo/<?php echo $category->category_nicename; ?>-hot.gif" 
                     onerror ="this.onerror=null;this.src='<?php bloginfo('wpurl'); ?>/wp-content/uploads/logo/<?php echo $category->category_nicename; ?>.gif'" /></a>
            </div>
            <div class="title">
                <h2><a href="<?php bloginfo('url'); ?>/<?php echo $category->category_nicename; ?>">
                    <?php echo $category->cat_name; ?></a></h2>
                <p><?php echo $category->description; ?></p>
            </div>
        </div>
        <?php $odd_or_even = ('odd'==$odd_or_even) ? 'even' : 'odd'; ?>
    <?php } ?>
    <div class="clear"></div>
</div>
<?php get_footer(); ?>