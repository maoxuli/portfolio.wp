<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <p class="post-meta">Posted on <?php the_time('m/d/Y'); ?></p>
        <div class="post-content"><?php the_content(); ?></div>
    </div>
<?php endwhile; ?>
<?php else : ?>
    <div class="post">
        <h2>Not Found</h2>
        <p>Oops! It seems the page you're looking for doesn't exist.</p>
    </div>
<?php endif; ?>
<?php get_footer(); ?>
