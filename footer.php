                <?php get_sidebar(); ?>
            </div>
            <footer id="footer" class="main-footer" role="contentinfo">
                <div class="sitemap">sitemap</div>
                <div id="copyright" class="copyright">
                    &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?>
                    <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
                </div>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>

</html>