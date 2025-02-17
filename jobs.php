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

    <!-- jobs landing page -->
    <?php include 'components/jobs-slide.php' ?>
    <!-- jobs landing page -->

    <!-- royal brands logo  -->
     <div class="partner">
        <h1 class="text-center text-primary">OFFICIAL HIRING PARTNER OF ROYAL CARIBBEAN GROUP</h1>
        <div class="partner-row">
            <img src="img/assets/brands-logo/royal-logo.png" alt="">
            <img src="img/assets/brands-logo/celebrity-logo.png" alt="">
            <img src="img/assets/brands-logo/tui-logo.png" alt="">
            <img src="img/assets/brands-logo/silversea-logo.png" alt="">
        </div>
     </div>
    <!-- royal brands logo  -->

    <!-- job dashobard -->
     <div class="jobs-dash">
        <div class="job-dash-filter">
            <h1>Department</h1>
            <ul>
                <li>Hotel Department</li>
                <li>Marine Department</li>
            </ul>
            <ul>
                <li>positions</li>
                <li>positions</li>
                <li>positions</li>
                <li>positions</li>
                <li>positions</li>
                <li>positions</li>
                <li>positions</li>
                <li>positions</li>
                <li>positions</li>
                <li>positions</li>
                <li>positions</li>
                <li>positions</li>
                <li>positions</li>
                <li>positions</li>
            </ul>
        </div>
        <div class="job-dash-grid">

            <div class="job-item">
                <h4 class="job-company">Royal Caribbean</h4>
                <h2 class="job-position">Waiter</h2>
                <p class="job-description">Lorem ipsum dolor sit amet.</p>
                <div class="job-item-cta">
                    <a class="btn" href="">Apply now</a>
                    <a class="btn" href="">See Requirements</a>
                </div>
            </div>

        </div>
     </div>
    <!-- job dashobard -->


    <!-- latest job opening -->
    <div class="job-opening">
        <a class="all-jobs" href="https://jobs.equinoxshipping.co.id/cruise">See All Jobs</a>
        <h1 class="heading2 text-primary text-center">Latest Job Opening</h1>
        <?php include 'components/job-opening.php' ?>
    </div>
    <!-- latest job opening -->

    <!-- allert -->
     
    <!-- allert -->


    <!-- footer -->
    <?php include 'components/footer.php' ?>
    <!-- footer -->


    <!-- js -->

    <script src="js/app.js" defer></script>
    <script> feather.replace();</script>
    <!-- js -->
</body>

</html>