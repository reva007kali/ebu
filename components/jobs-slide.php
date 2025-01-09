<style>
    .jobs-swiper {
        width: 100%;
        height: 100%;
    }

    .jobs-slide {
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
<div class="swiper jobs-swiper">

    <div class="swiper-wrapper jobs-wrapper">

        <div class="swiper-slide jobs-slide">
            <section class="jobs" style="background: url(img/ships/wonderots.webp) center/cover no-repeat;">
                <div class="jobs-gradient"></div>
                <!-- <img class="jobs-bg" src="img/crew/chef.png" alt=""> -->
                <div class="jobs-content">
                    <h1 class="heading1 text-light">NO Recruitment fee, no deployment fee</span></h1>
                    <p class="text-light">Join our network to access job openings across the globe, from land-based industries to prestigious cruise lines.
                    </p>
                    <div class="jobs-cta">
                        <a href="">Apply for a job</a>
                        <a href="">Partner with us</a>
                    </div>
                </div>

            </section>
        </div>

        <div class="swiper-slide jobs-slide">
            <section class="jobs" style="background: url(img/ships/4.jpg) center/cover no-repeat;">
                <div class="jobs-gradient"></div>
                <div class="jobs-content">
                    <h1 class="heading1 text-light">"inform us when you feel something is not right!"</h1>
                    <p class="text-light">If you encounter any unethical practices during the recruitment process, please do not hesitate to report it. This number is here to assist you in addressing any concerns or issues, ensuring transparency, fairness, and a safe recruitment experience for everyone involved. Your voice matters, and we are committed to maintaining the highest standards of integrity.</p>
                    <div class="jobs-cta">
                        <a href="https://api.whatsapp.com/send/?phone=628112029969&text&type=phone_number&app_absent=0">Call our Aware Number</a>
                    </div>
                </div>

            </section>
        </div>

        <div class="swiper-slide jobs-slide">
            <section class="jobs" style="background: url(img/ships/4.jpg) center/cover no-repeat;">
                <div class="jobs-gradient"></div>
                <div class="jobs-content">
                    <h1 class="heading1 text-light">"Building Careers with Integrity"</h1>
                    <p class="text-light">Benefit from industry-leading training programs designed to prepare you for the challenges of your dream job.</p>
                    <div class="jobs-cta">
                        <a href="">Apply for a job</a>
                    </div>
                </div>

            </section>
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
    var jobsSwiper = new Swiper(".jobs-swiper", {
        loop: true,
        speed: 1000,
        spaceBetween: 30,
        effect: "fade",
        autoplay: {
            delay: 8000,
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