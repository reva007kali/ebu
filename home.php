<?php
if (preg_match('/\.(html|css|js)$/', $_SERVER['REQUEST_URI'])) {
    header('Cache-Control: no-cache, no-store, must-revalidate');
} elseif (preg_match('/\.(jpg|jpeg|png|gif|ico|svg)$/', $_SERVER['REQUEST_URI'])) {
    header('Cache-Control: max-age=31536000, public');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <title>Home | Equinox cruise</title>
    <?php include 'components/style-links.php' ?>

    <!-- Link to Bootstrap CSS -->
</head>

<body>
    <?php include 'components/splashscreen.php' ?>


    <!-- navbar -->
    <?php include 'components/navbar.php' ?>
    <!-- navbar -->

    <!-- hero section -->
    <?php include 'components/hero-slide.php' ?>
    <!-- hero section -->

    <!-- introduction -->
    <div class="intro">
        <div class="intro-container">
            <div class="intro-col-1">
                <h1 class="heading1">"We Help People Achieve Their Dreams"</span></h1>
                <p>We help Indonesians achieve their dream jobs on cruise ships, providing access to global
                    opportunities, personal and professional growth, and a pathway to a brighter and more prosperous
                    future for themselves and their families.</p>
            </div>
            <div class="intro-col-2">
                <img src="img/assets/svg/play-circle.svg" alt="">
            </div>
        </div>
    </div>
    <!-- introduction -->


    <!-- official hiring partner -->
    <?php include 'components/hiringpartner.php' ?>
    <!-- official hiring partner -->



    <!-- deployed numbers -->
    <section class="deployed">
        <img src="img/ships/royal-caribbean-cruises.jpg" alt="" class="deployed-background">
        <h1 class="heading2 text-light">Crew departure statistics <span class="text-primary">by
                department</span></h1>
        <div class="deployed-row">

            <div class="deployed-col data-numbers-container">
                <img class="deployed-bg" src="img/department/1.png" alt="">
                <div class="deployed-col-content">
                    <h2 class="text-third data-numbers" data-target="1920"></h2>
                    <h3 class="text-light">Culinary</h3>
                </div>
            </div>


            <div class="deployed-col data-numbers-container">
                <img class="deployed-bg" src="img/department/3.png" alt="">
                <div class="deployed-col-content">
                    <h2 class="text-third data-numbers" data-target="920"></h2>
                    <h3 class="text-light">F&B Services</h3>
                </div>
            </div>

            <div class="deployed-col data-numbers-container">
                <img class="deployed-bg" src="img/department/4.png" alt="">
                <div class="deployed-col-content">
                    <h2 class="text-third data-numbers" data-target="1571"></h2>
                    <h3 class="text-light">Housekeeping</h3>
                </div>
            </div>

            <div class="deployed-col data-numbers-container">
                <img class="deployed-bg" src="img/department/5.png" alt="">
                <div class="deployed-col-content">
                    <h2 class="text-third data-numbers" data-target="1000"></h2>
                    <h3 class="text-light">Others</h3>
                </div>
            </div>

        </div>
    </section>
    <!-- deployed numbers -->


    <!-- our services -->
    <div class="services">
        <h1 class="heading1 text-center text-third">Our Services</h1>
        <div class="services-row">
            <?php include 'components/services-slide.php' ?>
        </div>
    </div>
    <!-- our services -->

    <!-- what we do -->
    <section class="wwd">
        <h1 class="heading1 text-center text-primary">What We Do</h1>
        <!-- <p class="text-primary text-center">We connect skilled seafarers and hospitality professionals with top
            opportunities through our Marine and Hotel Recruitment services, ensuring excellence for both candidates and
            employers.</p> -->
        <div class="wwd-row">

            <div class="wwd-col">
                <img class="wwd-bg" src="img/crew/2.jpg" alt="">
                <h2 class="heading2 text-light">Hotel Recruitment</h2>
            </div>
            <div class="wwd-col2">
                <h1 class="text-primary heading2">Hotel Position:</h1>
                <div class="wwd-row">
                    <ul>
                        <h2 class="text-primary">Culinary</h2>
                        <li>Chef De Partie</li>
                        <li>Commis Cook</li>
                        <li>Teppanyaki Chef</li>
                        <li>Executive Chef</li>
                        <li>Sous Chef</li>
                        <li>Galley Utility</li>
                    </ul>
                    <ul>
                        <h2 class="text-primary">Food & Beverage</h2>
                        <li>Assistant Waiter</li>
                        <li>Waiter</li>
                        <li>Restaurant Attendant</li>
                        <li>Assistant Maitre D</li>
                        <li>Restaurant Services</li>
                        <li>Sommelier</li>
                    </ul>
                    <ul>
                        <h2 class="text-primary">Housekeeping</h2>
                        <li>Stateroom Attendant</li>
                        <li>Public Area Attendant</li>
                        <li>Deck Attendant</li>
                        <li>Housekeeping Supervisor</li>
                        <li>Laundry Master</li>
                        <li>Assistant Laundry Master</li>
                        <li>Laundry Attendant</li>
                    </ul>
                </div>
                <a class="cta-btn" href="">See All Position</a>
            </div>
        </div>
        <div class="wwd-row">

            <div class="wwd-col2">
                <h1 class="text-primary heading2">Marine Position:</h1>
                <div class="wwd-row">
                    <ul>
                        <h2 class="text-primary">Deck</h2>
                        <li>Chief Officer - Deck</li>
                        <li>Environmental Officer</li>
                        <li>3rd Officer</li>
                        <li>Sailor O/S</li>
                        <li>Deck Cadet</li>
                        <li>Sailor O/S</li>
                    </ul>
                    <ul>
                        <h2 class="text-primary">Electrical</h2>
                        <li>4th Electrical Engineer</li>
                        <li>Electrical Engineer</li>
                        <li>2nd Electronics Engineer</li>
                        <li>Assistant Maitre D</li>
                        <li>PL Assistant Electronic Officer</li>
                        <li>Assistant Electrician</li>
                    </ul>
                    <ul>
                        <h2 class="text-primary">Engine</h2>
                        <li>Fitter A/C</li>
                        <li>Fitter Engine</li>
                        <li>Wipers</li>
                        <li>Junior Engine Man</li>
                        <li>Incinerator Operator</li>
                        <li>Engine Foreman</li>
                        <li>Mechanic</li>
                        <li>Motorman</li>
                    </ul>
                </div>
                <a class="cta-btn" href="">See All Position</a>
            </div>
            <div class="wwd-col">
                <img class="wwd-bg" src="img/crew/marine.jpg" alt="">
                <h2 class="heading2 text-light">Marine Recruitment</h2>
            </div>
        </div>
    </section>
    <!-- what we do -->


    <!-- testimonial -->
    <div class="testimonial-container">
        <?php include 'components/testimonial.php' ?>
    </div>
    <!-- testimonial -->

    <!-- our offices -->
    <section class="office">
        <div class="office-heading">
            <h1 class="heading1 text-secondary">Our Office Location</h1>
            <!-- <p class="para">Equinox Bahari Utama, a fully licensed crewing company in Indonesia, operates offices in both Jakarta and
                Bali, each offering unique advantages to seafarers and clients.</p> -->
        </div>

        <div class="office-row">
            <div class="office-col">
                <div class="office-content">
                    <h1>Jakarta Office</h1>
                    <ul>
                        <li><strong>Strategic Position:</strong> <br>Situated in Indonesia's capital, the Jakarta office
                            is at the heart of
                            the nation's maritime industry, providing easy access to major shipping companies and
                            regulatory bodies.</li>
                        <li><strong>Comprehensive Services:</strong> <br>As the head office, it offers a full range of
                            services, including
                            recruitment, training, and crew management, ensuring efficient operations and support for
                            seafarers.</li>
                        <li><strong>Professional Network:</strong> <br>Proximity to various maritime organizations and
                            institutions
                            facilitates strong industry connections and opportunities for collaboration.</li>
                    </ul>

                    <h2><strong class="text-third">Location:</strong> Globe Building, 4th-5th Floor, Jl. Warung Jati
                        Barat Kav. 31-33,
                        South Jakarta, 12740 Indonesia.</h2>
                    <br>
                    <a class="flex" href="https://maps.app.goo.gl/2ZiDaNgheY4t8EkH6"><i data-feather="map-pin"></i>Open
                        map</a>
                </div>
            </div>
            <div class="office-col">
                <?php include 'components/jakarta-office-slider.php' ?>
            </div>
        </div>
        <div class="office-row">
            <div class="office-col">
                <div class="office-content">
                    <h1>Bali Office</h1>

                    <ul>
                        <li><strong>Regional Accessibility:</strong><br>The Bali office caters to seafarers in the
                            eastern
                            regions of Indonesia, making it convenient for local applicants to access recruitment and
                            training services.</li>
                        <li><strong>Focused Recruitment:</strong> <br>Specializes in conducting walk-in interviews and
                            onboarding processes, streamlining the hiring experience for candidates.</li>
                        <li><strong>Cultural Hub:</strong><br>Cultural Hub: Located in a major tourist destination, the
                            Bali
                            office benefits from a rich cultural environment, enhancing the hospitality training
                            provided to cruise ship crew members.</li>
                    </ul>

                    <h2><strong class="text-third">Location:</strong> Gedung MNC Vision Lt.3, Denpasar, Bali.</h2>
                    <br>
                    <a class="flex" href="https://maps.app.goo.gl/3VLwJuq5K7MGCEc29"><i data-feather="map-pin"></i>Open
                        map</a>
                </div>
            </div>
            <div class="office-col">
                <?php include 'components/bali-office-slider.php' ?>
            </div>
        </div>
    </section>
    <!-- our offices -->


    <!-- latest news -->
    <section class="news">
        <h1 class="heading1 text-third">Our Blog</h1>
        <?php include 'components/news-slider.php' ?>

    </section>
    <!-- latest news -->

    <!-- contact form -->
    <section class="contact-form">
        <div class="contact-form-gradient"></div>
        <h1 class="heading1 text-center text-light">Contact us</h1>
        <div class="contact-form-container">
            <!-- Left Column -->
            <div class="left-column">
                <h3>Contact Information</h3>
                <p><strong>Phone:</strong> +62 123 456 789</p>
                <p><strong>Email:</strong> example@domain.com</p>
                <p><strong>Partnership:</strong> partnership@domain.com</p>
                <a href="">Contact Our Staff</a>
            </div>

            <!-- Right Column -->
            <div class="right-column">
                <form action="#" method="POST">
                    <input type="text" name="fullname" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>

        </div>
        <div class="aware-banner">
            <h4>Aware Program</h4>
            <p>If you encounter any instances of misconduct, unethical behavior, such as fraud or bribery, 
            please report it here.</p>
            <a href="">contact aware</a>
        </div>
    </section>
    <!-- contact form -->



    <!-- footer -->
    <?php include 'components/footer.php' ?>
    <!-- footer -->


    <!-- js -->

    <script src="js/app.js" defer></script>
    <script> feather.replace();</script>
    <!-- js -->
</body>

</html>