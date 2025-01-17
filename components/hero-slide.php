<style>
    .hero-swiper {
        width: 100%;
        height: 100%;
    }

    .hero-slide {
        background-position: center;
        background-size: cover;
    }

    .prev {
        position: absolute;
        left: -35px;
        bottom: 50%;
    }

    .next {
        position: absolute;
        bottom: 50%;
        right: -35px;
    }

    .prev,
    .next {
        color: var(--text-color);
        border: 3px solid var(--text-color);
        padding: 10px;
        cursor: pointer;
        font-size: 14px;
        border-radius: 50%;
        transform: scale(.7);
        transition: 100ms ease;
        z-index: 8;
    }

    .prev:hover,
    .next:hover {
        color: var(--primary);
        border: 4px solid var(--primary);
        box-shadow: var(--shadow-sm);
        transform: scale(.8);
    }   
</style>

<!-- Swiper -->
<div class="swiper hero-swiper">

    <div class="swiper-wrapper hero-wrapper">

        <div class="swiper-slide hero-slide">
            <section class="hero" style="background: url(img/ships/wonderots2.jpg) center/cover no-repeat;">
                <div class="hero-gradient"></div>
                <h1 class="pt-ebu heading1 text-light">PT.EQUINOX <span class="text-third">BAHARI UTAMA</span> <span class="text-secondary">CRUISE</span></h1>
                <!-- <h1 class="pt-ebu heading1 text-light">PT.EQUINOX <br><span class="text-third">BAHARI UTAMA</span> <br><span class="text-secondary">CRUISE</span></h1> -->
                <div class="hero-content">
                    <h1 class="heading1 text-light">More than a job,<br><span class="text-third">it’s a future</span></h1>
                    <p class="text-light"><strong>Equinox Bahari Utama Cruise</strong> is the official
                        hiring partner of the
                        <strong>Royal Caribbean Group</strong>, specializing in connecting talented
                        individuals with rewarding
                        careers at sea.
                    </p>
                    <div class="hero-cta">
                        <a href="">Apply for a job</a>
                        <a href="">Partner with us</a>
                    </div>
                    <div class="hero-brands">
                        <img src="img/assets/brands-logo/royal-logo-white.png" alt="">
                        <img src="img/assets/brands-logo/celebrity-logo-white.png" alt="">
                        <img src="img/assets/brands-logo/silversea-logo-white.png" alt="">
                        <img src="img/assets/brands-logo/tui-logo-white.png" alt="">
                        <img src="img/assets/brands-logo/hapag-logo-white.png" alt="">
                    </div>

                </div>

            </section>
        </div>

        <div class="swiper-slide hero-slide">
            <section class="hero" style="background: url(img/ships/banner2.jpg) center/cover no-repeat;">
                <div class="hero-gradient"></div>
                <img class="hero-bg" src="img/equinox/ambassador.png" alt="">
                <div class="hero-content">
                    <h1 class="heading1 text-light">Meet our Brand <br><span class="text-secondary">Ambassador</span></h1>
                    <p class="text-light"><strong>Hariri Sulaiman</strong>, <br>
                        First Indonesian Second Officer at Royal Caribbean Group</p>
                    <div class="hero-cta">
                        <a href="">Apply for a job</a>
                        <a href="">About Hariri Sulaiman</a>
                    </div>
                    <div class="hero-brands">
                        <img src="img/assets/brands-logo/royal-logo-white.png" alt="">
                        <img src="img/assets/brands-logo/celebrity-logo-white.png" alt="">
                        <img src="img/assets/brands-logo/silversea-logo-white.png" alt="">
                        <img src="img/assets/brands-logo/tui-logo-white.png" alt="">
                        <img src="img/assets/brands-logo/hapag-logo-white.png" alt="">
                    </div>

                </div>

            </section>
        </div>

    </div>
    <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
    <div class="swiper-pagination"></div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var heroSwiper = new Swiper(".hero-swiper", {
        loop: true,
        speed: 1000,
        spaceBetween: 30,
        effect: "fade",
        autoplay: {
            delay: 10000,
            disableOnInteraction: false,
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