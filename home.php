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
        <div class="intro-container entry-anim">
            <div class="intro-col-1">
                <h1 class="heading1">We Help People<br><span class="text-third">Achieve Their</span> <span
                        class="text-secondary">Dreams</span></span></h1>
                <p>We help Indonesians achieve their dream jobs on cruise ships, providing access to global
                    opportunities, personal and professional growth, and a pathway to a brighter and more prosperous
                    future for themselves and their families.</p>
                <a href="about.php" class="btn btn-primary">About Equinox Bahari Utama</a>
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
    <section class="deployed entry-anim">
        <img src="img/ships/royal-caribbean-cruises.jpg" alt="" class="deployed-background">
        <div class="deployed-content">
            <h1 class="heading2 text-light">Crew departure statistics <span class="text-secondary">by
                    department</span>
            </h1>
            <p>We have deployed total xxxx <br>
                candidates onboard from various departments <br>
                like Culinary, F&B Housekeeping
                and
                Marine</p>
        </div>
        <div class="deployed-row">

            <div class="deployed-col data-numbers-container depth-shadow">
                <img class="deployed-bg" src="img/department/1.png" alt="">
                <div class="deployed-col-content">
                    <h2 class="text-third data-numbers" data-target="1920"></h2>
                    <h3 class="text-light">Culinary</h3>
                </div>
            </div>


            <div class="deployed-col data-numbers-container depth-shadow">
                <img class="deployed-bg" src="img/department/3.png" alt="">
                <div class="deployed-col-content">
                    <h2 class="text-third data-numbers" data-target="920"></h2>
                    <h3 class="text-light">F&B Services</h3>
                </div>
            </div>

            <div class="deployed-col data-numbers-container depth-shadow">
                <img class="deployed-bg" src="img/department/4.png" alt="">
                <div class="deployed-col-content">
                    <h2 class="text-third data-numbers" data-target="1571"></h2>
                    <h3 class="text-light">Housekeeping</h3>
                </div>
            </div>

            <div class="deployed-col data-numbers-container depth-shadow">
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
    <div class="services entry-anim">
        <h1 class="heading2 text-third">Our Services</h1>
        <div class="services-row">
            <?php include 'components/services-slide.php' ?>
        </div>
    </div>
    <!-- our services -->


    <!-- what we do -->
    <!-- Modal -->
    <div id="wwd-modal" class="wwd-modal">
        <div class="wwd-modal-content">
            <span class="wwd-modal-close" onclick="closeWwdModal()">&times;</span>
            <a href="" class="btn wwd-cta">Apply Now</a>
            <!-- Hotel Recruitment Content -->
            <div id="hotel-content" class="wwd-modal-section">
                <h1 class="heading1 text-third">Hotel Recruitment</h1>
                <div class="accordion-container">

                    <!-- Culinary -->
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <h3>Culinary</h3>
                        </div>
                        <div class="accordion-content">
                            <ul>
                                <li>Sous Chef (All Sections)</li>
                                <li>Junior Sous Chef</li>
                                <li>Chef De Partie (All Sections)</li>
                                <li>Chef De Partie Gandemanger</li>
                                <li>Teppan Chef</li>
                                <li>Commis - 1 (Hot Kitchen, Pastry, Pantry, Bakery, Sushi, Butcher)</li>
                                <li>Commis - 2 (Hot Kitchen, Pastry, Pantry, Bakery, Sushi, Butcher)</li>
                                <li>Galley Steward</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Casino -->
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <h3>Casino</h3>
                        </div>
                        <div class="accordion-content">
                            <ul>
                                <li>Casino Dealer</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Entertainment -->
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <h3>Entertainment</h3>
                        </div>
                        <div class="accordion-content">
                            <ul>
                                <li>Cruise Staff</li>
                                <li>Sports Staff</li>
                                <li>Youth Staff</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Hotel Operations -->
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <h3>Hotel Operations</h3>
                        </div>
                        <div class="accordion-content">
                            <ul>
                                <li>Provision Storekeeper</li>
                                <li>Storekeeper-Hotel</li>
                                <li>Provision Utility</li>
                                <li>Lifeguard Staff</li>
                                <li>Security Staff</li>
                                <li>Photographer</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Housekeeping -->
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <h3>Housekeeping</h3>
                        </div>
                        <div class="accordion-content">
                            <ul>
                                <li>Laundry Master</li>
                                <li>Assistant Laundry Master</li>
                                <li>Laundry Attendant</li>
                                <li>Housekeeping Supervisor</li>
                                <li>Linenkeeper/Laundrymaster</li>
                                <li>Public Area Attendant</li>
                                <li>Cleaner-Tailor</li>
                                <li>Housekeeping Admin Assistant</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Food and Beverage -->
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <h3>Food and Beverage (F&B)</h3>
                        </div>
                        <div class="accordion-content">
                            <ul>
                                <li>Restaurant Attendant</li>
                                <li>Asst. Waiter</li>
                                <li>Waiter</li>
                                <li>Restaurant Supervisor</li>
                                <li>Head Waiter</li>
                            </ul>
                        </div>
                    </div>



                    <!-- Marine -->

                </div>
            </div>

            <!-- Marine Recruitment Content -->
            <div id="marine-content" class="wwd-modal-section">
                <h1 class="text-third heading1">Marine Recruitment</h1>
                <div class="accordion-container">
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <h3>Marine</h3>
                        </div>
                        <div class="accordion-content">
                            <ul>
                                <li>3Rd Asst. Repairman</li>
                                <li>3Rd Asst. Carpenter</li>
                                <li>3Rd Asst. Electrician</li>
                                <li>Sailor Os</li>
                                <li>Sailor Ab</li>
                                <li>Junior Engine Man</li>
                                <li>Junior Seaman</li>
                                <li>Motorman</li>
                                <li>Upholsterer</li>
                                <li>Horticulturist</li>
                                <li>Incinerator Operator</li>
                                <li>Asst. Refrig. Engineer</li>
                                <li>Repairman</li>
                                <li>Oiler</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="wwd entry-anim">
        <h1 class="heading2 text-primary">What We Do</h1>
        <div class="wwd-row">
            <div class="wwd-col " onclick="openWwdModal('hotel')">
                <div class="wwd-gradient"></div>
                <img src="img/crew/2.jpg" alt="" class="wwd-bg">
                <div class="wwd-content">
                    <h1>Hotel <span class="text-third">Recruitment</span></h1>
                    <p>Equinox Bahari Utama provides tailored crewing solutions for the cruise line industry, including
                        Culinary, F&B Services, Housekeeping and more.</p>
                </div>
            </div>
            <div class="wwd-col bg-primary" onclick="openWwdModal('marine')">
                <div class="wwd-gradient"></div>
                <img src="img/crew/marine.jpg" alt="" class="wwd-bg">
                <div class="wwd-content">
                    <h1>Marine <span class="text-secondary">Recruitment</span></h1>
                    <p>Specializing in maritime crew placement, Equinox Bahari Utama connects qualified seafarers with
                        leading cruise line company</p>
                </div>
            </div>
        </div>
    </section>
    <!-- what we do -->


    <!-- testimonial -->
    <div class="testimonial-container entry-anim">
        <h1 class="heading2 text-primary">What People Said About Us</h1>
        <?php include 'components/testimonial.php' ?>
    </div>
    <!-- testimonial -->

    <!-- our offices -->
    <section class="office ">
        <div class="office-heading">
            <h1 class="heading2 text-primary entry-anim">Our Office Location</h1>
            <!-- <p class="para">Equinox Bahari Utama, a fully licensed crewing company in Indonesia, operates offices in both Jakarta and
                Bali, each offering unique advantages to seafarers and clients.</p> -->
        </div>

        <div class="office-row entry-anim">
            <div class="office-col bg-primary">
                <div class="office-content">
                    <h1 class="heading1 text-light">Jakarta <span class="text-third">Office</span></h1>
                    <ul>
                        <li><strong class="text-third">Strategic Position:</strong> <br>Situated in Indonesia's capital,
                            the Jakarta
                            office
                            is at the heart of
                            the nation's maritime industry, providing easy access to major shipping companies and
                            regulatory bodies.</li>
                        <li><strong class="text-third">Comprehensive Services:</strong> <br>As the head office, it
                            offers a full range
                            of
                            services, including
                            recruitment, training, and crew management, ensuring efficient operations and support
                            for
                            seafarers.</li>
                        <li><strong class="text-third">Professional Network:</strong> <br>Proximity to various maritime
                            organizations
                            and
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
        <div class="office-row entry-anim">

            <div class="office-col">
                <?php include 'components/bali-office-slider.php' ?>
            </div>
            <div class="office-col bg-secondary">
                <div class="office-content">
                    <h1 class="heading1 text-light">Bali <span class="text-primary">Office</span></h1>

                    <ul>
                        <li><strong class="text-primary">Regional Accessibility:</strong><br>The Bali office caters to
                            seafarers in the
                            eastern
                            regions of Indonesia, making it convenient for local applicants to access recruitment
                            and
                            training services.</li>
                        <li><strong class="text-primary">Focused Recruitment:</strong> <br>Specializes in conducting
                            walk-in interviews
                            and
                            onboarding processes, streamlining the hiring experience for candidates.</li>
                        <li><strong class="text-primary">Cultural Hub:</strong><br>Cultural Hub: Located in a major
                            tourist destination,
                            the
                            Bali
                            office benefits from a rich cultural environment, enhancing the hospitality training
                            provided to cruise ship crew members.</li>
                    </ul>

                    <h2><strong class="text-primary">Location:</strong> Gedung MNC Vision Lt.3, Denpasar, Bali.</h2>
                    <br>
                    <a class="flex" href="https://maps.app.goo.gl/3VLwJuq5K7MGCEc29"><i data-feather="map-pin"></i>Open
                        map</a>
                </div>
            </div>
        </div>
    </section>
    <!-- our offices -->


    <!-- latest news -->
    <section class="news entry-anim">
        <h1 class="heading2 text-primary">Our Blog</h1>
        <?php include 'components/news-slider.php' ?>

    </section>
    <!-- latest news -->



    <!-- footer -->
    <?php include 'components/footer.php' ?>
    <!-- footer -->


    <!-- js -->

    <script src="js/app.js" defer></script>
    <script> feather.replace();</script>
    <!-- js -->
</body>

</html>