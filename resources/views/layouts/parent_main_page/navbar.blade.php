<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tiny.cloud/1/snqqdc8e3q0wp1ekqi79t3zoxpxpql6pmi6xi7ln3mgsoduo/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <title>@yield('title', 'Your App')</title>
    <link rel="stylesheet" href="{{ asset('css/parent_main_navbar/navbar.css') }}">
   
</head>
<body>

    <header>
        <nav class="navbar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/why-us">Why Us</a></li>
                <li><a href="/why-coding">Why Coding</a></li>
                <li><a href="/testimonials">Testimonials</a></li>
                <li><a href="/contact-us">Contact Us</a></li>
            </ul>
        </nav>
        @stack('styles')
    </header>
    <main>
        @yield('content')
    </main>


</body>
</html>
