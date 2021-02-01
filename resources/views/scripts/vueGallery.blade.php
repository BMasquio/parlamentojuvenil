<script>
    if (jQuery("#vue-gallery").length)
    {
        var vueGallery = new Vue({
            el: '#vue-gallery',

            data: {},

            methods: {
                __show: function (which) {
                    jQuery('#more-gallery-' + which).show();

                    jQuery('#more-gallery-' + which + '-button').hide('slow');

                    jQuery('html, body').animate({
                        scrollTop: jQuery(window).scrollTop() + 100
                    });
                }
            }
        });
    }
</script>
