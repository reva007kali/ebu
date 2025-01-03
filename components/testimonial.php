<style>
    .testimonial {
        width: 100%;
        height: 100%;
    }

    .testimonial-slide {
        position: relative;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
        padding-block: 2rem;
        gap: 20px;
    }
</style>

<!-- Swiper -->
<div class="swiper testimonial">
    <div class="swiper-wrapper testimonial-wrapper">

        <div class="swiper-slide testimonial-slide">
            <img class="testimonial-bg" src="img/ships/1.jpg" alt="">
            <div class="testimonial-gradient"></div>
            <img class="testimonial-avatar" src="img/crew/hariri.jpg" alt="">
            <p class="testimonial-review">"Equinox Bahari Utama provided everything I needed to succeed at Royal Caribbean. Their professionalism and care made all the difference. I’m proud to represent both companies."</p>
            <div class="testimonial-profile">
                <h2 class="testimonial-name">Hariri Sulaiman</h2>
                <h3 class="testimonial-position">Second Officer</h3>
            </div>
            <img class="testimonial-brand" src="img/assets/brands-logo/royal-logo-white.png" alt="">
        </div>

        <div class="swiper-slide testimonial-slide">
            <img class="testimonial-bg" src="img/ships/1.jpg" alt="">
            <div class="testimonial-gradient"></div>
            <img class="testimonial-avatar" src="img/crew/hk5.jpg" alt="">
            <p class="testimonial-review">"Equinox Bahari Utama made my dream of working with Royal Caribbean come true. Their guidance and support throughout the hiring process were exceptional. I’m grateful for this life-changing opportunity."</p>
            <div class="testimonial-profile">
                <h2 class="testimonial-name">Ardi Setiawan</h2>
                <h3 class="testimonial-position">Public Area Attendant</h3>
            </div>
            <img class="testimonial-brand" src="img/assets/brands-logo/celebrity-logo-white.png" alt="">
        </div>

        <div class="swiper-slide testimonial-slide">
            <img class="testimonial-bg" src="img/ships/1.jpg" alt="">
            <div class="testimonial-gradient"></div>
            <img class="testimonial-avatar" src="img/crew/testi4.jpg" alt="">
            <p class="testimonial-review">"Thanks to Equinox Bahari Utama, I’m now part of one of the world’s best cruise lines. The process was smooth, and their team ensured I was fully prepared for my journey."</p>
            <div class="testimonial-profile">
                <h2 class="testimonial-name">Fitri Ramadhani</h2>
                <h3 class="testimonial-position">Pool Attendant</h3>
            </div>
            <img class="testimonial-brand" src="img/assets/brands-logo/royal-logo-white.png" alt="">
        </div>

        <div class="swiper-slide testimonial-slide">
            <img class="testimonial-bg" src="img/ships/1.jpg" alt="">
            <div class="testimonial-gradient"></div>
            <img class="testimonial-avatar" src="img/crew/testi.jpg" alt="">
            <p class="testimonial-review">"Equinox Bahari Utama didn’t just find me a job; they opened the door to a whole new world. Joining Royal Caribbean has been a life-changing adventure, and it all started with their expert guidance and care."</p>
            <div class="testimonial-profile">
                <h2 class="testimonial-name">Raka Wijaya</h2>
                <h3 class="testimonial-position">Head  Waiter</h3>
            </div>
            <img class="testimonial-brand" src="img/assets/brands-logo/celebrity-logo-white.png" alt="">
        </div>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var testimonialSwiper = new Swiper(".testimonial", {
        slidesPerView: 1,
        loop: true,
        speed: 1000,
        spaceBetween: 10,
        autoplay: {
            delay: 5000,
            disableOnInteraction: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>