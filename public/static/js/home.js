$(function(){
    $('.home .carousel-wrapper .bxslider').bxSlider({
        auto: true,
        mode: 'fade',
        adaptiveHeight: true
    });

    $('.navigation-bars').on('click', function(){
        $('#global-nav').toggleClass('desktop-show');
    });
});