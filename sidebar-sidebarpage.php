<?php if ( is_active_sidebar( 'sidebarpage' ) ) : ?>
    <div class="sidebar sidebar-content" id="sidebar-content">
        <?php dynamic_sidebar( 'sidebarpage' ); ?>
    </div>
<?php endif; ?>