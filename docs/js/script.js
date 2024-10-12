// Inicialização do Swiper
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  loop: true,
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
  },
});

// Função para Manipular Accordions
document.addEventListener("DOMContentLoaded", function () {
  const accordions = document.querySelectorAll(".hp-accordion-header");

  accordions.forEach((header) => {
    header.addEventListener("click", function () {
      const body = this.nextElementSibling;

      // Verifica se o accordion já está ativo
      const isActive = body.classList.contains("active");

      // Fecha todos os accordions
      document.querySelectorAll(".hp-accordion-body").forEach((b) => {
        b.classList.remove("active");
      });

      // Se não estava ativo, abre o selecionado
      if (!isActive) {
        body.classList.add("active");
      }
    });
  });
});