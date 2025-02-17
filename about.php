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
    <section class="about-overview entry-anim">
        <!-- <div class="overview-gradient"></div> -->
        <div class="overview-row ">
            <div class="overview-col ">
                <h1 class="heading1 text-primary">EQUINOX <span class=" text-secondary">SHIPPING</span>
                    <span class="text-third">GROUP</span>
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
            <img src="img/assets/test4.png" alt="" class="overview-bg entry-anim">

        </div>
    </section>
    <!-- overview -->
    <!-- overview -->
    <section class="about-overview entry-anim">
        <!-- <div class="overview-gradient"></div> -->
        <div class="overview-row ">
            <img src="img/ships/psu-1.jpg" alt="" class="overview-bg entry-anim">
            <div class="overview-col">
                <h1 class="heading1 text-primary">PT.EQUINOX <span class=" text-secondary">BAHARI</span>
                    <span class="text-third">UTAMA</span>
                </h1>
                <p class="">Cruise (PT.EBU) is the crewing unit of Equinox Shipping Group, which hires for cruise lines.
                    PT EBU is one of the top crewing agencies in Indonesia and has been the official hiring partner for
                    the Royal Caribbean Group since 2019. PT EBU boasts of deploying 4000+ new hires from Indonesia
                    onboard Royal Caribbean Group ships and will continue to do so in the future. It’s expertise lies in
                    recruiting top talent for the Hotel and Marine departments, assisting them with the required
                    documentation and visa processes, and finally ensuring they are deployed in a timely manner in
                    coordination with the client's scheduling and crew readiness team
                    <br>
                    <br>

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

    <!-- our services -->
    <div class="services entry-anim">
        <h1 class="heading2 text-third">Equinox Shipping Group</h1>
        <div class="services-row">
            <?php include 'components/ebu-slide.php' ?>
        </div>
    </div>
    <!-- our services -->

    <!-- psu group -->
    <!-- <section class="psu-group">
        <h1 class="heading1 text-center text-light">Equinox Shipping Group</h1>
        <div class="psu-row">
            <div class="psu-card">
                <img src="img/logo/logo2.jpeg" alt="">
                <div class="psu-card-content">
                    <h2>Ship Management Services</h2>
                    <p>PT. Perusahaan Pelayaran Equinox was established in 2001 as an Indonesian national shipping...
                    </p>
                    <a href="https://equinoxshipping.co.id/company/ship-management-services/overview">Read More</a>
                </div>
            </div>
            <div class="psu-card">
                <img src="img/logo/logo2.jpeg" alt="">
                <div class="psu-card-content">
                    <h2>Crew Management Services</h2>
                    <p>PT. Equinox Bahari Utama is a fully licensed crewing company that employs highly competent
                        Indonesian crew...</p>
                    <a href="https://equinoxshipping.co.id/company/ship-management-services/overview">Read More</a>
                </div>
            </div>
            <div class="psu-card">
                <img src="img/logo/logo2.jpeg" alt="">
                <div class="psu-card-content">
                    <h2>Equinox Sentra Bahari</h2>
                    <p>PT. Equinox Sentra Bahari is one of Indonesia's agency companies in the port and shipping
                        sector,...</p>
                    <a href="https://equinoxshipping.co.id/company/shipping-agency-services/overview">Read More</a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- psu group -->

    <!-- company profile video -->
    <div class="company-vid entry-anim">
        <img src="img/assets/phone.png" alt="">
        <video controls muted poster="img/assets/equinox.jpg" src="img/video/ebu.mov"></video>
    </div>
    <!-- company profile video -->

    <img src="img/assets/milestone3.png" alt="" class="milestone-img entry-anim">


    <!-- milestone -->
    <!-- <section class="milestone">
        <img class="milestone-bg" src="img/ships/3.jpg" alt="">
        <h1 class="text-light text-center heading1">Our Milestone</h1>
        <div class="milestone-row">
            <div class="milestone-card">
                <h1>2019</h1>
                <p>Become the hiring partner of Royal Caribbean Group</p>
                <div class="milestone-bullet-bottom"></div>
            </div>
            <div class="milestone-empty"></div>
            <div class="milestone-card">
                <h1>2020</h1>
                <p>We Deployed for a total <strong>3100</strong> Crew Members</p>
                <div class="milestone-bullet-bottom"></div>
            </div>
            <div class="milestone-empty"></div>
            <div class="milestone-card">
                <h1>2021</h1>
                <p>We Deployed for a total <strong>2700</strong> Crew Members</p>
                <div class="milestone-bullet-bottom"></div>
                
            </div>
            <div class="milestone-empty"></div>
        </div>
        <div class="milestone-line">

        </div>
        <div class="milestone-row2">
            <div class="milestone-empty"></div>
            <div class="milestone-card">
                <h1>2022</h1>
                <p>We Deployed for a total <strong>3400</strong> Crew Members</p>
                <div class="milestone-bullet-top"></div>
            </div>
            <div class="milestone-empty"></div>
            <div class="milestone-card">
                <h1>2023</h1>
                <p>We Deployed for a total <strong>3770</strong> Crew Members</p>
                <div class="milestone-bullet-top"></div>
            </div>
            <div class="milestone-empty"></div>
            <div class="milestone-card">
                <h1>2024</h1>
                <p>We Deployed for a total 3200 Crew Members</p>
                <div class="milestone-bullet-top"></div>
            </div>

        </div>
    </section> -->
    <!-- milestone -->



    <!-- leader -->
    <section class="leader entry-anim">
        <h1 class="heading1 text-center text-primary">Board of</span> <span class="text-third">Director</span></h1>
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

    <!-- ivan pereira -->
    <section class="ivan entry-anim">
        <!-- <h1 class="heading2 text-center text-primary">Cruise Department General Manager</h1> -->
        <div class="ivan-row">

            <div class="ivan-col">
                <h1 class="heading1 text-light">Ivan <span class="text-third">Pereira</span></h1>
                <h2 class="text-secondary">General Manager, Cruise Department
                </h2>
                <p>With 25 years in the cruise industry, including 15 years in food service onboard Royal Caribbean
                    Group (RCG) ships, I have dedicated my career to talent acquisition and helping Indonesians achieve
                    their dreams of working on cruise ships.

                    <br><br>Throughout my career, I have served as a Lead Trainer, Global Recruiter for RCG, and Cruise
                    Department Manager for RCG’s official hiring partner in Indonesia. I have also led the cruise
                    department for MSC Cruises, Explora Journeys, and Scylla AG River Cruises hiring partner in
                    Indonesia.
                    <br><br>My expertise lies in managing high-volume hiring processes, from sourcing to deploying
                    high-quality candidates onboard. I am passionate about strategic planning to ensure efficient and
                    effective recruitment operations for contemporary, luxury, and river cruise lines. My deep
                    understanding of the industry allows me to identify and recruit top talent.
                    <br><br>I am committed to continuing my mission of helping Indonesians secure rewarding careers on
                    cruise ships, both now and in the future. My passion for this work drives me to make a positive
                    impact on the lives of many, ensuring they have the opportunity to thrive in the cruise industry.

                </p>
                <a href="https://www.linkedin.com/in/ivan-pereira-4456a5196/"><i data-feather="linkedin"></i>Visit
                    LinkedIn</a>
            </div>
            <img class="ivan-bg" src="img/team/ivanpereira.png" alt="">
        </div>
    </section>
    <!-- ivan pereira -->

    <!-- leader -->
    <section class="leader2 entry-anim">
        <h1 class="heading1 text-left text-primary">Cruise <span class="text-light">Department</span> <span
                class="text-primary">Leader</span></h1>
        <div class="leader-col">
            <div class="leader-gradient"></div>
            <img class="leader-image" src="img/team/toar_.png" alt="">
            <div class="leader-info">
                <h2 class="leader-name">Toar B Sumanti</h2>
                <h4 class="leader-position">Cruise Department Manager</h4>
                <a href="https://www.linkedin.com/in/toar-sumanti-62226510a/"><i data-feather="linkedin"></i>Visit
                    LinkedIn</a>
            </div>
        </div>
        <div class="leader-row">
            <div class="leader-col">
                <div class="leader-gradient"></div>
                <img class="leader-image" src="img/team/agni.jpeg" alt="">
                <div class="leader-info">
                    <h2 class="leader-name">Agni Aditya</h2>
                    <h4 class="leader-position">Onboarding Section Head</h4>
                    <a href="https://www.linkedin.com/in/agni-aditya-bab67819a/"><i data-feather="linkedin"></i>Visit
                        LinkedIn</a>
                </div>
            </div>
            <div class="leader-col">
                <div class="leader-gradient"></div>
                <img class="leader-image" src="img/team/raissas.jpeg" alt="">
                <div class="leader-info">
                    <h2 class="leader-name">Raissa</h2>
                    <h4 class="leader-position">Recruitment Section Head
                    </h4>
                    <a href="https://www.linkedin.com/in/raissa-hummaira-643aa7141/"><i
                            data-feather="linkedin"></i>Visit LinkedIn</a>
                </div>
            </div>
            <div class="leader-col">
                <div class="leader-gradient"></div>
                <img class="leader-image" src="img/team/ruth.jpeg" alt="">
                <div class="leader-info">
                    <h2 class="leader-name">Ruth</h2>
                    <h4 class="leader-position">Visa Section Head
                    </h4>
                    <a href="https://www.linkedin.com/in/ruth-aprillia/"><i data-feather="linkedin"></i>Visit
                        LinkedIn</a>
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
    <div class="vm entry-anim">
        <div class="vm-row">
            <div class="vm-col">
                <img src="img/vmv/vision.jpg" alt="">
            </div>
            <div class="vm-col">
                <!-- <img src="img/ships/wonderots.webp" alt=""> -->
                <div class="vision-content text-color">
                    <h2 class="heading1 text-light">Our Vision</h2>
                    <p class="text-light">"We strive to be amongst the leading Ship Managers in South-East Asia by
                        2027."</p>
                </div>
            </div>
        </div>
        <div class="vm-row">
            <div class="vm-col">
                <!-- <img src="img/ships/wonderots.webp" alt=""> -->
                <div class="vision-content text-color">
                    <h2 class="heading1 text-light">Our Mission</h2>
                    <ul>
                        <li>We aim to continue to build long term collaboration with our clients through trust and
                            confidence so as to ensure sustainable growth through efficient, safe operations centered
                            around HSSE excellence.</li>
                        <li><strong>HSSE excellence</strong> is a commitment to continuous improvement, proactive risk
                            management, adherence to industry best practices, compliance with relevant regulations, and
                            a strong safety culture that involves all levels of the organization. We aim to create a
                            workplace where the health and well-being of individuals are paramount, and environmental
                            sustainability is a core consideration in all operations.</li>
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
    <div class="values entry-anim">
        <h1 class="heading1 text-center text-light">Our Values</h1>o
        <div class="value-row">


            <div class="value-col">
                <img class="value-icon" src="img/icon/shield.gif" alt="">
                <div class="value-content">
                    <h1>Safety & Environtment</h1>
                    <p>We strive towards zero incidents for our people, the well-being of crew members, property, and
                        sustainability environment compliance.</p>
                </div>
            </div>

            <div class="value-col">
                <img class="value-icon" src="img/icon/justice.gif" alt="">
                <div class="value-content">
                    <h1>Transparency</h1>
                    <p>We act with ethical integrity and full open transparency throughout to build trust and confidence
                        with our customers. Seek and respond to feedback from stakeholders to continuously improve
                        business practices.</p>
                </div>
            </div>

            <div class="value-col">
                <img class="value-icon" src="img/icon/handshake.gif" alt="">
                <div class="value-content">
                    <h1>Relationships</h1>
                    <p>We have close interaction with our customers, stakeholders and staff inclusively and
                        professionally.</p>
                </div>
            </div>

            <div class="value-col">
                <img class="value-icon" src="img/icon/badge.gif" alt="">
                <div class="value-content">
                    <h1>Quality</h1>
                    <p> We ensure quality in everything we do from the top down.</p>
                </div>
            </div>
            <!-- 
            <div class="value-col">
                <img class="value-icon" src="img/icon/innovation.gif" alt="">
                <div class="value-content">
                    <h1>Innovation</h1>
                    <p>We embrace creativity and forward-thinking solutions to meet the evolving demands of the maritime
                        and cruise industries.</p>
                </div>
            </div> -->
            <!-- 
            <div class="value-col">
                <img class="value-icon" src="img/icon/diversity.gif" alt="">
                <div class="value-content">
                    <h1>Diversity and Inclusion</h1>
                    <p>We celebrate diversity and promote an inclusive environment where people of all backgrounds can
                        thrive and succeed.</p>
                </div>
            </div> -->


        </div>
    </div>
    <!-- our values -->



    <!-- our licenses -->
    <div class="licenses entry-anim">
        <h1 class="heading2 text-center text-primary">Our Licenses</h1>
        <div class="licenses-row">
            <?php include 'components/licenses-slide.php' ?>
        </div>
    </div>
    <!-- our services -->


    <!-- licenses -->
    <?php include 'components/licenses.php' ?>
    <!-- licenses -->


    <?php include 'components/footer.php' ?>

    <!-- js -->
    <script src="js/app.js" defer></script>
    <script> feather.replace();</script>
    <!-- js -->
</body>

</html>