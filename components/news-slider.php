<style>
    .news-swiper {
        width: 100%;
        height: 100%;
    }
    .news-wrapper {
        padding-bottom: 3rem;
    }
    .news-slide {
        display: flex;
        flex-direction: column;
        overflow: hidden;
        font-size: 18px;
        background-color: var(--primary);
        border-radius: var(--border-radius);
        height: 500px;
    }
</style>

<!-- Swiper -->
<div class="swiper news-swiper">
    <div class="swiper-wrapper news-wrapper">
        
        <div class="swiper-slide news-slide">
            <img class="news-image" src="img/ships/3.jpg" alt="">
            <div class="news-info">
                <a href=""><h2 class="text-third">"Equinox Bahari Utama Successfully Deploys 5000 Crew Members to Royal Caribbean"</h2></a>
                <h4 class="text-secondary">January 3, 2025</h4>
            </div>
        </div>

        <div class="swiper-slide news-slide">
            <img class="news-image" src="img/blog/3.jpg" alt="">
            <div class="news-info">
                <a href=""><h2 class="text-third">"Equinox Hosts Career Expo for Cruise Line Opportunities in Jakarta"</h2></a>
                <h4 class="text-secondary">October 25, 2024</h4>
            </div>
        </div>

        <div class="swiper-slide news-slide">
            <img class="news-image" src="img/blog/5.jpg" alt="">
            <div class="news-info">
                <a href=""><h2 class="text-third">"Crew Conference Nusantara Regis Satu"</h2></a>
                <h4 class="text-secondary">September 12, 2024</h4>
            </div>
        </div>

        <div class="swiper-slide news-slide">
            <img class="news-image" src="img/blog/2.jpg" alt="">
            <div class="news-info">
                <a href=""><h2 class="text-third">Lorem ipsum dolor sit.</h2></a>
                <h4 class="text-secondary">1 January 2025</h4>
            </div>
        </div>

        <div class="swiper-slide news-slide">
            <img class="news-image" src="img/blog/2.jpg" alt="">
            <div class="news-info">
                <a href=""><h2 class="text-third">Lorem ipsum dolor sit.</h2></a>
                <h4 class="text-light">1 January 2025</h4>
            </div>
        </div>

    </div>
    <div class="swiper-pagination"></div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var newsSwiper = new Swiper(".news-swiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>