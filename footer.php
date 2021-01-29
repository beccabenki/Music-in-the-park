 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7po-ESc8vitk401nJldPIUSYBVCqMys0"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.matchHeight-min.js"></script>
 
   <script>
                    // apply matchHeight to each item container's items
                    //$('.page-list').each(function() {
                        jQuery('.item-content').matchHeight();
                        jQuery('.activity-box').matchHeight();
                   // });

    </script>
    <script>
        function toggleIcon(e) {
            jQuery(e.target)
                .prev('.panel-heading')
                .find(".more-less")
                .toggleClass('glyphicon-plus glyphicon-minus');
        }
        jQuery('.panel-group').on('hidden.bs.collapse', toggleIcon);
        jQuery('.panel-group').on('shown.bs.collapse', toggleIcon);
    </script>

    <script>
        var TIMEOUT = null;
        jQuery(window).on('resize', function() {
            if(TIMEOUT === null) {
                TIMEOUT = window.setTimeout(function() {
                    TIMEOUT = null;
                    //fb_iframe_widget class is added after first FB.FXBML.parse()
                    //fb_iframe_widget_fluid is added in same situation, but only for mobile devices (tablets, phones)
                    //By removing those classes FB.XFBML.parse() will reset the plugin widths.
                    jQuery('.fb-page').removeClass('fb_iframe_widget fb_iframe_widget_fluid');
                    FB.XFBML.parse();
                }, 300);
            }
        });
    </script>

<?php wp_footer();?>
</body>
</html>