<?php get_header(); ?>
<div class="content-wrapper container">
    <main id="content" class="content" role="main">
        <header class="header">
            <h1 class="entry-title" itemprop="name"><?php single_term_title(); ?></h1>
            <!--Deshabilitamos metadatos post
                <div class="archive-meta" itemprop="description">
                    <?php if ( '' != get_the_archive_description() ) { echo esc_html( get_the_archive_description() ); } ?>
                </div>
            -->
        </header>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'nav', 'below' ); ?>
    </main>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>