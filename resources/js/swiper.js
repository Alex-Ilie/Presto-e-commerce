var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,
    slidesPerView: 1,
    breakpoints: {
      640:{
        slidesPerView: 3,
      }
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });