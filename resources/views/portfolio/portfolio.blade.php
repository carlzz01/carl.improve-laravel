@extends('layouts.portfolio')

@section('title', $portfolio['name'])

@section('content')

<!-- ===== HERO SECTION ===== -->
<section id="hero" class="hero-section fade-in">
    <div class="container">
        <img src="{{ $portfolio['profile_image'] }}" alt="{{ $portfolio['name'] }}" class="profile-img">
        <h1 class="hero-name">{{ $portfolio['name'] }}</h1>
        <h3 class="hero-title">{{ $portfolio['title'] }}</h3>
        <p class="hero-bio">{{ $portfolio['bio'] }}</p>


        <div class="hero-buttons">
            <a href="{{ asset('delacruz.pdf') }}" target="_blank" class="btn-secondary">📄 My Resume</a>
        </div>
    </div>
</section>


<!-- ===== ABOUT SECTION ===== -->
<section id="about" class="section fade-in">
    <div class="container">
        <h2 class="section-title">About Me</h2>
        <p>Email: {{ $portfolio['email'] }}</p>
        <p>Phone: {{ $portfolio['phone'] }}</p>
        <p>Location: {{ $portfolio['location'] }}</p>
    </div>
</section>


<!-- ===== SKILLS SECTION ===== -->
<section id="skills" class="section fade-in">
    <div class="container">
        <h2 class="section-title">Skills</h2>
        <ul>
            @foreach ($portfolio['skills'] as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
    </div>
</section>


<!-- ===== EXPERIENCE SECTION ===== -->
<section id="experience" class="section fade-in">
    <div class="container">
        <h2 class="section-title">Experience</h2>
        @foreach($portfolio['experience'] as $exp)
            <div class="experience-item">
                <h3>{{ $exp['role'] }}</h3>
                <p>{{ $exp['company'] }} ({{ $exp['duration'] }})</p>
            </div>
        @endforeach
    </div>
</section>


<!-- ===== EDUCATION SECTION ===== -->
<section id="education" class="section fade-in">
    <div class="container">
        <h2 class="section-title">Education</h2>
        @foreach($portfolio['education'] as $edu)
            <div class="education-item">
                <h3>{{ $edu['degree'] }}</h3>
                <p><strong>{{ $edu['school'] }}</strong></p>
                <p>{{ $edu['year'] }}</p>
            </div>
        @endforeach
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section fade-in">
    <div class="container">
        <h2 class="section-title">Contact</h2>
        <p>Email: {{ $portfolio['email'] }}</p>
        <p>Phone: {{ $portfolio['phone'] }}</p>
        <p>Location: {{ $portfolio['location'] }}</p>

        <!-- Social Links (Icons) -->
        <div class="social-links">
            <a href="https://www.facebook.com/share/1CfMUyBJbj/?mibextid=wwXIfr" target="_blank" class="facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/invites/contact/?igsh=1qv1vkpi49xhi&utm_content=xmmc1jp" target="_blank" class="instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://github.com/carlzz01" target="_blank" class="github">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://myaccount.google.com/?pli=1" class="gmail" title="My Google">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512" width="22" height="22">
                    <path fill="#4285F4" d="M488 261.8c0-17.7-1.6-35-4.7-51.6H250v97.6h134.1c-5.8 31.2-23 57.6-49.2 75.2v62h79.5c46.5-42.9 73.6-106.1 73.6-183.2z"/>
                    <path fill="#34A853" d="M250 500c66.7 0 122.6-22.1 163.4-60.1l-79.5-62c-22.1 14.9-50.4 23.8-83.9 23.8-64.5 0-119-43.6-138.4-102.1H29.1v63.9C69.5 449.3 154.3 500 250 500z"/>
                    <path fill="#FBBC05" d="M111.6 299.6c-4.8-14.3-7.6-29.6-7.6-45.6s2.7-31.3 7.6-45.6v-63.9H29.1C10.4 177.7 0 212.1 0 254s10.4 76.3 29.1 109.6l82.5-64z"/>
                    <path fill="#EA4335" d="M250 104.1c36.3 0 68.9 12.5 94.7 36.9l70.9-70.9C372.6 25.5 316.7 0 250 0 154.3 0 69.5 50.7 29.1 127.4l82.5 64C131 147.6 185.5 104.1 250 104.1z"/>
                </svg>
            </a>
        </div>

        <!-- Email Me Button (moved under icons) -->
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $portfolio['email'] }}"
           target="_blank"
           class="btn-primary"
           style="margin-top: 20px; display: inline-block;">
           📧 Email Me
        </a>
    </div>
</section>



<!-- ===== DARK MODE TOGGLE ===== -->
<div class="darkmode-container">
    <button id="theme-toggle" class="darkmode-btn">🌙</button>
</div>


<!-- ===== FONT AWESOME ===== -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@endsection
