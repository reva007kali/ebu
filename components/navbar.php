<?php
// Get the current path from the URL
$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>
<div class="navbar">
    <div class="navbar-logo">
        <a href="/"><img class="navbar-logo logo-l logo-round" src="img/logo/logo2.jpeg" alt=""></a>
    </div>
    <div class="navbar-menu">
        <a class="navbar-link <?= $currentPath === '/' ? 'active' : '' ?>" href="/">Home</a>
        <a class="navbar-link <?= $currentPath === '/about' ? 'active' : '' ?>" href="/about">About us</a>
        <a class="navbar-link <?= $currentPath === '/jobs' ? 'active' : '' ?>" href="/jobs">Job Portal</a>
        <a class="navbar-link <?= $currentPath === '/crewing-services' ? 'active' : '' ?>"
            href="/crewing-services">Crewing Services</a>
        <a class="navbar-link <?= $currentPath === '/contact' ? 'active' : '' ?>" href="/contact">Contact us</a>
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