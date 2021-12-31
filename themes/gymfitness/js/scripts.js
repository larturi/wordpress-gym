jQuery(document).ready(function($) {

    // Navigation
    $('.menu-principal .menu:first').slicknav({
        label: '',
        appendTo: '.site-header',
    });

    // Slider
    $('.listado-testimoniales').bxSlider({
        auto: true,
        mode: 'fade',
        controls: false,
    });

});