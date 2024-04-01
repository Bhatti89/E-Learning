<!-- resources/views/parent_module/child_details.blade.php -->

@extends('layouts.parent_main_page.navbar')

@section('content')
<div class="box">
    <div class="container">
        <h1>Child Details</h1>

            <p>Name: {{ $child->name }}</p>
            <p>Age: {{ $child->age }}</p>
            
            <p>Father Name: {{ $child->fathername }}</p>
            <h1>Course Detail</h1>
            <p>course: {{ $course->coursename }}</p>
            <p>Date: {{ $course->date }}</p>
            <p>Time: {{ $course->time }}</p>
            <p>link: {{ $course->link }}</p>
            <p>Course Module :</p>
            <p>Section {{ $course->section }}-Unit {{ $course->unit }}-Lesson {{ $course->lesson }}</p>
            <p>Description:</p>
            <p>{{ $course->description }}</p>


    </div>
</div>

    


@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/parent_module_children/children_detail.css') }}">
@endpush