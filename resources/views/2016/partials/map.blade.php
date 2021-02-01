<section id="mapa" class="fundo-azul">
    <div id="vue-google-map" class="container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2>Mapa das inscrições</h2>

                    <div id="map_canvas" style="width: 100%; height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@section('javascript')
    <script>
        var googleMap = null;

        function loadScript(src,callback)
        {
            var script = document.createElement("script");
            script.type = "text/javascript";
            if(callback)script.onload=callback;
            document.getElementsByTagName("head")[0].appendChild(script);
            script.src = src;
        }

        loadScript(
            '//maps.googleapis.com/maps/api/js?v=3&callback=initialize&key={{ config('services.googleMaps.key') }}',
            function() {}
        );

        function initialize()
        {
            var mapOptions = {
                scrollwheel: false,
                zoom: 8,
                center: new google.maps.LatLng(-22.2098745,-43.1908651),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "color": "#3b5998"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.province",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#3b5998"
                                },
                                {
                                    "saturation": -22
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#f7f7f7"
                                },
                                {
                                    "saturation": 10
                                },
                                {
                                    "lightness": 76
                                }
                            ]
                        },
                        {
                            "featureType": "landscape.natural",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "color": "#f7f7f7"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "color": "#8b9dc3"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.country",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "visibility": "simplified"
                                },
                                {
                                    "color": "#3b5998"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#8b9dc3"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "simplified"
                                },
                                {
                                    "color": "#8b9dc3"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.line",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "invert_lightness": false
                                },
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "weight": 0.43
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#8b9dc3"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#3b5998"
                                }
                            ]
                        }
                    ],
            };

            googleMap = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
        }

        function createGoogleMapsMarker(latLng, title, info)
        {
            if (typeof google == 'undefined')
            {
                return false;
            }

            var marker = new google.maps.Marker(
            {
                position: latLng,
                map: googleMap,
                title: title,
                icon: '/templates/2016/images/markers/10.png'
            });

            var infowindow = new google.maps.InfoWindow(
            {
                content: info
            });

            marker.addListener('click', function()
            {
                infowindow.open(googleMap, marker);
            });

            return marker;
        }
    </script>
@stop
