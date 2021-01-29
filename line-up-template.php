<?php /* Template Name: Lineup Template */ ?>
 
<?php get_header(); ?>
<?php get_template_part('parts/page_header'); ?>

<?php get_template_part('parts/banner'); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<?php get_template_part('parts/page-banner'); ?>

<div class="container lineup text-center">
    <h1><?php the_title();?></h1>
</div>

<?php
global $wp;
$post = get_page_by_path($wp->request,OBJECT);

$categoryID = 3;
include __DIR__ . '/parts/lineup.php';
$categoryID = 4;
include __DIR__ . '/parts/lineup.php';
$categoryID = 5;
include __DIR__ . '/parts/lineup.php';
$categoryID = 7;
include __DIR__ . '/parts/lineup.php';
// WP_Query arguments

?>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts match your criteria.'); ?></p>
<?php endif; ?>

<?php get_template_part('parts/social-feed'); ?>

<?php get_template_part('parts/page_footer'); ?>
<?php get_footer(); ?>