function ciunsaWordPress() {
    if (document.querySelector('.swiper')) {
      const opciones = {
        loop: true,
        autoplay: {
          delay: 7000,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      };
  
      new Swiper('.swiper', opciones);
    }
    const hamburguer = document.querySelector('.hamburguer-menu svg')
    hamburguer.addEventListener('click', function() {
        const menuPrincipal = document.querySelector('.contenedor-menu');
        menuPrincipal.classList.toggle('mostrar');
    })
  
  }

document.addEventListener('DOMContentLoaded', ciunsaWordPress);

window.onscroll = function() {
    const scroll = window.scrollY;

    const barraNav = document.querySelector('.barra-navegacion') 
    if(scroll > 300) {
    barraNav.classList.add('fixed-top');
    } else {
    barraNav.classList.remove('fixed-top');
    }
}
  