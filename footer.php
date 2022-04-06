
            </div>
            <footer id="footer" class="main-footer" role="contentinfo">

                <nav class="sitemap" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    
                    <?php wp_nav_menu( array( 'theme_location' => 'sitemap', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
                    
                </nav>

                <div id="copyright" class="copyright">
                    &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?>
                    <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
                </div>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>

</html>