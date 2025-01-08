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
        <!-- <div class="overview-gradient"></div> -->
        <div class="overview-row">
            <div class="overview-col animate">
                <h1 class="heading1 text-primary">The <span class=" text-secondary">Equinox</span>
                    <span class="text-third">Companies</span>
                </h1>
                <p class="">Founded in 2001, Equinox is a group of companies owned by PSU and include a leading fully
                    licensed shipowner, ship manager, port agency and crewing manager in Indonesia providing services
                    for international shipowners.
                    Equinox offers end to end maritime solutions and services tailored to the specific requirements of
                    its clients.
                    <br>
                    <br>Putting safety first, Equinox operates to International Standards servicing customers across the
                    globe (from Japan to Singapore and from Norway to the USA).
                    Equinox has earned its excellent reputation both internationally and in Indonesia as a quality
                    shipowner and for its reliable shipping services.
                </p>
                <div class="overview-brands">
                    <img src="img/logo/logo1.png" alt="">
                    <!-- <img src="img/logo/logo1.png" alt=""> -->
                    <img src="img/assets/brands-logo/psu-logo.png" alt="">
                    <!-- <img src="img/logo/logo1.png" alt=""> -->
                </div>
            </div>
            <img src="img/ships/psu-1.jpg" alt="" class="overview-bg animate">

        </div>
    </section>
    <!-- overview -->
    <!-- overview -->
    <section class="about-overview">
        <!-- <div class="overview-gradient"></div> -->
        <div class="overview-row">
            <img src="img/assets/overview.png" alt="" class="overview-bg animate">
            <div class="overview-col animate">
                <h1 class="heading1 text-primary">Equinox <span class=" text-secondary">sentra</span>
                    <span class="text-third">bahari</span>
                </h1>
                <p class="">We are committed to achieving the highest standards in all levels of our operations by
                    regular audits and training of our employees. Particular emphasis is placed on providing a safe
                    working environment and the consistent application of safe working practices to ensure: Safety of
                    life
                    <br>
                    <br>Safety of cargo
                    Safety of property and assets
                    Protection and improvement of the environment

                </p>
                <div class="overview-brands">
                    <img src="img/logo/logo1.png" alt="">
                    <!-- <img src="img/logo/logo1.png" alt=""> -->
                    <img src="img/assets/brands-logo/psu-logo.png" alt="">
                    <!-- <img src="img/logo/logo1.png" alt=""> -->
                </div>
            </div>
        </div>
    </section>
    <!-- overview -->

    <!-- psu group -->
     <section class="psu-group">
        <h1 class="heading1 text-center text-primary">The PSU Group</h1>
        <div class="psu-row">
            <div class="psu-card">
                <img src="img/logo/logo2.jpeg" alt="">
                <div class="psu-card-content">
                    <h2>Perusahaan Pelayaran Equinox</h2>
                    <p>PT. Perusahaan Pelayaran Equinox was established in 2001 as an Indonesian national shipping...</p>
                    <a href="https://equinoxshipping.co.id/company/ship-management-services/overview">Read More</a>
                </div>
            </div>
            <div class="psu-card">
                <img src="img/logo/logo2.jpeg" alt="">
                <div class="psu-card-content">
                    <h2>Equinox Bahari Utama</h2>
                    <p>PT. Equinox Bahari Utama is a fully licensed crewing company that employs highly competent Indonesian crew...</p>
                    <a href="https://equinoxshipping.co.id/company/ship-management-services/overview">Read More</a>
                </div>
            </div>
            <div class="psu-card">
                <img src="img/logo/logo2.jpeg" alt="">
                <div class="psu-card-content">
                    <h2>Equinox Sentra Bahari</h2>
                    <p>PT. Equinox Sentra Bahari is one of Indonesia's agency companies in the port and shipping sector,...</p>
                    <a href="https://equinoxshipping.co.id/company/shipping-agency-services/overview">Read More</a>
                </div>
            </div>
        </div>
     </section>
    <!-- psu group -->

    <!-- company profile video -->
    <div class="company-vid animate">
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
                <img class="leader-image" src="img/team/TSCC_.jpg" alt="">
                <div class="leader-info1">
                    <h2 class="leader-name">Timothy S.C. Cottew</h2>
                    <h4 class="leader-position">Founder & Owner</h4>
                    <a href="mailto:tsccottew@psu.co.id">tsccottew@psu.co.id</a>
                </div>
            </div>
            <div class="leader-col1">
                <div class="leader-gradient"></div>
                <img class="leader-image" src="img/team/IY_.jpg" alt="">
                <div class="leader-info1">
                    <h2 class="leader-name">Indah Yulianti</h2>
                    <h4 class="leader-position">Group HR, Corporate & Legal Director</h4>
                    <a href="mailto:indah@psu.co.id">indah@psu.co.id</a>
                </div>
            </div>
            <div class="leader-col1">
                <div class="leader-gradient"></div>
                <img class="leader-image" src="img/team/AR_.jpg" alt="">
                <div class="leader-info1">
                    <h2 class="leader-name">Ahmad Rizky</h2>
                    <h4 class="leader-position">Group Strategic & Planning</h4>
                    <a href="mailto:rizky@psu.co.id">rizky@psu.co.id</a>
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
                <img class="leader-image" src="img/team/ivan_.jpg" alt="">
                <div class="leader-info">
                    <h2 class="leader-name">Ivan Pereira</h2>
                    <h4 class="leader-position">Cruise General Manager</h4>
                    <a href="mailto:tsccottew@psu.co.id">tsccottew@psu.co.id</a>
                </div>
            </div>
            <div class="leader-col">
                <div class="leader-gradient"></div>
                <img class="leader-image" src="img/team/toar_.png" alt="">
                <div class="leader-info">
                    <h2 class="leader-name">Toar B Sumanti</h2>
                    <h4 class="leader-position">Cruise Manager</h4>
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
            <!-- <div class="leader-col">
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
            </div> -->
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



    <!-- our licenses -->
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