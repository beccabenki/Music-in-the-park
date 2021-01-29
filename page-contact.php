<?php get_header(); ?>
<?php get_template_part('parts/page_header'); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="container">
    <div class="row main-space">
         <?php if ( function_exists('yoast_breadcrumb') ) 
            {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
        <div class="col-md-9 col-sm-8 col-xs-12">
           <h1><?php the_title();?></h1>
           <?php the_content();?>
           <?php echo do_shortcode( '[contact-form-7 id="7" title="Contact form"]' ); ?> 
        </div>
    </div>
</div>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts match your criteria.'); ?></p>
<?php endif; ?>

<?php get_template_part('parts/page_footer'); ?>
<?php get_footer(); ?>