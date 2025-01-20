<div class="hp depth-shadow">
    <img class="rcl-logo animate" src="img/assets/brands-logo/rcl-logo-circle.png" alt="">
    <h1 class="heading1 text-light text-center animate">Offical Hiring Partner Of <br> <span
            class="royal-gradient">Royal Caribbean Group</span>
    </h1>
    <div class="hp-brands flex animate depth-shadow">
        <img class="hp-brand-img" src="img/assets/brands-logo/royal-logo.png" alt="">
        <img class="hp-brand-img" src="img/assets/brands-logo/celebrity-logo.png" alt="">
        <img class="hp-brand-img" src="img/assets/brands-logo/silversea-logo.png" alt="">
        <img class="hp-brand-img" src="img/assets/brands-logo/tui-logo.png" alt="">
        <img class="hp-brand-img" src="img/assets/brands-logo/hapag-logo.png" alt="">
    </div>

    <video id="intro-video" src="img/video/icon-intro-video.mp4" muted loop></video>
</div>
<script>
    // Select the video element
    const video = document.getElementById('intro-video');

    // Create an Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                video.play(); // Play video when in view
            } else {
                video.pause(); // Pause video when out of view
            }
        });
    });

    // Observe the video element
    observer.observe(video);
</script>