<?php get_header(); ?>
<link rel="stylesheet" href="/wp-content/themes/mee-theme/styles/blog-list.css">
<div class="content-wrapper container">
    <main id="content" class="content" role="main">
        <section class="blog-list row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'entry' ); ?>
            <?php comments_template(); ?>
            <?php endwhile; endif; ?>
            <?php get_template_part( 'nav', 'below' ); ?>
        </section>
    </main>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>