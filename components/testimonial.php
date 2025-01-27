<style>
    .testimonial {
        width: 100%;
        margin-block: 1rem;
    }

    .testimonial-slide {
        cursor: grab;
    }
</style>

<!-- Swiper -->
<div class="swiper testimonial">
    <div class="swiper-wrapper testimonial-wrapper">

        <div class="swiper-slide testimonial-slide">
            <div class="testimonial-card">
                <div class="testimonial-row">
                    <div class="testimonial-col bg-primary">
                        <div class="testimonial-content">
                            <p class="text-secondary">Testimonial</p>
                            <br>
                            <h1 class="heading1 text-light">Hariri <br><span class="text-third">Sulaiman</span></h1>
                            <br>
                            <p class="text-light">"Equinox Bahari Utama provided everything I needed to succeed at Royal
                                Caribbean. Their professionalism and care made all the difference. I’m proud to
                                represent both companies."</p>
                            <br>
                            <img src="img/assets/brands-logo/royal-logo-white.png" alt="" class="testi-brand">
                        </div>
                        <img class="testimonial-avatar" src="img/crew/hariri.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide testimonial-slide">
            <div class="testimonial-card">
                <div class="testimonial-row">
                    <div class="testimonial-col bg-primary">
                        <div class="testimonial-content">
                            <p class="text-secondary">Testimonial</p>
                            <br>
                            <h1 class="heading1 text-light">Paulette <br><span class="text-third">Johanson</span></h1>
                            <br>
                            <p class="text-light">"Equinox Bahari Utama provided everything I needed to succeed at Royal
                                Caribbean. Their professionalism and care made all the difference. I’m proud to
                                represent both companies."</p>
                            <br>
                            <img src="img/assets/brands-logo/celebrity-logo-white.png" alt="" class="testi-brand">
                        </div>
                        <img class="testimonial-avatar" src="img/crew/teamtest.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide testimonial-slide">
            <div class="testimonial-card">
                <div class="testimonial-row">
                    <div class="testimonial-col bg-primary">
                        <div class="testimonial-content">
                            <p class="text-secondary">Testimonial</p>
                            <br>
                            <h1 class="heading1 text-light">Paulette <br><span class="text-third">Johanson</span></h1>
                            <br>
                            <p class="text-light">"Equinox Bahari Utama provided everything I needed to succeed at Royal
                                Caribbean. Their professionalism and care made all the difference. I’m proud to
                                represent both companies."</p>
                            <br>
                            <img src="img/assets/brands-logo/celebrity-logo-white.png" alt="" class="testi-brand">
                        </div>
                        <img class="testimonial-avatar" src="img/crew/teamtest.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide testimonial-slide">
            <div class="testimonial-card">
                <div class="testimonial-row">
                    <div class="testimonial-col bg-primary">
                        <div class="testimonial-content">
                            <p class="text-secondary">Testimonial</p>
                            <br>
                            <h1 class="heading1 text-light">Paulette <br><span class="text-third">Johanson</span></h1>
                            <br>
                            <p class="text-light">"Equinox Bahari Utama provided everything I needed to succeed at Royal
                                Caribbean. Their professionalism and care made all the difference. I’m proud to
                                represent both companies."</p>
                            <br>
                            <img src="img/assets/brands-logo/celebrity-logo-white.png" alt="" class="testi-brand">
                        </div>
                        <img class="testimonial-avatar" src="img/crew/teamtest.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide testimonial-slide">
            <div class="testimonial-card">
                <div class="testimonial-row">
                    <div class="testimonial-col bg-primary">
                        <div class="testimonial-content">
                            <p class="text-secondary">Testimonial</p>
                            <br>
                            <h1 class="heading1 text-light">Paulette <br><span class="text-third">Johanson</span></h1>
                            <br>
                            <p class="text-light">"Equinox Bahari Utama provided everything I needed to succeed at Royal
                                Caribbean. Their professionalism and care made all the difference. I’m proud to
                                represent both companies."</p>
                            <br>
                            <img src="img/assets/brands-logo/celebrity-logo-white.png" alt="" class="testi-brand">
                        </div>
                        <img class="testimonial-avatar" src="img/crew/teamtest.png" alt="">
                    </div>
                </div>
            </div>
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
        slidesPerView: 2,
        loop: true,
        speed: 1000,
        spaceBetween: 20,
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