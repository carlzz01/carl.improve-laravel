<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carl Angelo E. Dela Cruz - Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <img src="{{ asset('images/unnamed.jpg') }}" alt="Profile Picture" class="profile-pic">


</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="logo">Carl.dev</div>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero">
        <img src="{{ asset('images/profile.jpg') }}" alt="Profile Picture" class="profile-pic">
        <h1>Carl Angelo E. Dela Cruz</h1>
        <h2>Full Stack Web Developer</h2>
        <p class="tagline">Passionate web developer with 5+ years of experience...</p>
        <a href="#contact" class="btn">Hire Me</a>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="section">
        <h2>About Me</h2>
        <p>
            I am a passionate full-stack developer who loves building web apps and solving problems.
            Skilled in Laravel, PHP, JavaScript, and modern frameworks. 
        </p>
    </section>

    <!-- SKILLS SECTION -->
    <section id="skills" class="section">
        <h2>Skills</h2>
        <div class="skills-container">
            <div class="skill-card">Laravel</div>
            <div class="skill-card">PHP</div>
            <div class="skill-card">JavaScript</div>
            <div class="skill-card">MySQL</div>
            <div class="skill-card">HTML & CSS</div>
            <div class="skill-card">React</div>
        </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section id="projects" class="section">
        <h2>Projects</h2>
        <div class="projects-container">
            <div class="project-card">
                <h3>Portfolio Website</h3>
                <p>Responsive personal portfolio built with Laravel and Blade.</p>
            </div>
            <div class="project-card">
                <h3>E-commerce App</h3>
                <p>Online shopping platform with cart & payment integration.</p>
            </div>
            <div class="project-card">
                <h3>Chat Application</h3>
                <p>Real-time chat app using Laravel WebSockets & Vue.js.</p>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="section contact">
        <h2>Contact Me</h2>
        <form id="contactForm">
            <input type="text" id="name" placeholder="Your Name" required>
            <input type="email" id="email" placeholder="Your Email" required>
            <textarea id="message" placeholder="Your Message" required></textarea>
            <button type="submit" class="btn">Send</button>
        </form>
        <p id="formResponse"></p>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>© 2025 Carl Angelo E. Dela Cruz. All rights reserved.</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
