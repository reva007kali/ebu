// navbar scroll effect
let lastScrollY = 0;
const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {
  const currentScrollY = window.scrollY;

  if (currentScrollY > lastScrollY) {
    // Scrolling down
    navbar.style.top = "-100px";
  } else {
    // Scrolling up
    navbar.style.top = "0";
  }

  lastScrollY = currentScrollY;
});

// depth shadow scroll effect
const boxes = document.querySelectorAll(".depth-shadow");

// Create an IntersectionObserver instance
const observerShadow = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("in-viewport"); 
      } else {
        entry.target.classList.remove("in-viewport");
      }
    });
  },
  {
    threshold: 0.7, 
  }
);

// Observe each box
boxes.forEach((box) => observerShadow.observe(box));

// depth shadow scroll effect

// dark mode
document.addEventListener("DOMContentLoaded", () => {
  const checkbox = document.getElementById("dm-checkbox");
  const root = document.documentElement;
  const savedTheme = localStorage.getItem("theme");
  if (savedTheme === "dark") {
    root.classList.add("dark");
    checkbox.checked = true;
  }
  checkbox.addEventListener("change", () => {
    if (checkbox.checked) {
      root.classList.add("dark");
      localStorage.setItem("theme", "dark");
    } else {
      root.classList.remove("dark");
      localStorage.setItem("theme", "light");
    }
  });
});
// dark mode

// navbar active class
document.addEventListener("DOMContentLoaded", () => {
  // Get all navbar links
  const navbarLinks = document.querySelectorAll(".navbar-link");
  // Get the current page's URL path
  const currentPath = window.location.pathname.split("/").pop();

  // Loop through each link and check if it matches the current path
  navbarLinks.forEach((link) => {
    if (link.getAttribute("href") === currentPath) {
      link.classList.add("active");
    }
  });
});
// navbar active class

// slide up animation
document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(".animate");

  // Intersection Observer to watch for visibility
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show"); // Add the show class when in view
        observer.unobserve(entry.target); // Stop observing once shown
      }
    });
  });

  // Attach observer to all animate elements
  elements.forEach((el) => observer.observe(el));
});

// animation

// numbers animation count
function animateNumbers(element, target, duration) {
  const start = 0;
  const increment = target / (duration / 16); // 16ms per frame
  let current = start;

  function updateNumber() {
    current += increment;
    if (current >= target) {
      element.textContent = target; // Ensure exact target value at the end
    } else {
      element.textContent = Math.floor(current); // Update number
      requestAnimationFrame(updateNumber); // Continue animation
    }
  }

  updateNumber();
}

// Observer callback for when elements with .data-numbers enter the viewport
function onIntersection(entries, observer) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const numbers = entry.target.querySelectorAll(".data-numbers");
      numbers.forEach((numElement) => {
        const target = parseInt(numElement.getAttribute("data-target"), 10); // Get target from data attribute
        const duration =
          parseInt(numElement.getAttribute("data-duration"), 10) || 4000; // Optional duration, default 2s

        if (!isNaN(target)) {
          animateNumbers(numElement, target, duration);
        }
      });

      observer.unobserve(entry.target); // Stop observing after animation is triggered
    }
  });
}

// Set up Intersection Observer
document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver(onIntersection, {
    threshold: 0.5, // Trigger when 50% of the container is visible
  });

  const containers = document.querySelectorAll(".data-numbers-container"); // Containers with .data-numbers elements
  containers.forEach((container) => {
    observer.observe(container);
  });
});

function easeOutQuad(t) {
  return t * (2 - t);
}

function animateNumbers(element, target, duration) {
  const start = 0;
  const startTime = performance.now();

  function updateNumber(currentTime) {
    const elapsedTime = currentTime - startTime;
    const progress = Math.min(elapsedTime / duration, 1); // Clamp between 0 and 1
    const easedProgress = easeOutQuad(progress);

    const value = Math.floor(start + (target - start) * easedProgress);
    element.textContent = value;

    if (progress < 1) {
      requestAnimationFrame(updateNumber);
    }
  }

  requestAnimationFrame(updateNumber);
}

// SWIPER TEST

// wwd accordion
function toggleAccordion(header) {
  const content = header.nextElementSibling;
  const isOpen = content.style.display === "block";

  // Close all other accordion items
  document.querySelectorAll(".accordion-content").forEach((item) => {
    item.style.display = "none";
  });

  // Toggle the clicked accordion item
  content.style.display = isOpen ? "none" : "block";
}

// wwd accordion

// wwd modal
function openWwdModal(type) {
  const modal = document.getElementById("wwd-modal");
  modal.style.display = "flex"; // Show modal

  // Hide all modal sections first
  document.querySelectorAll(".wwd-modal-section").forEach((section) => {
    section.style.display = "none";
  });

  // Show the appropriate section based on the type
  if (type === "hotel") {
    document.getElementById("hotel-content").style.display = "block";
  } else if (type === "marine") {
    document.getElementById("marine-content").style.display = "block";
  }
}

function closeWwdModal() {
  const modal = document.getElementById("wwd-modal");
  modal.style.display = "none"; // Hide modal
}

// Optional: Close modal when clicking outside the content
document.getElementById("wwd-modal").addEventListener("click", (e) => {
  if (e.target === e.currentTarget) {
    closeWwdModal();
  }
});

// wwd modal
