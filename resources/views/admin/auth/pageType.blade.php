

@extends('layouts.parent_main_page.navbar')
@section('content')
    {{-- Your specific content for the parent main page goes here --}}
    {{-- <form method="post" action="{{ route('adminMainCourse') }}"> --}}
    <div class="parent-main-page">
        
        <h1>Choose a Type</h1>

        <div class="button-container">
            <a href="{{ route('create.plainHtmlPage', ['data' => $data]) }}" class="blue-button" id="plain-html">Plain HTML</a>
            <a href="{{ route('create.singletextfield', ['data' => $data]) }}" class="blue-button" id="single-text-field">Single Text Field</a>
            <a href="{{ route('create.singletextarea', ['data' => $data]) }}" class="blue-button" id="single-text-area">Single Text Area</a>
            <a href="{{ route('create.quizpairmatching', ['data' => $data]) }}" class="blue-button" id="quiz-matching">Quiz 4 Matching</a>
            <a href="{{ route('create.quizwithchoices', ['data' => $data]) }}" class="blue-button" id="quiz-image-choices">Quiz Image with 4 Choices</a>
            <a href="{{ route('create.quizmultiplechoices', ['data' => $data]) }}" class="blue-button" id="quiz-4-choices">Choose from the four options</a>
        
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/AdminStyling/AdminMain.css') }}">
@endpush