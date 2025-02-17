<style>
    .about-swiper {
        width: 100%;
        height: 100%;
    }

    .about-slide {
        background-position: center;
        background-size: cover;
    }
    .about-content h1 {
        font-size: 4rem;
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
<div class="swiper about-swiper">

    <div class="swiper-wrapper about-wrapper">

        <div class="swiper-slide about-slide">
            <section class="about" style="background: url(img/team/cruiseteams.jpg) center/cover no-repeat;">
                <div class="about-gradient"></div>
                <!-- <img class="about-bg" src="img/crew/chef.png" alt=""> -->
                <div class="about-content animate">
                    <h1 class="heading1 text-light">Equinox <br><span class="text-secondary">Shipping</span> <br><span class="text-third">Group</span> </h1>
                    <p class="text-light">Equinox Shipping Group was established in 2001 as an Indonesian national shipping company. Our team of Indonesian and expatriate management and staff bring with us a wealth of local and international experience in all aspects of shipping.
                    </p>
                    <!-- <div class="about-cta">
                        <a href="">Apply for a job</a>
                        <a href="">Partner with us</a>
                    </div> -->
                    <div class="about-brands">
                        <img src="img/logo/logo1.png" alt="">
                        <img class="img2" src="img/assets/brands-logo/pesona-sentra-utama.png" alt="">
                    </div>

                </div>

            </section>
        </div>

        <div class="swiper-slide about-slide">
            <section class="about" style="background: url(img/offices/bali1.jpg) center/cover no-repeat;">
                <div class="about-gradient"></div>
                <!-- <img class="about-bg" src="img/crew/chef.png" alt=""> -->
                <div class="about-content">
                    <h1 class="heading1 text-light">Equinox <br><span class="text-secondary">Bahari</span> <br><span class="text-third">Utama</span></h1>
                    <p class="text-light">Fully licensed crewing company that employs highly competent Indonesian crew members to work in well-known international tankers, bulk, and cruise ship companies throughout the world.
                    </p>
                    <!-- <div class="about-cta">
                        <a href="">Apply for a job</a>
                        <a href="">Partner with us</a>
                    </div> -->
                    <div class="about-brands">
                        <img src="img/logo/logo1.png" alt="">
                        <img class="img2" src="img/assets/brands-logo/pesona-sentra-utama.png" alt="">
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
    var aboutSwiper = new Swiper(".about-swiper", {
        loop: true,
        speed: 1000,
        spaceBetween: 30,
        // effect: "fade",
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