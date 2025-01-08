<style>
    .services-slider {
        position: relative;
        width: 100%;
        height: fit-content;
    }

    .services-wrapper {
        display: flex;
        align-items: center;
        padding-bottom: 60px;
        padding-top: 30px;
    }

    .services-slide {
        position: relative;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        height: 400px;
        border-radius: 10px;
    }
    .services-slide:hover .services-gradient {
        top: 0;
        background: rgba(4, 33, 67, 0.87);

    }
    .services-slide:hover .services-gradient p {
        opacity: 1;

    }

    .services-slide img {
        position: absolute;
        display: block;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
    }

    .services-gradient {
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        padding: 1rem 1.5rem;
        top: 70%;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        background: rgba(4, 33, 67, 0.92);
        z-index: 2;
        transition: 500ms ease-in-out;
    }
    .services-gradient h1 {
        font-size: 24px;
        border-bottom: 2px solid var(--third);
        padding-bottom: 10px;
        margin-bottom: 10px;
        color: var(--third);
    }
    .services-gradient p {
        transition: 300ms ease;
        color: var(--light);
        opacity: 0;
    }
    .services-gradient a {
        color: var(--light);
        background-color: var(--secondary);
        padding: 5px 10px;
        width: fit-content;
        margin-block: 2rem;
        border-radius: var(--border-radius);
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
        background-color: var(--background-color);
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

<!-- Custom buttons -->
<button class="prev" id="custom-prev"><i data-feather="arrow-left"></i></button>
<button class="next" id="custom-next"><i data-feather="arrow-right"></i></button>

<!-- Swiper -->
<div class="swiper services-slider">
    <div class="swiper-wrapper services-wrapper">

        <div class="swiper-slide services-slide">
            <div class="services-gradient">
                <h1>Recruitment</h1>
                <p>We specialize in sourcing and hiring qualified candidates for various positions in the cruise industry, ensuring the right fit for both employers and job seekers.</p>
                <a href="">Learn more</a>
            </div>
            <img src="img/services/1.jpg" alt="">
        </div>

        <div class="swiper-slide services-slide">
            <div class="services-gradient">
                <h1>Document Assistance</h1>
                <p>Our team provides guidance in preparing and organizing essential documents required for employment, including passports, seafarer certifications, and health certificates.</p>
                <a href="">Learn more</a>
            </div>
            <img src="img/services/2.jpg" alt="">
        </div>

        <div class="swiper-slide services-slide">
            <div class="services-gradient">
                <h1>Visa Assistance</h1>
                <p>We simplify the visa application process by offering expert support to ensure timely approvals and compliance with destination-specific requirements.</p>
                <a href="">Learn more</a>
            </div>
            <img src="img/services/3.jpg" alt="">
        </div>

        <div class="swiper-slide services-slide">
            <div class="services-gradient">
                <h1>Deployment</h1>
                <p>We coordinate the logistics for smooth crew deployment, including travel arrangements and pre-departure briefings, ensuring candidates are fully prepared for their roles.</p>
                <a href="">Learn more</a>
            </div>
            <img src="img/services/4.jpg" alt="">
        </div>

    </div>
    <div class="swiper-pagination"></div>
</div>



<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var servicesSwiper = new Swiper(".services-slider", {
        slidesPerView: 4,
        spaceBetween: 20,
        freeMode: true,
        navigation: {
            nextEl: ".next",
            prevEl: ".prev",
        },
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },
    });
</script>