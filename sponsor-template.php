<?php /* Template Name: Sponsors Template */ ?>
 
<?php get_header(); ?>
<?php get_template_part('parts/page_header'); ?>

<?php get_template_part('parts/banner'); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<?php get_template_part('parts/page-banner'); ?>

<div class="container lineup text-center">
    <h1><?php the_title();?></h1>
    <?php the_content();?>
</div>

<?php
global $wp;
$post = get_page_by_path($wp->request,OBJECT);

$args = array (
    'orderby'           => 'title',
    'order'             => 'ASC',
    'post_type'         => 'sponsors',
    'posts_per_page'    => -1,
);

$query = new WP_Query( $args );
if ( $query->have_posts() ) { ?>

    <div class="container">
        <div class="row">
            <?php $count = 0; 
            while ( $query->have_posts() ) {
                $query->the_post() ?>
                    <div class="col-md-4 col-sm-4 col-xs-12 item-content">
                      <ul class="img-list">
                        <li>
                      <?php 
                            $image = get_field('sponsor_logo');
                            if( !empty($image) ): ?>
                          <img class="band-img img-responsive center" src="<?= $image['sizes']['block']?>">
                            <?php endif; ?>
                          <span class="text-content">
                            <h4><a href="<?= the_field('sponsor_link');?>"><?php the_title();?></a></h4>
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
?>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts match your criteria.'); ?></p>
<?php endif; ?>


<?php get_template_part('parts/page_footer'); ?>
<?php get_footer(); ?>