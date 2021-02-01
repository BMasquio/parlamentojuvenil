
<script>
    jQuery(document).ready(function() {
        jQuery('.owl-carousel').owlCarousel({
            rtl: true,
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 1500,
            autoplayHoverPause: true,
            lazyLoad: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 8
                }
            }
        });
    });
</script>


{{--
<script>
    var owlBaseOptions = {
        loop: true,
        autoplay: true,
        autoplayTimeout: 1500,
        autoplayHoverPause: true,
        lazyLoad : true,
    };

    optionNewspapers = JSON.parse(JSON.stringify(owlBaseOptions));
    optionNewspapers.items = 8;
    optionNewspapers.autoplayTimeout = 6000;
    optionNewspapers.margin = 40;
    optionNewspapers.stagePadding = 40;
    optionNewspapers.dots = true;

    options7 = JSON.parse(JSON.stringify(owlBaseOptions));
    options7.items = 5;

    options8 = JSON.parse(JSON.stringify(owlBaseOptions));
    options8.items = 8;
    options8.rtl = true;
    options8.autoplayTimeout = 2500;

    jQuery(document).ready(function()
    {
        var owl7 = jQuery("#parlamentares-7a");
        var owl8 = jQuery("#parlamentares-8a");
        var newspapers = jQuery("#newspapers");

        owl7.owlCarousel(options7);
        owl8.owlCarousel(options8);
        newspapers.owlCarousel(optionNewspapers);

        console.log(options7);

        turnOnWheelControls(owl7);
        turnOnWheelControls(owl8);
        turnOnWheelControls(newspapers);
    });

    function turnOnWheelControls(owl)
    {
        owl.on('mousewheel', '.owl-stage', function (e)
        {
            if (e.deltaY>0)
            {
                owl.trigger('next.owl');
            }
            else
            {
                owl.trigger('prev.owl');
            }

            e.preventDefault();
        });
    }

    var myLazyLoadGeneric = new LazyLoad({});

    $(document).ready(function () {
        var $container = $('.postgallery');

        $container.imagesLoaded(function () {
            $container.masonry({
                itemSelector: '.post-box',
                transitionDuration: '0.8s',
                columnWidth: '25%',
                isFitWidth: true,
            });
        });
    });
</script>
--}}
