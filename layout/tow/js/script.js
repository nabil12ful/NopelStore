/**
 * WEBSITE: https://themefisher.com
 * TWITTER: https://twitter.com/themefisher
 * FACEBOOK: https://www.facebook.com/themefisher
 * GITHUB: https://github.com/themefisher/
 */

(function ($) {
    'use strict';

    // Preloader
    $(window).on('load', function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });


    // Instagram Feed
    if (($('#instafeed').length) !== 0) {
        var accessToken = $('#instafeed').attr('data-accessToken');
        var userFeed = new Instafeed({
            get: 'user',
            resolution: 'low_resolution',
            accessToken: accessToken,
            template: '<a href="{{link}}"><img src="{{image}}" alt="instagram-image"></a>'
        });
        userFeed.run();
    }

    setTimeout(function () {
        $('.instagram-slider').slick({
            dots: false,
            speed: 300,
            // autoplay: true,
            arrows: false,
            slidesToShow: 6,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });
    }, 1500);


    // e-commerce touchspin
    $('input[name=\'product-quantity\']').TouchSpin();


    // Video Lightbox
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });


    // Count Down JS
    $('#simple-timer').syotimer({
        year: 2022,
        month: 5,
        day: 9,
        hour: 20,
        minute: 30
    });

    //Hero Slider
    $('.hero-slider').slick({
        // autoplay: true,
        infinite: true,
        arrows: true,
        prevArrow: '<button type=\'button\' class=\'heroSliderArrow prevArrow tf-ion-chevron-left\'></button>',
        nextArrow: '<button type=\'button\' class=\'heroSliderArrow nextArrow tf-ion-chevron-right\'></button>',
        dots: true,
        autoplaySpeed: 7000,
        pauseOnFocus: false,
        pauseOnHover: false
    });
    $('.hero-slider').slickAnimation();

    // get Data of Item 
    $('.viewItem').click(function () { 
        var id = $(this).attr('data-id');
        $('#item').load("getItem.php?id=" + id, function (responseTxt, status, request) {
            $('#item').html($(this).responseTxt);
        });
    });

    $('#username').keyup(function(){
        var item = $(this).val();
        $('.username').load("checkUser.php?item="+item+'&col=Username',
            function (data, textStatus, jqXHR) {
                
            }
        );
        
    });

    $('#email').keyup(function(){
        var item = $(this).val();
        $('.email').load("checkUser.php?item="+item+'&col=Email',
            function (data, textStatus, jqXHR) {
                
            }
        );
        
    });

        
    $('#additem').click(function(){
        var id = $(this).parent().attr('data-id');
        var img = $('.img-box').attr('src');
        var title = $('.product-title').text();
        var price = $('.product-price').text();
        console.log('title=' + title);
        // $('.cart').load("cart.php?add",
        //     {
        //         id: id,
        //         img: img,
        //         title: title,
        //         price: price,
        //         count: 1
        //     },
        //     function (response, status, request) {
        //      // dom element
        //     $(this).html(response);
        // });
    });

    $('.addToCard').click(function(){
        var id = $(this).parent().parent().parent('.product-thumb').attr('data-id');
        var img = $(this).parent().parent().prev('img').attr('src');
        var title = $(this).parent().parent().parent().next('.product-content').find('h4').text();
        var price = $(this).parent().parent().parent().next('.product-content').find('span').text();
        $('.cart').load("cart.php?add",
            {
                id: id,
                img: img,
                title: title,
                price: price,
                count: 1
            },
            function (response, status, request) {
             // dom element
            $(this).html(response);
        });
    });

    $('.remove').click(function(){
        var id = $(this).attr('data-id');
        $('.cart').load("cart.php?delete",
        {
            id: id
        },
        function(response, status, request){
            $(this).html(response);
        });
    });


    

})(jQuery);