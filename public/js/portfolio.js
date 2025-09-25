// Sidebar Toggle
const sidebar = document.getElementById("sidebar");
const sidebarBtn = document.querySelector(".sidebar-btn");

if (sidebar && sidebarBtn) {
    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("active");
    });
}


// Fade-in on Scroll
const fadeElements = document.querySelectorAll(".fade-in");

if (fadeElements.length > 0) {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        },
        { threshold: 0.2 }
    );

    fadeElements.forEach((el) => observer.observe(el));
}


// Theme Toggle (Dark/Light Mode)
const themeToggle = document.getElementById("theme-toggle");

if (themeToggle) {
    themeToggle.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");

        // Optional: Save theme preference sa localStorage
        if (document.body.classList.contains("dark-mode")) {
            localStorage.setItem("theme", "dark");
        } else {
            localStorage.setItem("theme", "light");
        }
    });

    // Apply saved theme on load
    window.addEventListener("DOMContentLoaded", () => {
        const savedTheme = localStorage.getItem("theme");
        if (savedTheme === "dark") {
            document.body.classList.add("dark-mode");
        }
    });
}

