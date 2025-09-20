
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carl’s Portfolio</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f4f4f9;
            color: #333;
        }

        /* Navbar */
        nav {
            background: #0d1117;
            padding: 15px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        nav h2 { color: #fff; margin: 0; }
        nav ul { list-style: none; display: flex; margin: 0; padding: 0; }
        nav ul li { margin-left: 20px; }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            transition: 0.3s;
        }
        nav ul li a:hover { color: #1e90ff; }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            text-align: center;
        }
        .hero img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 4px solid white;
            margin-bottom: 20px;
        }
        .hero h1 { font-size: 2.5rem; margin: 10px 0; }
        .hero h3 { font-weight: bold; margin: 5px 0; }
        .hero p { max-width: 600px; margin: 10px auto; font-size: 1.1rem; }

        .social-links a {
            margin: 0 10px;
            font-size: 1.5rem;
            color: white;
            transition: 0.3s;
        }
        .social-links a:hover { color: #ffcc00; }

        /* About Section */
        #about {
            padding: 80px 20px;
            text-align: center;
            background: #f9f9f9;
        }
        #about h2 { font-size: 2rem; margin-bottom: 20px; }
        .about-card {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 20px rgba(0,0,0,0.1);
        }

        /* Projects Section */
        #projects {
            padding: 80px 20px;
            background: #fff;
            text-align: center;
        }
        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1000px;
            margin: auto;
        }
        .project-card {
            background: #f4f4f9;
            padding: 20px;
            border-radius: 10px;
            transition: 0.3s;
        }
        .project-card:hover { transform: scale(1.05); }

        /* Contact Section */
        #contact {
            padding: 80px 20px;
            background: #f9f9f9;
            text-align: center;
        }
        form {
            max-width: 600px;
            margin: auto;
            display: flex;
            flex-direction: column;
        }
        form input, form textarea {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        form button {
            background: #1e3c72;
            color: white;
            border: none;
            padding: 12px;
            cursor: pointer;
            transition: 0.3s;
        }
        form button:hover { background: #2a5298; }

        /* Scroll-to-top Button */
        #scrollTop {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 12px;
            border: none;
            border-radius: 50%;
            background: #1e3c72;
            color: white;
            font-size: 18px;
            cursor: pointer;
            display: none;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <h2>Carl’s Portfolio</h2>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <img src="your-profile.jpg" alt="Profile">
        <h1>Carl Angelo E. Dela Cruz</h1>
        <h3>Full Stack Web Developer</h3>
        <p>Passionate web developer with 5+ years of experience in creating responsive and dynamic web applications.</p>
        <div class="social-links">
            <a href="https://github.com/yourgithub" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://linkedin.com/in/yourlinkedin" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="mailto:youremail@gmail.com"><i class="fas fa-envelope"></i></a>
        </div>
    </section>

    <!-- About Me -->
    <section id="about">
        <h2>About Me</h2>
        <div class="about-card">
            <p>
                Hi, I’m <b>Carl Angelo E. Dela Cruz</b>, a dedicated Full Stack Web Developer with a passion 
                for building modern, user-friendly, and scalable web applications. 
                I have experience in <b>Laravel, PHP, JavaScript, React, and MySQL</b>. 
                I love solving problems and turning ideas into real projects.
            </p>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects">
        <h2>Projects</h2>
        <div class="project-grid">
            <div class="project-card">Project 1 - Portfolio Website</div>
            <div class="project-card">Project 2 - E-commerce App</div>
            <div class="project-card">Project 3 - Chat Application</div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact">
        <h2>Contact Me</h2>
        <form id="contactForm">
            <input type="text" id="name" placeholder="Your Name" required>
            <input type="email" id="email" placeholder="Your Email" required>
            <textarea id="message" rows="5" placeholder="Your Message"></textarea>
            <button type="submit">Send Message</button>
        </form>
        <p id="formMsg" style="color: green; margin-top: 10px;"></p>
    </section>

    <!-- Scroll to Top -->
    <button id="scrollTop">↑</button>

    <!-- JavaScript -->
    <script>
        // Scroll-to-top button
        const scrollBtn = document.getElementById("scrollTop");
        window.onscroll = () => {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                scrollBtn.style.display = "block";
            } else {
                scrollBtn.style.display = "none";
            }
        };
        scrollBtn.onclick = () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        };

        // Contact form (fake submit)
        document.getElementById("contactForm").addEventListener("submit", function(e) {
            e.preventDefault();
            document.getElementById("formMsg").innerText = "✅ Message sent successfully!";
            this.reset();
        });
    </script>

</body>
</html>
