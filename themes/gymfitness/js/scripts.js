jQuery(document).ready(function($) {

    // Navigation
    $('.menu-principal .menu:first').slicknav({
        label: '',
        appendTo: '.site-header',
    });

    // Slider
    if($('.listado-testimoniales').length > 0) {
        $('.listado-testimoniales').bxSlider({
            auto: true,
            mode: 'fade',
            controls: false,
        });
    }
});

// Agrega posicion fija de la barra de navegacion al hacer scroll

window.onscroll = () => {
    const scroll = window.scrollY;

    const headerNav = document.querySelector('.barra-navegacion');
    const documentBody = document.querySelector('body');

    if (scroll > 300) {
        headerNav.classList.add('fixed-top');
        documentBody.classList.add('ft-activo');
    } else {
        headerNav.classList.remove('fixed-top');
        documentBody.classList.remove('ft-activo');
    }

}