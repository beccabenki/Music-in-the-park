<?php get_header(); ?>
<?php get_template_part('parts/page_header'); ?>

<?php 
    $page_exists = get_page_by_title( '404' );
    if ($page_exists) {

        $loop = new WP_Query( 'page_id='.$page_exists->ID );
        if($loop) :
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="row">
        <div class="col-md-8 col-md-offset-2 min-h-400">
            <?php the_content(); ?>
        </div>
        </div>

        <?php endwhile; wp_reset_query(); endif; ?>

    <?php } else { ?>

        <section class="services row">
            <div class="content-container main-content">
                <div class="the_content"><h1>404 page not created</h1></div>
            </div>
        </section>
        
    <?php } ?>

<?php get_template_part('parts/page_footer'); ?>
<?php get_footer(); ?>