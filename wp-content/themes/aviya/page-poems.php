<?php
/**
Template Name: Poems
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?> 
        <?php // Loop through the covers ?>
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header><!-- .entry-header -->

        <?php the_content(); ?>
        <div id="covers">
        <?php
        $covers = get_pages('title_li=&child_of=5&sort_column=menu_order&echo=0');
        foreach($covers as $cover) {
            $content = $cover->post_content;
            $content = apply_filters('the_content', $content); ?>
            <div class="cover">
                <a target="_blank" href="<?php echo get_post_meta($cover->ID, "link", true); ?>"><?php echo get_the_post_thumbnail($cover->ID, 'cover'); ?></a>
                <a target="_blank" href="<?php echo get_post_meta($cover->ID, "link", true); ?>"><?php echo $cover->post_title ?></a>
            </div>
        <?php $count++;
            } ?> 
        </div>
    <?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>