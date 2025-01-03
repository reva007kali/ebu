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
                <h1 class="heading1">We Help People Achieves <span class="text-secondary">Their Dreams</span></h1>
                <div class="intro-row">
                    <div class="intro-card">
                        <div class="flex data-numbers-container">
                            <h3 class="data-numbers" data-target="3900">4000</h3>
                            <h3>+</h3>
                        </div>
                        <h2>Deployed</h2>
                    </div>
                    <div class="intro-card">
                        <div class="flex data-numbers-container">
                            <h3 class="data-numbers" data-target="32">4000</h3>
                            <h3>+</h3>
                        </div>
                        <h2>Countries</h2>
                    </div>
                    <div class="intro-card">
                        <div class="flex data-numbers-container">
                            <h3 class="data-numbers" data-target="42">4000</h3>
                            <h3>+</h3>
                        </div>
                        <h2>ships</h2>
                    </div>
                </div>
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
        <h1 class="heading2 text-light">Crew departure statistics <span class="text-third">by
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




    <!-- testimonial -->
    <div class="testimonial-container">
        <?php include 'components/testimonial.php' ?>
    </div>
    <!-- testimonial -->

    <!-- our offices -->
    <section class="office">
        <div class="office-heading">
            <h1 class="heading2 text-primary">Our Office Location</h1>
            <p class="para">Equinox Bahari Utama, a fully licensed crewing company in Indonesia, operates offices in both Jakarta and
                Bali, each offering unique advantages to seafarers and clients.</p>
        </div>

        <div class="office-row">
            <div class="office-col">
                <div class="office-content">
                    <h1>Jakarta Office</h1>
                    <h2><strong>Location:</strong> Globe Building, 4th-5th Floor, Jl. Warung Jati Barat Kav. 31-33,
                        South Jakarta, 12740 Indonesia.</h2>
                    <ul>
                        <li><strong>Strategic Position:</strong> Situated in Indonesia's capital, the Jakarta office is at the heart of
                            the nation's maritime industry, providing easy access to major shipping companies and
                            regulatory bodies.</li>
                        <li><strong>Comprehensive Services:</strong> As the head office, it offers a full range of services, including
                            recruitment, training, and crew management, ensuring efficient operations and support for
                            seafarers.</li>
                        <li><strong>Professional Network:</strong> Proximity to various maritime organizations and institutions
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
                        <li><strong>Regional Accessibility:</strong> The Bali office caters to seafarers in the eastern regions of Indonesia, making it convenient for local applicants to access recruitment and training services.</li>
                        <li><strong>Focused Recruitment:</strong> Specializes in conducting walk-in interviews and onboarding processes, streamlining the hiring experience for candidates.</li>
                        <li><strong>Cultural Hub:</strong>Cultural Hub: Located in a major tourist destination, the Bali office benefits from a rich cultural environment, enhancing the hospitality training provided to cruise ship crew members.</li>
                    </ul>
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
        <h1 class="heading2 text-third">Our latest news</h1>
        <?php include 'components/news-slider.php' ?>

    </section>
    <!-- latest news -->

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



    <!-- footer -->
    <?php include 'components/footer.php' ?>
    <!-- footer -->


    <!-- js -->

    <script src="js/app.js" defer></script>
    <script> feather.replace();</script>
    <!-- js -->
</body>

</html>