@extends('layouts.parent_main_page.navbar')
@section('content')
    {{-- Your specific content for the parent main page goes here --}}
    {{-- <form method="post" action="{{ route('adminMainCourse') }}"> --}}
    
    <div class="parent-main-page">
      
    @if(session('success'))
        <div style="position: fixed; top: 20px; left: 50%; transform: translateX(-50%); max-width: 300px; padding: 15px; background-color: #28a745; color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.5); border-radius: 5px; text-align: center;">
            <strong>Success!</strong> {{ session('success') }}
            <span style="cursor: pointer;" onclick="this.parentElement.style.display='none';">&times;</span>
        </div>
    @endif


        <h1>Courses</h1>
        <div class="button-container">
            <a href="{{ route('course.create', ['admin' => $admin->id]) }}" class="blue-button">Create New Course</a>

            <h1>Existing courses</h1>
            @foreach ($data as $course)
            <a href="{{ route('course.checkSection', ['course' => $course->id]) }}" class="blue-button">
            
                {{$course->courseTitle}} - {{$course->order}}
            @endforeach
        </a>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/AdminStyling/AdminMain.css') }}">
@endpush