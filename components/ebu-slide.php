<style>
    .services-slider {
        position: relative;
        width: 100%;
        padding-block: 2rem;
        height: fit-content;
    }

    .services-wrapper {
        display: flex;
        align-items: center;
    }

    .services-slide img {
        object-fit: cover;
        height: 40%;
    }

    .services-slide {
        position: relative;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        overflow: hidden;
        height: 500px;
        border-radius: 10px;
        transition: 200ms ease-in-out;
        cursor: pointer;
        box-shadow: var(--shadow-sm);
    }

    .services-slide:hover {
        transform: scale(.95);
    }

    .services-gradient {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        color: var(--primary);
        height: 60%;
        gap: 1rem;
        padding: 2rem;
        line-height: var(--ls);
    }

    .services-gradient:hover .arrow-icon {
        transform: translateX(90%);
    }

    .arrow-icon {
        border-radius: 50%;
        width: 30px;
        height: 30px;
        border: 2px solid var(--primary);
        transition: 200ms ease;
    }

    .services-gradient h1 {
        color: var(--primary);
        text-transform: uppercase;
        font-weight: 800;
        font-size: 2.2rem;
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

        <div class="swiper-slide services-slide bg-white" onclick="window.location.href='crewing-services.php';">
            <div class="services-gradient">
                <p class="text-secondary">Learn More</p>
                <h1>Ship Management Services</h1>
                <p>PT. Perusahaan Pelayaran Equinox was established in 2001 as an Indonesian national shipping</p>
                <!-- <i class="arrow-icon" data-feather="arrow-right"></i> -->
            </div>
            <img src="img/assets/wwd.jpg" alt="">
        </div>
        
        <div class="swiper-slide services-slide bg-secondary">
            <div class="services-gradient">
                <p class="text-light">Learn More</p>
                <h1>Crew Management Services <span class="text-light">(Cruise)</span></h1>
                <p>PT.Equinox Bahari Utama is a fully licensed crewing company that employs highly competent
                    Indonesian crew.</p>

            </div>
            <img src="img/ships/1.jpg" alt="">
        </div>


        <div class="swiper-slide services-slide bg-secondary">
            <div class="services-gradient">
                <p class="text-light">Learn More</p>
                <h1>Crew Management Services <span class="text-light">(Marine)</span></h1>
                <p>PT.Equinox Bahari Utama is a fully licensed crewing company that employs highly competent
                    Indonesian crew.</p>

            </div>
            <img src="img/ships/marine.jpg" alt="">
        </div>


        <div class="swiper-slide services-slide bg-white">
            <div class="services-gradient">
                <p class="text-secondary">Learn More</p>
                <h1>Equinox Sentra Bahari</h1>
                <p>PT. Equinox Sentra Bahari is one of Indonesia's agency companies in the port and shipping
                sector</p>
            </div>
            <img src="img/9-scaled.jpg" alt="">
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
        spaceBetween: 40,
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