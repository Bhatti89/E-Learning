@extends('layouts.parent_main_page.navbar')
@section('content')
  
    <form method="post" action="{{ route('course.sectionnow') }}">
        @csrf
        <label for="courseid"></label>
        <input type="hidden" name="courseid" id="" value="{{$data}}">
        {{-- <label for="sectionName">Section Name:</label>
        <input type="text" name="sectionName" id="course_title" required> --}}

        <label for="sectionTitle">Title:</label>
        <input type="text" name="sectionTitle" id="courseTitle" required>
        <label for="description">Description:</label>
        {{-- <input type="text" name="description" id="courseTitle" required>--}}
        <textarea id="description" name="description" rows="4" required></textarea>
        <label for="order">Order:</label>
        <input type="number" name="order" id="order" required>
        

        <button type="submit">Create</button>
    </form>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/AdminStyling/courseCreate.css') }}">
@endpush
