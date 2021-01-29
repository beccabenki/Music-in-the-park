<?php get_header(); ?>
<?php get_template_part('parts/page_header'); ?>


<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="container">
    <div class="row main-space">
         <div class="col-xs-12">
             <?php if ( function_exists('yoast_breadcrumb') ) 
            {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
            <h1>News</h1>
         </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 news-item no-padding">
            <div class="col-md-6 col-xs-12">
               <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
               <h3><?php the_date(); ?></h3>
               <?php the_excerpt();?>
               <a class="news-button" href="<?php the_permalink();?>">Read more</a>
            </div>
        </div>
    </div>
</div>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts match your criteria.'); ?></p>
<?php endif; ?>


<?php get_template_part('parts/page_footer'); ?>
<?php get_footer(); ?>