<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Portfolio')</title>

    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>
    {{-- Sidebar Toggle Button --}}
    <button class="sidebar-btn" onclick="toggleSidebar()">☰ Menu</button>

    {{-- Sidebar --}}
    <div id="sidebar" class="sidebar">
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>

    <main>
        @yield('content')
    </main>

    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>
</html>
