<?php 
/*
Template Name: Project
 */
?>
<?php include ( TEMPLATEPATH . '/header2.php' ); ?>
<div class="post">
    <div class="post-content"><?php the_content(); ?></div>
</div>
<div class="post">
    <h2 class="post-title">Articles</h2>
    <div class="post-content">
        <ul>
            <?php $the_query = new WP_Query('category_name=' . $project_slug);
            while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
                    &nbsp;&nbsp;<em>(<?php the_time('m/d/Y'); ?>)</em></li>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </ul>
    </div>
</div>
<?php comments_template( '', true ); ?>
<?php get_footer(); ?>