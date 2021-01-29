<!-- header image -->
<div class="container-fluid">
<?php
if ( has_post_thumbnail() ) {
?>
    <div class="row">
<?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'banner', true);
  $thumb_url = $thumb_url_array[0];
?>
    <div class="col-md-12 banner-main" style="background:url('<?php echo $thumb_url ?>')">
        <div class="caption center">
            <div class="caption-inner">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <img class="img-responsive banner-text center" alt="Thame Music in the Park" src="<?php echo get_template_directory_uri(); ?>/assets/img/mitp-2020-web.png">
                        <a class="tickets text-uppercase hidden-sm hidden-xs" href="https://www.eventbrite.co.uk/e/music-in-the-park-thame-tickets-88469888819">Tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden-md visible-sm visible-xs">
        <a class="tickets-mobile text-uppercase col-sm-12 col-xs-12" href="https://www.eventbrite.co.uk/e/music-in-the-park-thame-tickets-88469888819" style="">Tickets</a>
    </div>
    <?php }?>
    </div>
</div>
<!-- end of header image -->