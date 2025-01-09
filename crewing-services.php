<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crewing Services - Equinox Cruise Department</title>
    <?php include 'components/style-links.php' ?>
</head>

<body>

    <?php include 'components/splashscreen.php' ?>

    <!-- NAVBAR -->
    <?php include 'components/navbar.php' ?>
    <!-- NAVBAR -->

    <!-- crewing services hero -->
    <div class="services-hero">
        <h1 class="text-light heading1">Our Crewing Services</h1>
    </div>
    <!-- crewing services hero -->

    <!-- recruitment section -->
    <section class="recruitment" id="recruitment">
        <div class="recruitment-row">
            <div class="recruitment-col">
                <div class="recruitment-content">
                    <h1>Recruitment Service</h1>
                    <p>We specialize in sourcing and hiring skilled candidates for various positions in the cruise
                        industry, ensuring the perfect match for both employers and job seekers. From hospitality and
                        culinary roles to technical and marine positions, we provide tailored recruitment solutions to
                        meet the unique demands of cruise operations. Our goal is to streamline the hiring process,
                        connect top talent with world-class opportunities, and contribute to the success of both
                        candidates and employers in this dynamic industry.</p>
                    <a href="">Contact our recruitment team</a>
                </div>
            </div>
            <div class="recruitment-col">
                <img src="img/offices/bali3.jpg" alt="">
            </div>
        </div>


        <div class="recruitment-row">
            <div class="recruitment-col">
                <img src="img/offices/bali4.jpg" alt="">
            </div>
            <div class="recruitment-col">
                <div class="recruitment-content">
                    <h1>Document Assistance</h1>
                    <p>We provide comprehensive support with document processing to ensure a smooth journey for
                        candidates entering the cruise industry. Our services include visa assistance, work permits, and
                        other essential documentation required for deployment. With our expertise, we help simplify the
                        process, ensuring candidates meet all legal and administrative requirements. Our goal is to make
                        the transition seamless, allowing candidates to focus on their exciting new opportunities.</p>
                    <a href="">Contact our Document Assistance team</a>
                </div>
            </div>

        </div>

        <div class="recruitment-row">

            <div class="recruitment-col">
                <div class="recruitment-content">
                    <h1>Deployment Assistance</h1>
                    <p>We provide end-to-end support to ensure a hassle-free deployment process for candidates entering
                        the cruise industry. Our services include visa assistance, work permits, and handling all
                        necessary documentation required for deployment. With our expertise, we simplify complex
                        procedures, ensuring candidates comply with all legal and administrative requirements. Our
                        mission is to make the transition smooth and stress-free, so candidates can focus on their
                        exciting new career opportunities.</p>
                    <a href="">Contact our Deployment Assistance team</a>
                </div>
            </div>

            <div class="recruitment-col">
                <img src="img/offices/bali5.jpg" alt="">
            </div>

        </div>
    </section>
    <!-- recruitment section -->


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