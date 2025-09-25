@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')

    <!-- ================= HERO SECTION ================= -->
    <section id="hero" class="hero-section fade-in">
        <div class="container">
            <!-- Profile -->
            <img 
                src="{{ asset('images/unnamed.jpg') }}" 
                alt="{{ $portfolio['name'] }}" 
                class="profile-img"
            >

            <!-- Intro -->
            <h1 class="hero-name">{{ $portfolio['name'] }}</h1>
            <h3 class="hero-title">{{ $portfolio['title'] }}</h3>
            <p class="hero-bio">{{ $portfolio['bio'] }}</p>
        </div>
    </section>

    <!-- Dark Mode Toggle -->
    <button id="theme-toggle" class="darkmode-btn">🌙</button>


    <!-- ================= ABOUT SECTION ================= -->
    <section id="about" class="section fade-in">
        <h2 class="section-title">About Me</h2>
        <p>{{ $portfolio['about'] }}</p>
    </section>


    <!-- ================= SKILLS SECTION ================= -->
    <section id="skills" class="section fade-in">
        <h2 class="section-title">Skills</h2>
        <ul>
            @foreach($portfolio['skills'] as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
    </section>


    <!-- ================= EXPERIENCE SECTION ================= -->
    <section id="experience" class="section fade-in">
        <h2 class="section-title">Experience</h2>
        @foreach($portfolio['experience'] as $exp)
            <div class="experience-item">
                <h3>{{ $exp['role'] }} - {{ $exp['company'] }}</h3>
                <p>{{ $exp['year'] }}</p>
                <p>{{ $exp['details'] }}</p>
            </div>
        @endforeach
    </section>


    <!-- ================= EDUCATION SECTION ================= -->
    <section id="education" class="section fade-in">
        <h2 class="section-title">Education</h2>
        @foreach($portfolio['education'] as $edu)
            <div class="education-item">
                <h3>{{ $edu['degree'] }}</h3>
                <p><strong>{{ $edu['school'] }}</strong></p>
                <p>{{ $edu['year'] }}</p>
            </div>
        @endforeach
    </section>


    <!-- ================= CONTACT SECTION ================= -->
    <section id="contact" class="section fade-in">
        <h2 class="section-title">Contact</h2>
        <p>If you'd like to work with me or just say hi, feel free to reach out!</p>

        <!-- Social Links -->
        <div class="social-links">
            <a href="https://facebook.com" class="facebook" target="_blank">📘</a>
            <a href="https://instagram.com" class="instagram" target="_blank">📸</a>
            <a href="https://github.com" class="github" target="_blank">🐙</a>
            <a href="mailto:{{ $portfolio['email'] }}" class="gmail">✉️</a>
        </div>

        <!-- Email Button -->
        <a href="mailto:{{ $portfolio['email'] }}" class="btn-primary">📧 Email Me</a>
    </section>

    <!-- ================= SCRIPTS ================= -->
    <script src="{{ asset('js/portfolio.js') }}"></script>

@endsection
