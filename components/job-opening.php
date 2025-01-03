<style>
    .job-swiper {
        width: 100%;
        height: 100%;
    }

    .job-wrapper {
        position: relative;
        margin: 2rem 4rem;
    }

    .job-slide {
        position: relative;
        text-align: center;
        font-size: 18px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 400px;
        background-color: var(--primary);
        margin-bottom: 2.5rem;
        padding: 1rem;
        border-radius: 20px;
        border-bottom: 10px solid var(--third);
    }


    .prev {
        position: absolute;
        left: -55px;
        bottom: 40%;
        transform: translateX(-50%);
    }

    .next {
        position: absolute;
        bottom: 40%;
        right: -55px;
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
<!-- Swiper -->
<div class="swiper job-swiper">
    <div class="swiper-wrapper job-wrapper">

        <div class="swiper-slide job-slide">
            <img class="job-logo" src="img/assets/brands-logo/royal-logo-white.png" alt="">
            <div class="job-info">
                <h1 class="job-position">Restaurant Attendant</h1>
                <h2 class="job-department">F&B Service</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, placeat!</p>
                <div class="job-cta">
                    <a href="">Apply now</a>
                    <a href="">Requirements</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide job-slide">
            <img class="job-logo" src="img/assets/brands-logo/royal-logo-white.png" alt="">
            <div class="job-info">
                <h1 class="job-position">Public Area Attendant</h1>
                <h2 class="job-department">F&B Service</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, placeat!</p>
                <div class="job-cta">
                    <a href="">Apply now</a>
                    <a href="">Requirements</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide job-slide">
            <img class="job-logo" src="img/assets/brands-logo/celebrity-logo-white.png" alt="">
            <div class="job-info">
                <h1 class="job-position">Commi1</h1>
                <h2 class="job-department">Culinary</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, placeat!</p>
                <div class="job-cta">
                    <a href="">Apply now</a>
                    <a href="">Requirements</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide job-slide">
            <img class="job-logo" src="img/assets/brands-logo/royal-logo-white.png" alt="">
            <div class="job-info">
                <h1 class="job-position">Chef de Partie</h1>
                <h2 class="job-department">Cunilary</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, placeat!</p>
                <div class="job-cta">
                    <a href="">Apply now</a>
                    <a href="">Requirements</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide job-slide">
            <img class="job-logo" src="img/assets/brands-logo/celebrity-logo-white.png" alt="">
            <div class="job-info">
                <h1 class="job-position">Waiter</h1>
                <h2 class="job-department">F&B Service</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, placeat!</p>
                <div class="job-cta">
                    <a href="">Apply now</a>
                    <a href="">Requirements</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide job-slide">
            <img class="job-logo" src="img/assets/brands-logo/royal-logo-white.png" alt="">
            <div class="job-info">
                <h1 class="job-position">Waiter</h1>
                <h2 class="job-department">F&B Service</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, placeat!</p>
                <div class="job-cta">
                    <a href="">Apply now</a>
                    <a href="">Requirements</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide job-slide">
            <img class="job-logo" src="img/assets/brands-logo/royal-logo-white.png" alt="">
            <div class="job-info">
                <h1 class="job-position">Waiter</h1>
                <h2 class="job-department">F&B Service</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, placeat!</p>
                <div class="job-cta">
                    <a href="">Apply now</a>
                    <a href="">Requirements</a>
                </div>
            </div>
        </div>


    </div>
    <div class="swiper-pagination"></div>
</div>
<button class="prev" id="custom-prev"><i data-feather="arrow-left"></i></button>

<button class="next" id="custom-next"><i data-feather="arrow-right"></i></button>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var Jobswiper = new Swiper(".job-swiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        navigation: {
            nextEl: ".next",
            prevEl: ".prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>