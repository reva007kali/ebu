<style>
    .jkt-swiper {
      width: 100%;
      height: 100%;
    }
    .jkt-slide {
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .jkt-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
  <!-- Swiper -->
  <div class="swiper jkt-swiper">
    <div class="swiper-wrapper jkt-wrapper">
      <div class="swiper-slide jkt-slide"><img src="img/offices/jakarta.jpg" alt=""></div>
      <div class="swiper-slide jkt-slide"><img src="img/offices/jakarta1.jpg" alt=""></div>
      <div class="swiper-slide jkt-slide"><img src="img/offices/jakarta2.jpg" alt=""></div>
      <div class="swiper-slide jkt-slide"><img src="img/offices/jakarta3.jpg" alt=""></div>
      <div class="swiper-slide jkt-slide"><img src="img/offices/jakarta.jpg" alt=""></div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".jkt-swiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>