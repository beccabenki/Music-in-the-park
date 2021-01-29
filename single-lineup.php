<?php get_header(); ?>
<?php get_template_part('parts/page_header'); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<?php get_template_part('parts/page-banner'); ?>

<div class="container">
    <div class="row main-space">
         <?php if ( function_exists('yoast_breadcrumb') ) 
            {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
        <div class="col-md-5 col-sm-5 col-xs-12 single-band">
            <?php 
                $image = get_field('lineup_thumbnail');
                    if( !empty($image) ): ?>
                <img class="band-img img-responsive center" src="<?= $image['sizes']['band_front']?>">
            <?php endif; ?>
        </div>
        <div class="col-md-7 col-sm-7 col-xs-12 center-text">
            <h1><?php the_title();?></h1>
            <h2><?php echo get_cat_name($categoryID);?><?= the_field('band_time'); ?></h2> 
            <?php the_content();?>
            <div class="single-social">
                <?php if( $field_f = get_field('band_facebook') ): ?>
                    <a href="<?= the_field('band_facebook');?>"><span class="social-f"><i class="fab fa-facebook-f"></i></span></a>
                <?php endif; ?>

                <?php if( $field_t = get_field('band_twitter') ): ?>
                    <a href="<?= the_field('band_twitter');?>"><span class="social-t"><i class="fab fa-twitter"></i></span></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts match your criteria.'); ?></p>
<?php endif; ?>

<?php get_template_part('parts/page_footer'); ?>
<?php get_footer(); ?>