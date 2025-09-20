// Smooth Scroll for Navbar
document.querySelectorAll('.nav-links a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    });
});

// Contact Form Simulation
document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();
    const response = document.getElementById("formResponse");

    if(name && email && message){
        response.textContent = "✅ Thanks " + name + "! Your message has been sent successfully.";
        response.style.color = "green";
        this.reset();
    } else {
        response.textContent = "❌ Please fill all fields.";
        response.style.color = "red";
    }
});
