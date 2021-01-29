<?php

$args = array (
    'orderby'           => 'title',
    'order'             => 'ASC',
    'post_type'         => 'lineup',
    'posts_per_page'    => -1,
    'post_status'       => 'published',
    'cat'               => $categoryID,
);

$query = new WP_Query( $args );
if ( $query->have_posts() ) { ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 lineup">
                <h2><?php echo get_cat_name($categoryID);?></h2>
            </div>
            <?php $count = 0; 
            while ( $query->have_posts() ) {
                $query->the_post() ?>
                    <div class="col-md-3 col-sm-4 col-xs-12 item-content">
                      <ul class="img-list">
                        <li>
                      <?php 
                            $image = get_field('lineup_thumbnail');
                            if( !empty($image) ): ?>
                            <img class="band-img img-responsive center" src="<?= $image['sizes']['band']?>">
                          <?php else: ?>
                            <img class="img-responsive band-img center" alt="Thame Music in the Park" src="<?php echo get_template_directory_uri(); ?>/assets/img/music-avatar.png">
                          <?php endif; ?>
                          <span class="text-content">
                            <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                           </span>
                        </li>  
                      </ul>  
                      </div>  
            <?php } ?>  
    </div>
</div>
<?php } else {
    // no posts found
}

// Restore original Post Data
wp_reset_postdata();
