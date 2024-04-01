@extends('layouts.parent_main_page.navbar')
@section('content')
    {{-- Your specific content for the parent main page goes here --}}
    {{-- <form method="post" action="{{ route('adminMainCourse') }}"> --}}
    <div class="parent-main-page">
        <h1>Welcome, Admin</h1>
        <div class="button-container">
            @foreach ($admins as $course)
            <a href="{{ route('course.details', ['adminCourseId' => $course->id]) }}" class="blue-button">
            
                {{ $course->coursename }}
            @endforeach
        </a>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/AdminStyling/AdminMain.css') }}">
@endpush