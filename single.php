<?php include ( TEMPLATEPATH . '/header2.php' ); ?>
<p class="navi"><a href="<?php bloginfo('url'); ?>/<?php echo $project_slug; ?>">&larr; Back</a>
    <span><a href="#comments">Comments &darr;</a></span>
</p>
<div class="post">
    <h2 class="post-title aligncenter"><?php the_title(); ?>
       </h2>
    <p class="post-meta aligncenter">Posted on <?php the_time('m/d/Y'); ?></p>
    <div class="post-content"><?php the_content(); ?></div>
</div>
<?php comments_template( '', true ); ?>
<p class="navi"><a href="<?php bloginfo('url'); ?>/<?php echo $project_slug; ?>">&larr; Back</a>
    <span><a href="<?php the_permalink(); ?>">Top &uarr;</a></span>
</p>
<?php get_footer(); ?>
