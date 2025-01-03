<style>
    .licenses-slider {
        position: relative;
        width: 100%;
        height: fit-content;
    }

    .licenses-wrapper {
        display: flex;
        align-items: center;
        padding-bottom: 60px;
        padding-top: 30px;
    }

    .licenses-slide {
        position: relative;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        height: 380px;
        border-radius: 10px;
        box-shadow: var(--shadow-m);
    }
    .licenses-slide:hover .licenses-gradient {
        top: 0;
        background: rgba(4, 33, 67, 0.87);

    }
    .licenses-slide:hover .licenses-gradient p {
        opacity: 1;

    }

    .licenses-slide img {
        position: absolute;
        display: block;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
    }

    .licenses-gradient {
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
    .licenses-gradient h1 {
        font-size: 24px;
        border-bottom: 2px solid var(--third);
        padding-bottom: 10px;
        margin-bottom: 10px;
        color: var(--third);
    }
    .licenses-gradient p {
        transition: 300ms ease;
        color: var(--light);
        opacity: 0;
    }
    .licenses-gradient a {
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
<div class="swiper licenses-slider">
    <div class="swiper-wrapper licenses-wrapper">

        <div class="swiper-slide licenses-slide">
            <div class="licenses-gradient">
                <h1> ISO Certification</h1>
                <p> Ensures the agency meets international standards for quality management (ISO 9001) or other relevant ISO standards.</p>
                <!-- <a href="">Learn more</a> -->
            </div>
            <img src="img/licenses/1.png" alt="">
        </div>

        <div class="swiper-slide licenses-slide">
            <div class="licenses-gradient">
                <h1>SIUPAK</h1>
                <p>stands for Surat Izin Usaha Perekrutan dan Penempatan Awak Kapal (License for Recruitment and Placement of Ship Crew), a specific license required for Indonesian agencies involved in recruiting and placing ship crew members, both domestically and internationally. This license is crucial for legal operation under Indonesia's maritime and manpower regulations.</p>
                <!-- <a href="">Learn more</a> -->
            </div>
            <img src="img/licenses/2.jpg" alt="">
        </div>

        <div class="swiper-slide licenses-slide">
            <div class="licenses-gradient">
                <h1>Partnership Agreements (MoU)</h1>
                <p> Documented agreements with overseas employers and training centers to validate placement processes.</p>
                <!-- <a href="">Learn more</a> -->
            </div>
            <img src="img/licenses/3.jpg" alt="">
        </div>

        <div class="swiper-slide licenses-slide">
            <div class="licenses-gradient">
                <h1>Local Government Operational Permit</h1>
                <p>Documented agreements with overseas employers and training centers to validate placement processes.</p>
                <!-- <a href="">Learn more</a> -->
            </div>
            <img src="img/licenses/4.jpeg" alt="">
        </div>


    </div>
    <div class="swiper-pagination"></div>
</div>



<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var licensesSwiper = new Swiper(".licenses-slider", {
        slidesPerView: 4,
        spaceBetween: 20,
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