<?php get_header(); ?>
<?php get_template_part('parts/page_header'); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<?php get_template_part('parts/page-banner'); ?>

<div class="container">
    <div class="row main-space">
        <div class="col-md-10 col-sm-10 col-xs-12">
            <h1><?php the_title();?></h1>
            <?php the_content();?>
        </div>
    </div>
</div>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts match your criteria.'); ?></p>
<?php endif; ?>

<?php get_template_part('parts/page_footer'); ?>
<?php get_footer(); ?>