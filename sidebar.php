<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
    <aside class="sidebar" role="complementary">
        <div class="widget-area">
            <ul class="xoxo">
                <?php dynamic_sidebar( 'primary-widget-area' ); ?>
            </ul>
        </div>
    </aside>
<?php endif; ?>