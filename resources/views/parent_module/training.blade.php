@extends('layouts.parent_main_page.navbar');
@section('content')


<body>

    <h1>Your Page Title</h1>

    <div class="video-container">
        <h2>Video Title 1</h2>
        <iframe src="https://www.youtube.com/embed/your-video-id-1" frameborder="0" allowfullscreen></iframe>
        <p class="description">Description of about 50 words goes here. This is a brief description of the content presented in the video.</p>
    </div>

    <div class="video-container">
        <h2>Video Title 2</h2>
        <iframe src="https://www.youtube.com/embed/your-video-id-2" frameborder="0" allowfullscreen></iframe>
        <p class="description">Description of about 100 words goes here. This is a more detailed description of the content presented in the video. It provides additional information and context for the viewers.</p>
    </div>

</body>





@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/parenttraning/training.css') }}">
@endpush