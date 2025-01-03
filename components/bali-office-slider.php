<style>
    .bali-swiper {
      width: 100%;
      height: fit-content;
      border-radius: 20px;
    }
    .bali-slide {
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .bali-slide img {
      display: block;
      width: 100%;
      height: 400px;
      object-fit: cover;
    }
  </style>
  <!-- Swiper -->
  <div class="swiper bali-swiper">
    <div class="swiper-wrapper bali-wrapper">
      <div class="swiper-slide bali-slide"><img src="img/offices/bali1.jpg" alt=""></div>
      <div class="swiper-slide bali-slide"><img src="img/offices/bali2.jpg" alt=""></div>
      <div class="swiper-slide bali-slide"><img src="img/offices/bali3.jpg" alt=""></div>
      <div class="swiper-slide bali-slide"><img src="img/offices/bali4.jpg" alt=""></div>
      <div class="swiper-slide bali-slide"><img src="img/offices/bali5.jpg" alt=""></div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".bali-swiper", {
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