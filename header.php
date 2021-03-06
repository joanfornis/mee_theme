<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="hfeed">
        <header class="main-header" role="banner">
            <div class="logo">
                <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                    <?php
if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
?>
                </div>
                <!--Deshabilitamos siteDescription
                    <div <?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>>
                        <?php bloginfo( 'description' ); ?>
                    </div>
                -->
            </div>
            <nav class="nav" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
                
                <!--Deshabilitamos searchBar
                <div>
                    <?php get_search_form(); ?>
                </div>
                -->
            </nav>
        </header>