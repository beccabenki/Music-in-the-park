
 <header class="header navbar-default">
        <?php if(isset($post->ID)) {
            create_bootstrap_menu('header_menu', $post->ID);
        } else {
            create_bootstrap_menu('header_menu', 0);
        } ?>
</header>

