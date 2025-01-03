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
    <title>About | Equinox Cruise Department</title>
    <?php include 'components/style-links.php' ?>
</head>

<body>
    <?php include 'components/splashscreen.php' ?>


    <!-- NAVBAR -->
    <?php include 'components/navbar.php' ?>
    <!-- NAVBAR -->

    <!-- about page -->
    <?php include 'components/about-slider.php' ?>
    <!-- about page -->

    <!-- overview -->
    <section class="about-overview">
        <div class="overview-row">
            <div class="overview-col animate">
                <h1 class="heading2 text-third text-center">Corporate Overview</h1>
                <p class="">At Equinox Bahari Utama, we specialize in delivering exceptional human
                    resource solutions tailored to
                    the
                    maritime and cruise industries. Established with a vision to connect top-tier talent with global
                    opportunities, our Cruise Department has become a trusted partner for one of the world's leading
                    cruise
                    lines.</p>

                <p class=" ">Based in Indonesia, Equinox Bahari Utama leverages its strategic location
                    and
                    deep understanding of the local talent market to supply the cruise industry with exceptional crew
                    members. Our operations adhere to international standards, ensuring that our candidates meet the
                    rigorous demands of life at sea.</p>
                <!-- <div class="overview-cta">
                    <a class="btn" href="">Become a partner</a>
                    <a class="btn" href="">Download our company profile</a>
                </div> -->
                <div class="overview-brands">
                    <img src="img/logo/logo1.png" alt="">
                    <img src="img/logo/logo1.png" alt="">
                    <img src="img/logo/logo1.png" alt="">
                    <img src="img/logo/logo1.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- overview -->

    <!-- company profile video -->
    <div class="company-vid">
        <img src="img/assets/phone.png" alt="">
        <video controls muted poster="img/assets/equinox.jpg" src="img/video/ebu.mov"></video>
    </div>
    <!-- company profile video -->

    <!-- leader -->
    <section class="leader">
        <h1 class="heading1 text-center text-light">Board of Director</h1>
        <div class="leader-row">
            <div class="leader-col1">
                <div class="leader-gradient"></div>
                <img class="leader-image" src="img/team/3.jpg" alt="">
                <div class="leader-info1">
                    <h2 class="leader-name">Budi Santoso</h2>
                    <h4 class="leader-position">Board of Director, Chairman</h4>
                </div>
            </div>
            <div class="leader-col1">
                <div class="leader-gradient"></div>
                <img class="leader-image" src="img/team/1.jpg" alt="">
                <div class="leader-info1">
                    <h2 class="leader-name">Rina Kartika</h2>
                    <h4 class="leader-position">Head of Finance</h4>
                </div>
            </div>
            <div class="leader-col1">
                <div class="leader-gradient"></div>
                <img class="leader-image" src="img/team/2.jpg" alt="">
                <div class="leader-info1">
                    <h2 class="leader-name">Aditya Ramadhan</h2>
                    <h4 class="leader-position">Managing Director</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- leader -->
    <!-- leader -->
    <section class="leader2">
        <h1 class="heading1 text-center text-light">Cruise Division Leader</h1>
        <div class="leader-row">
            <div class="leader-col">
                <div class="leader-gradient"></div>
                <img class="leader-image" src="img/team/4.jpg" alt="">
                <div class="leader-info">
                    <h2 class="leader-name">Dewi Lestari</h2>
                    <h4 class="leader-position">HR & Compliance Officer
                    </h4>
                </div>
            </div>
            <div class="leader-col">
                <div class="leader-gradient"></div>
                <img class="leader-image" src="img/team/5.jpg" alt="">
                <div class="leader-info">
                    <h2 class="leader-name">Riko Wijaya</h2>
                    <h4 class="leader-position">Marketing and Communications Head</h4>
                </div>
            </div>
            <div class="leader-col">
                <div class="leader-gradient"></div>
                <img class="leader-image" src="img/team/6.jpg" alt="">
                <div class="leader-info">
                    <h2 class="leader-name">Siti Nurhaliza </h2>
                    <h4 class="leader-position">Training Coordinator</h4>
                </div>
            </div>
            <div class="leader-col">
                <div class="leader-gradient"></div>
                <img class="leader-image" src="img/team/7.jpg" alt="">
                <div class="leader-info">
                    <h2 class="leader-name">Maya Sari</h2>
                    <h4 class="leader-position">Legal Advisor</h4>
                </div>
            </div>
            <div class="leader-col">
                <div class="leader-gradient"></div>
                <img class="leader-image" src="img/team/8.jpg" alt="">
                <div class="leader-info">
                    <h2 class="leader-name">Denny Kurniawan</h2>
                    <h4 class="leader-position">IT and Systems Manager</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- leader -->

    <!-- vision -->
    <div class="vm">
        <div class="vm-row">
            <div class="vm-col">
                <img src="img/vmv/vision.jpg" alt="">
            </div>
            <div class="vm-col">
                <!-- <img src="img/ships/wonderots.webp" alt=""> -->
                <div class="vision-content text-color">
                    <h2 class="heading1 text-light">Our Vision</h2>
                    <p class="text-light">"To be the leading and most trusted recruitment partner for global maritime
                        and hospitality
                        industries, empowering Indonesian talent to excel on the international stage while upholding the
                        highest standards of professionalism, integrity, and sustainability."</p>
                </div>
            </div>
        </div>
        <div class="vm-row">
            <div class="vm-col">
                <!-- <img src="img/ships/wonderots.webp" alt=""> -->
                <div class="vision-content text-color">
                    <h2 class="heading1 text-light">Our Mission</h2>
                    <ul>
                        <li>Empower Indonesian talent for global maritime and hospitality industries.</li>
                        <li>Deliver excellence in recruitment, training, and placement.</li>
                        <li>Build sustainable partnerships with international organizations.</li>
                        <li>Operate ethically, prioritizing candidate welfare and rights.</li>
                        <li>Innovate and improve recruitment processes with technology.</li>
                    </ul>
                </div>
            </div>
            <div class="vm-col">
                <img src="img/ships/wonderots.webp" alt="">
            </div>
        </div>
    </div>
    <!-- vision -->

    <!-- our values -->
    <div class="values">
        <h1 class="heading1 text-center text-light">Our Values</h1>
        <div class="value-row">

            <div class="value-col">
                <img class="value-icon" src="img/icon/badge.gif" alt="">
                <div class="value-content">
                    <h1>Excellence</h1>
                    <p>We strive for the highest standards in every aspect of our services, ensuring satisfaction for
                        both cruise partners and crew members.</p>
                </div>
            </div>

            <div class="value-col">
                <img class="value-icon" src="img/icon/justice.gif" alt="">
                <div class="value-content">
                    <h1>Integrity</h1>
                    <p>We operate with transparency, honesty, and ethics, building trust and long-term relationships
                        with our partners and clients.</p>
                </div>
            </div>

            <div class="value-col">
                <img class="value-icon" src="img/icon/handshake.gif" alt="">
                <div class="value-content">
                    <h1>Collaboration</h1>
                    <p>We value teamwork and partnerships, fostering strong connections between cruise lines, crew
                        members, and global stakeholders.</p>
                </div>
            </div>

            <div class="value-col">
                <img class="value-icon" src="img/icon/innovation.gif" alt="">
                <div class="value-content">
                    <h1>Innovation</h1>
                    <p>We embrace creativity and forward-thinking solutions to meet the evolving demands of the maritime
                        and cruise industries.</p>
                </div>
            </div>

            <div class="value-col">
                <img class="value-icon" src="img/icon/diversity.gif" alt="">
                <div class="value-content">
                    <h1>Diversity and Inclusion</h1>
                    <p>We celebrate diversity and promote an inclusive environment where people of all backgrounds can
                        thrive and succeed.</p>
                </div>
            </div>

            <div class="value-col">
                <img class="value-icon" src="img/icon/shield.gif" alt="">
                <div class="value-content">
                    <h1>Sustainability</h1>
                    <p>We are dedicated to environmentally responsible practices and contributing to the long-term
                        health of the maritime industry.</p>
                </div>
            </div>

        </div>
    </div>
    <!-- our values -->



    <!-- our services -->
    <div class="licenses">
        <h1 class="heading2 text-center text-primary">Our Licenses</h1>
        <div class="licenses-row">
            <?php include 'components/licenses-slide.php' ?>
        </div>
    </div>
    <!-- our services -->


    <!-- licenses -->
    <?php include 'components/licenses.php' ?>
    <!-- licenses -->



    <!-- our offices -->
    <section class="office">
        <div class="office-heading">
            <h1 class="heading2 text-primary">Our Office Location</h1>
            <p class="para">Equinox Bahari Utama, a fully licensed crewing company in Indonesia, operates offices in
                both Jakarta and
                Bali, each offering unique advantages to seafarers and clients.</p>
        </div>

        <div class="office-row">
            <div class="office-col">
                <div class="office-content">
                    <h1>Jakarta Office</h1>
                    <h2><strong>Location:</strong> Globe Building, 4th-5th Floor, Jl. Warung Jati Barat Kav. 31-33,
                        South Jakarta, 12740 Indonesia.</h2>
                    <ul>
                        <li><strong>Strategic Position:</strong> Situated in Indonesia's capital, the Jakarta office is
                            at the heart of
                            the nation's maritime industry, providing easy access to major shipping companies and
                            regulatory bodies.</li>
                        <li><strong>Comprehensive Services:</strong> As the head office, it offers a full range of
                            services, including
                            recruitment, training, and crew management, ensuring efficient operations and support for
                            seafarers.</li>
                        <li><strong>Professional Network:</strong> Proximity to various maritime organizations and
                            institutions
                            facilitates strong industry connections and opportunities for collaboration.</li>
                    </ul>
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
                    <h2><strong>Location:</strong> Gedung MNC Vision Lt.3, Denpasar, Bali.</h2>
                    <ul>
                        <li><strong>Regional Accessibility:</strong> The Bali office caters to seafarers in the eastern
                            regions of Indonesia, making it convenient for local applicants to access recruitment and
                            training services.</li>
                        <li><strong>Focused Recruitment:</strong> Specializes in conducting walk-in interviews and
                            onboarding processes, streamlining the hiring experience for candidates.</li>
                        <li><strong>Cultural Hub:</strong>Cultural Hub: Located in a major tourist destination, the Bali
                            office benefits from a rich cultural environment, enhancing the hospitality training
                            provided to cruise ship crew members.</li>
                    </ul>
                </div>
            </div>
            <div class="office-col">
                <?php include 'components/bali-office-slider.php' ?>
            </div>
        </div>
    </section>
    <!-- our offices -->


    <!-- contact form -->
    <section class="contact-form">
        <h1 class="heading2 text-center text-light">CONTACT US</h1>
        <div class="contact-form-container">
            <form action="/action_page.php">
                <label for="fname">Full Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Email</label>
                <input type="email" id="lname" name="lastname" placeholder="Your email address..">
                <!-- 
            <label for="country">Country</label>
            <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
            </select> -->

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write your message.."
                    style="height:200px"></textarea>

                <input type="submit" value="Submit">
            </form>
        </div>
    </section>
    <!-- contact form -->

    <?php include 'components/footer.php' ?>

    <!-- js -->
    <script src="js/app.js" defer></script>
    <script> feather.replace();</script>
    <!-- js -->
</body>

</html>