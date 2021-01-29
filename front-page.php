<?php get_header(); ?>
<?php get_template_part('parts/page_header'); ?>
<?php get_template_part('parts/banner'); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="container">
    <div class="row main-space">
        <div class="col-sm-12 col-xs-12">
            <div class="text-center">
                <h1>2019 Lineup</h1>
            </div>
            <?php if( have_rows('front_bands') ): ?>
            <?php while( have_rows('front_bands') ): the_row(); 
                $image = get_sub_field('band_image');
                $title = get_sub_field('band_name');
                $link = get_sub_field('band_link');
            ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="img-list">
                    <li>
                    <img class="front-band-img img-responsive center" src="<?= $image['sizes']['band_front']?>">
                   <!--  <div class="front-band-img" style="background-image: url(<?= $image['sizes']['band_front']?>)"></div> -->
                        <span class="text-content">
                            <h4><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h4>
                        </span>
                    </li>  
                </ul>  
            </div> 
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="col-xs-12 btn-wrapper">
                <a class="more" href="/line-up/">See Full Line up</a>
            </div>
        </div>
    </div>
</div>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts match your criteria.'); ?></p>
<?php endif; ?>

<?php get_template_part('parts/social-feed'); ?>

<?php get_template_part('parts/page_footer'); ?>
<?php get_footer(); ?>