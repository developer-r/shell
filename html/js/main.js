$(document).ready(function(){
    /* up */
    $(window).scroll(function(){
        if ($(this).scrollTop() > 300) {
            $('#up').addClass('fixed');
        }
        else {
            $('#up').removeClass('fixed');
        }
    });
    $('#up').click(function() {
        $('body,html').animate({scrollTop:0},300);
        return false;
    });


    /* animation leftmenu */
    $('.js-catalog-open').click(function(){
        $('.catalog-double__left, .form_close__left').addClass('animated slideInLeft fastest');
        $('.catalog-double__right').addClass('animated slideInRight fastest');
    });


    /* modal menu */
    $("#menulefttrigger").click(function () {
        $("#menulefttrigger").addClass("searchHidden");
    });
    $("#catalog-modal .formCloseRight").click(function () {
        $("#menulefttrigger").removeClass("searchHidden");
    });
    $("#search, #searchPage").click(function () {
        $("#menulefttrigger").addClass("catalogueHidden");
    });
    $("#catalog-modal .formCloseRight").click(function () {
        $("#menulefttrigger").removeClass("catalogueHidden");
    });


    /* ui-jquery */
    $(function() {
        $( "#accordion" ).accordion({
            collapsible: true,
            active: false,
            heightStyle: "content"
        });
    });


    /* select */
    $('#Brand[multiple]').multiselect({
        name   : 'Brand',
        search   : false,
        multiple: false,
        texts    : {
            placeholder: 'Бренд',
            selectedOptions: ' Отмечено'
        },
        onOptionClick: function (element, option) {
            var value = $(option).val();
            $(element).find(':selected:not([value="' + value + '"])').prop('selected', false);
            $(this).multiselect('reset');
            $(element).next('.ms-options-wrap').find('li:not([data-search-term="' + value.toLowerCase() + '"])').removeClass('selected');
        },
    });
    $('#Kind[multiple]').multiselect({
        name   : 'Kind',
        texts    : {
            placeholder: 'Вид техники',
            selectedOptions: ' Отмечено'
        }
    });
    $('#Application[multiple]').multiselect({
        name   : 'Application',
        texts    : {
            placeholder: 'Применение',
            selectedOptions: ' Отмечено'
        }
    });
    $('#Oil[multiple]').multiselect({
        name   : 'Oil',
        texts    : {
            placeholder: 'Вид масла',
            selectedOptions: ' Отмечено'
        }
    });
    $('#Viscosity[multiple]').multiselect({
        name   : 'Viscosity',
        texts    : {
            placeholder: 'Вязкость',
            selectedOptions: ' Отмечено'
        }
    });


    /* controlgroup */
    $( ".ui-controlgroup-label" ).controlgroup();


    /* sliders */
    /* action */
    $(function() {
        $(".owl-carousel.owl-carousel-certificates").owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            thumbs: false,
            dots: false,
            autoplay: false,
            navText: ["<span class='owl-nav_wrapper'><img src='img/shape.svg'></span>", "<span class='owl-nav_wrapper'><img src='img/shape.svg'></span>"],
            responsive: {
                0: {
                    items: 1
                },
                769: {
                    items: 2
                },
                1280: {
                    items: 3
                },
                1440: {
                    items: 4
                }
            }
        });
    });
    /* product */
    $('.owl-carousel-1').owlCarousel({
        loop: true,
        items: 1,
        thumbs: true,
        thumbImage: true,
        margin: 20,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item'
    });
    $(function() {
        $(".owl-carousel.owl-carousel-2").owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            thumbs: false,
            dots: false,
            autoplay: false,
            navText: ["<span class='owl-nav_wrapper'><img src='img/shape.svg'></span>", "<span class='owl-nav_wrapper'><img src='img/shape.svg'></span>"],
            responsive: {
                0: {
                    items: 2
                },
                769: {
                    items: 3
                }
            }
        });
    });
    $(function() {
        $(".owl-carousel.owl-carousel-3").owlCarousel({
            margin: 0,
            nav: true,
            thumbs: false,
            dots: false,
            autoplay: false,
            navText: ["<span class='owl-nav_wrapper'><img src='img/shape.svg'></span>", "<span class='owl-nav_wrapper'><img src='img/shape.svg'></span>"],
            responsive: {
                0: {
                    items: 2
                },
                769: {
                    items: 3
                },
                1024: {
                    items: 4
                }
            }
        });
    });
    /* analogues */
    $(function() {
        $(".owl-carousel.owl-carousel-analogues, .owl-carousel-previously, .owl-carousel-also").owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            thumbs: false,
            dots: false,
            autoplay: false,
            navText: ["<span class='owl-nav_wrapper'><img src='img/shape.svg'></span>", "<span class='owl-nav_wrapper'><img src='img/shape.svg'></span>"],
            responsive: {
                0: {
                    items: 1
                },
                769: {
                    items: 2
                },
                1600: {
                    items: 3
                }
            }
        });
    });


    /* Mask-Input */
    $('.phone').click(function() {
        $('.phone').inputmask("+7(999)999-99-99");
    });


    /* search */
    $('.txt-input_search').click(function() {
        $('#resalt').slideToggle('slow');
    });


    /* media basket */
    $('#basketquickorderbutton, #basketquickorderCloseLeft').click(function() {
        $('#basketquickorder').toggle();
        $('#basketquickorderLeft').toggleClass("media");
    });

    $('#basketquickorderbutton').click(function() {
        $('#basket .formCloseRight .form_close--catalog').css("display", "none");
    });

    $('#basketquickorderCloseLeft').click(function() {
        $('#basket .formCloseRight .form_close--catalog').css("display", "block");
    });

    $('#basketquickorderbutton, #basketquickorderCloseLeft').click(function() {
        $('#basketquickorderRight').toggleClass("media");
    });


    /* form */
    $('.txt-input input, .txt-input, .textarea-input textarea, select').on('focusin', function(){
        $(this).addClass('is-active');
    });
    $('.txt-input input, .txt-input, .textarea-input textarea, select').on('focusout', function(){
        if(!$(this).val()){
            $(this).removeClass('is-active');
        }
    });


    /* range */
    $( function() {
        $( ".slider-range-1" ).slider({
            range: true,
            min: 0,
            max: 25000,
            values: [ 1000, 16000 ],
            slide: function( event, ui ) {
                $( ".amount1" ).val( ui.values[ 0 ]);
                $( ".amount2" ).val( ui.values[ 1 ]);
            }
        });
        $( ".amount1" ).val( $( ".slider-range-1" ).slider( "values", 0 ));
        $( ".amount2" ).val( $( ".slider-range-1" ).slider( "values", 1 ));
    } );


    $(function () {
        var widowHeight = $(window).height();
        var menu = $('#whiteMenu');
        var menuContent = $('#whiteMenuContent');
        $(menuContent).height(widowHeight);
        $(window).scroll(function() {
            var scrollTop = $(document).scrollTop();
            var menuHeight = Math.min(scrollTop, widowHeight);
            menu.height(menuHeight);
            menuContent.css({ marginTop: menuHeight - widowHeight });
        });
    });


    $('#menuleft, #whiteMenuContent').hover(function(){
        $('#menuleft, #whiteMenuContent').toggleClass('hover');
    });


    $('.button_sort_catalogue').on('click', function() {
        $('.catalogue_content').toggleClass('catalogue_content_row catalogue_content_col-catalogue');
        $('.button_sort').toggleClass('active');
    });


    $('.button_sort_pending').on('click', function() {
        $('.catalogue_content').toggleClass('catalogue_content_row catalogue_content_col-pending');
        $('.button_sort').toggleClass('active');
    });


    /* loader */
    $('.loader .button').click(function(){
        $('.loader').toggleClass('button_spoiler');
    });


    /* media filters */
    $('#mediaFilters').on('click', function() {
        $('.catalogue-filters_block').toggleClass('catalogue-filters_block_toggle');
        var text = $('#mediaFilters').text();
        $('#mediaFilters').text(
            text == "Скрыть" ? "Настроить" : "Скрыть");
    });
});


