<!-- Splash Screen -->
<div id="splash-screen">
  <img class="logo" src="img/logo/logo1.png" alt="">
  <div class="splash-content">
    <div class="loader-card">
      <div class="loader">
        <p>loading</p>
        <div class="words">
          <span class="word">Wait</span>
          <span class="word">Please</span>
          <span class="word">Wait</span>
          <span class="word">Please</span>
          <span class="word">Wait</span>
        </div>
      </div>
    </div>

  </div>
</div>
<style>
  /* From Uiverse.io by kennyotsu */
  .loader-card {
    /* color used to softly clip top and bottom of the .words container */
    padding: 1rem 2rem;
    border-radius: 1.25rem;
  }

  .loader {
    color: rgb(124, 124, 124);
    font-family: "Poppins", sans-serif;
    font-weight: 500;
    font-size: 25px;
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    height: 40px;
    padding: 10px 10px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    border-radius: 8px;
  }

  .words {
    overflow: hidden;
    position: relative;
  }

  .words::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(var(--bg-color) 10%,
        transparent 30%,
        transparent 70%,
        var(--bg-color) 90%);
    z-index: 20;
  }

  .word {
    display: block;
    height: 100%;
    padding-left: 6px;
    color: green;
    animation: spin_4991 4s infinite;
  }

  @keyframes spin_4991 {
    10% {
      -webkit-transform: translateY(-102%);
      transform: translateY(-102%);
    }

    25% {
      -webkit-transform: translateY(-100%);
      transform: translateY(-100%);
    }

    35% {
      -webkit-transform: translateY(-202%);
      transform: translateY(-202%);
    }

    50% {
      -webkit-transform: translateY(-200%);
      transform: translateY(-200%);
    }

    60% {
      -webkit-transform: translateY(-302%);
      transform: translateY(-302%);
    }

    75% {
      -webkit-transform: translateY(-300%);
      transform: translateY(-300%);
    }

    85% {
      -webkit-transform: translateY(-402%);
      transform: translateY(-402%);
    }

    100% {
      -webkit-transform: translateY(-400%);
      transform: translateY(-400%);
    }
  }
</style>

<script>
  // splash screen
  document.addEventListener("DOMContentLoaded", () => {
    const splashScreen = document.getElementById("splash-screen");

    // Listen for the window load event
    window.addEventListener("load", () => {
      // Add a small delay to show the splash screen for a bit longer
      setTimeout(() => {
        splashScreen.style.display = "none"; // Hide splash screen
      }, 1000); // 1 second delay (optional)
    });
  });

  // splash screen
</script>