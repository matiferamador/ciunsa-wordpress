
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
  // Wrap every letter in a span
var textWrapper = document.querySelector('.ml3');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml3 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 500,
    delay: (el, i) => 150 * (i+1)
  }).add({
    targets: '.ml3',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
  

  }
  const hamburger = document.querySelector('.hamburguer-menu svg')
  hamburger.addEventListener('click', function() {
      const menuPrincipal = document.querySelector('.contenedor-menu');
      menuPrincipal.classList.toggle('mostrar');
  })
  

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
  