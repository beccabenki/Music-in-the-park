
<?php get_header(); ?>
<?php get_template_part('parts/page_header'); ?>
    <div class="col-md-12 archive-banner">
        <div class="caption center">
            <div class="caption-inner">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <img class="img-responsive banner-text center" alt="Thame Music in the Park" src="<?php echo get_template_directory_uri(); ?>/assets/img/MITP_Date.png">
                        <a class="tickets text-uppercase hidden-sm hidden-xs" href="http://www.wegottickets.com/event/427258">Tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden-md visible-sm visible-xs">
        <a class="tickets-mobile text-uppercase col-sm-12 col-xs-12" href="http://www.wegottickets.com/event/427258" style="">Tickets</a>
    </div>


<div class="container lineup text-center">
    <div class="col-xs-12">
     <h1>2018 <?php post_type_archive_title(); ?></h1>
    </div>
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
// WP_Query arguments

?>

<?php get_template_part('parts/social-feed'); ?>

<?php get_template_part('parts/page_footer'); ?>
<?php get_footer(); ?>