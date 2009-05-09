<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php
    /*
     * Print the <title> tag based on what is being viewed.
     */
    global $page, $paged;

    wp_title('-', true, 'right');

    // Add the blog name.
    bloginfo('name');

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && ( is_home() || is_front_page() ))
        echo " - $site_description";

    // Add a page number if necessary:
    if ($paged >= 2 || $page >= 2)
        echo ' - ' . sprintf(__('Page %s', 'twentyten'), max($paged, $page));
?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if (is_singular() && get_option('thread_comments'))
        wp_enqueue_script('comment-reply');

    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
<div id="header">
    <?php if ( is_page_template('project.php') ) { ?>
        <?php the_post(); 
            $category = get_category_by_slug($post->post_name); 
            $project_slug = $category->category_nicename;
            $project_name = $category->cat_name;
            $project_desc = $category->category_description;
        ?>
        <a href="<?php bloginfo('url'); ?>/<?php echo $project_slug; ?>">
            <img class="logo" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/logo/<?php echo $project_slug; ?>.gif" /></a>
        <div class="title">
            <h1><a href="<?php bloginfo('url'); ?>/<?php echo $project_slug; ?>"><?php echo $project_name; ?></a></h1>
            <h2><?php echo $project_desc; ?></h2>
        </div>
        <a href="<?php bloginfo('url'); ?>">
            <img class="logo2" src="<?php bloginfo('template_url'); ?>/images/logo2.gif" /></a>
    <?php } elseif ( is_single() ) { ?>
        <?php the_post(); 
            $category = get_the_category(); 
            $project_slug = $category[0]->category_nicename;
            $project_name = $category[0]->cat_name;
            $project_desc = $category[0]->category_description;
        ?>
        <a href="<?php bloginfo('url'); ?>/<?php echo $project_slug; ?>">
            <img class="logo" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/logo/<?php echo $project_slug; ?>.gif" /></a>
        <div class="title">
            <h1><a href="<?php bloginfo('url'); ?>/<?php echo $project_slug; ?>"><?php echo $project_name; ?></a></h1>
            <h2><?php echo $project_desc; ?></h2>
        </div>
        <a href="<?php bloginfo('url'); ?>">
            <img class="logo2" src="<?php bloginfo('template_url'); ?>/images/logo2.gif" /></a>
    <?php } else { ?>
        <img class="logo" src="<?php bloginfo('template_url'); ?>/images/logo.gif" />
        <div class="title">
            <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
            <h2><?php bloginfo('description'); ?></h2>
        </div>
    <?php } ?>
    <div class="clear"></div>
</div>
<div id="main">
