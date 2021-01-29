<?php /* Template Name: Two Col Template */ ?>

<?php get_header(); ?>
<?php get_template_part('parts/page_header'); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="container">
    <div class="row main-space">
         <?php if ( function_exists('yoast_breadcrumb') ) 
            {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
            <?php $split_content = explode('<span id="more-'.$post->ID.'"></span>', get_the_content());
                if(count($split_content) > 1)
                    {
                     $content = apply_filters( 'the_content', $split_content[0] );
                     $content = str_replace( ']]>', ']]&gt;', $content );
                    ?>
                 <div class="col-sm-6 col-xs-12">
                    <h1><?= get_the_title(); ?></h1>
                    <?= $content; ?>
                </div>
                <?php
                     if(isset($split_content[1])) {
                     $content = apply_filters( 'the_content', $split_content[1] );
                     $content = str_replace( ']]>', ']]&gt;', $content );
                ?>
                <div class="col-sm-6 col-xs-12 second-col">
                 <?= $content; ?>
                </div>
            <?php } } else {?>
            <?php } ?>
    </div>
</div>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts match your criteria.'); ?></p>
<?php endif; ?>

<?php get_template_part('parts/page_footer'); ?>
<?php get_footer(); ?>