/* map */
function initMap() {
    var map1 = new google.maps.Map(document.getElementById('map1'), {
        center: {lat: 56.050717, lng: 93.089089},
        zoom: 13,
        styles: [
            {
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#bdbdbd"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dadada"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#c9c9c9"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            }
        ]
    });
    var image1 = './img/marker.svg';
    var beachMarker1 = new google.maps.Marker({
        position: {lat: 56.050717, lng: 93.089089},
        map: map1,
        icon: image1
    });

    var map2 = new google.maps.Map(document.getElementById('map2'), {
        center: {lat: 53.710015, lng: 91.390716},
        zoom: 13,
        styles: [
            {
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#bdbdbd"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dadada"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#c9c9c9"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            }
        ]
    });
    var image2 = './img/marker.svg';
    var beachMarker2 = new google.maps.Marker({
        position: {lat: 53.710015, lng: 91.390716},
        map: map2,
        icon: image2
    });

    var map3 = new google.maps.Map(document.getElementById('map3'), {
        center: {lat: 56.229576, lng: 95.706663},
        zoom: 13,
        styles: [
            {
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#bdbdbd"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dadada"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#c9c9c9"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            }
        ]
    });
    var image3 = './img/marker.svg';
    var beachMarker3 = new google.maps.Marker({
        position: {lat: 56.229576, lng: 95.706663},
        map: map3,
        icon: image3
    });

    var map4 = new google.maps.Map(document.getElementById('map4'), {
        center: {lat: 56.305779, lng: 90.544899},
        zoom: 13,
        styles: [
            {
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#bdbdbd"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dadada"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#c9c9c9"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            }
        ]
    });
    var image4 = './img/marker.svg';
    var beachMarker4 = new google.maps.Marker({
        position: {lat: 56.305779, lng: 90.544899},
        map: map4,
        icon: image4
    });
}

function initMap2() {
    var map5 = new google.maps.Map(document.getElementById('map5'), {
        center: {lat: 56.038851,  lng: 92.935576},
        zoom: 13,
        styles: [
            {
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#bdbdbd"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dadada"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#c9c9c9"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            }
        ]
    });
    var image5 = './img/marker.svg';
    var beachMarker5 = new google.maps.Marker({
        position: {lat: 56.038851,  lng: 92.935576},
        map: map5,
        icon: image5
    });
}


