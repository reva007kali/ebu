

<div class="navbar">
    <div class="navbar-logo">
        <a href="/"><img class="navbar-logo logo-l logo-round" src="img/logo/logo2.jpeg" alt=""></a>
    </div>
    <div class="navbar-menu">
        <a class="navbar-link" href="home.php">Home</a>
        <a class="navbar-link" href="about.php">About us</a>
        <a class="navbar-link" href="jobs.php">Job Portal</a>
        <a class="navbar-link" href="crewing-services.php">Crewing Services</a>
        <a class="navbar-link" href="contact.php">Contact us</a>
    </div>
    <div class="navbar-extra">
        <?php include 'dm_button.php' ?>
    </div>
    <i class="hamburger-menu" data-feather="menu" onclick="toggleNavbar()"></i>
</div>

<script>
    // Function to toggle the navbar menu
    function toggleNavbar() {
        const navbarMenu = document.querySelector('.navbar-menu');
        navbarMenu.classList.toggle('active');
    }

</script>