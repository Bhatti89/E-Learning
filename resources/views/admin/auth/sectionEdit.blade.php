

@extends('layouts.parent_main_page.navbar')
@section('content')
  
    <form method="POST" action="{{ route('section.update', ['id' => $course->id]) }}">
        @csrf
        @method('PUT') <!-- Use PUT method for updates -->
    
        <!-- Display current course details -->
        <label for="sectionTitle">Section Title:</label>
        <input type="text" name="sectionTitle" value="{{$course->sectionTitle}}" required>
        {{-- <label for="sectionName">Section Name:</label>
        <input type="text" name="sectionName" value="{{$course->sectionName}}" required> --}}
        <label for="description">Description:</label>
        {{-- <input type="text" name="description" id="courseTitle" required>--}}
        <textarea id="description" name="description" rows="4" required>{{$course->description}}</textarea>
        <!-- Other fields and details for editing -->
        <label for="order">Order:</label>
        <input type="number" name="order" value="{{$course->order}}" required>
        
    
        <button type="submit">Update</button>
    </form>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/AdminStyling/courseCreate.css') }}">
@endpush













