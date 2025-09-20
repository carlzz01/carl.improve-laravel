@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')

<!-- Hero Section -->

<section class="hero-section">

    
    <div class="container">

        <img src="./image/unnamed.jpg" alt="{{ $portfolio['name'] }}" class="profile-img">

        <h1 class="display-4 mb-3">{{ $portfolio['name'] }}</h1>

        <h3 class="mb-4">{{ $portfolio['title'] }}</h3>

        <p class="lead mb-4">{{ $portfolio['bio'] }}</p>

    </div>

</section>

<!-- About Section -->

<section id="about" class="section">

    <div class="container">

        <h2 class="section-title">About Me</h2>
        
    <div style="max-width: 800px; margin: auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0px 4px 20px rgba(0,0,0,0.1);">
        <p style="font-size: 1.1rem; line-height: 1.6;">
            Hi, I’m <b>Carl Angelo E. Dela Cruz</b>, a dedicated Full Stack Web Developer with a passion for building modern, user-friendly, and scalable web applications. With over 5 years of experience, I’ve worked on different technologies including <b>Laravel, PHP, JavaScript, React, and MySQL</b>. I love solving problems and turning ideas into real projects.
        </p>
    </div>
        <!-- About content -->

    </div>

</section>

<!-- Projects Section -->

<section id="projects" class="section bg-light">

    <div class="container">

        <h2 class="section-title">My Projects</h2>

        <!-- Projects content -->

    </div>

</section>

<!-- Contact Section -->

<section id="contact" class="section">

    <div class="container">

        <h2 class="section-title">Get In Touch</h2>

        <!-- Contact content -->

    </div>

</section>

@endsection