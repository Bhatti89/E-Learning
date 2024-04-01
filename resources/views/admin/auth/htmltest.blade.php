@extends('layouts.parent_main_page.navbar')
@section('content')
  
    <form method="post" action="{{ route('html.testt') }}">
        @csrf
        <label for="courseName">Course Name:</label>
        <input type="text" name="courseName" id="course_title" required>

        <label for="courseTitle">Title:</label>
        <input type="text" name="courseTitle" id="courseTitle" required>
        <label for="description">Title:</label>
        <input type="text" name="description" id="courseTitle" required>
        

        <button type="submit">Create Course</button>
    </form>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/AdminStyling/courseCreate.css') }}">
@endpush
