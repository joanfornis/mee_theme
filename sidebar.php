<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
    <aside id="sidebar" class="sidebar" role="complementary">
        <div id="primary" class="widget-area">
            <ul class="xoxo">
                <?php dynamic_sidebar( 'primary-widget-area' ); ?>
            </ul>
        </div>
    </aside>
<?php endif; ?>