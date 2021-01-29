<?php get_header(); ?>
<?php get_template_part('parts/page_header'); ?>

<?php
global $wp;

$post = get_page_by_path($wp->request,OBJECT);

// WP_Query arguments
$args = array (
    'orderby' => 'title',
    'order'   => 'ASC',
    'post_status'     => 'publish',
    'post_type'      => array('sponsors'),
    'posts_per_page' => -1,
);
$query = new WP_Query( $args );
if ( $query->have_posts() )

{ ?>

<div class="container">
    <div class="row main-space">
       <?php if ( function_exists('yoast_breadcrumb') ) 
        {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
      <h1 class="text-center"><?php post_type_archive_title(); ?></h1>
      <h2 class="text-center"><?= the_field('sponsor_text');?></h2>
    </div>
</div>

<div class="container">
      <div class="row">
            <?php
              while ( $query->have_posts() ) {
                $query->the_post();
            ?>
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
            <?php
            } else { }
            wp_reset_postdata();
            ?>
    </div>
</div>

<?php get_template_part('parts/page_footer'); ?>
<?php get_footer(); ?>