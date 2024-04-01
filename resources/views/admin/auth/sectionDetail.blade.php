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
    
    @if(session('created'))
        <div style="position: fixed; top: 20px; left: 50%; transform: translateX(-50%); max-width: 300px; padding: 15px; background-color: #28a745; color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.5); border-radius: 5px; text-align: center;">
            <strong>Success!</strong> {{ session('created') }}
            <span style="cursor: pointer;" onclick="this.parentElement.style.display='none';">&times;</span>
        </div>
    @endif
    
    
        
        
        <h1>{{$data->courseName}}</h1>
        <p>{{$data->description}}</p>
        <h1>Sections</h1>
        <div class="button-container">
            <a href="{{ route('section.create', ['data' => $data->id]) }}" class="blue-button">Create New Section</a> 
            <a href="{{ route('course.edit', ['data' => $data->id]) }}" class="blue-button">Edit Course</a> 

            <h1>Existing Sections</h1>
            @foreach ($info as $section)
            <a href="{{ route('section.checkUnit', ['section' => $section->id]) }}" class="blue-button">
            
                {{$section->sectionTitle}} - {{$section->order}}
            </a>
            @endforeach

            


        
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/AdminStyling/AdminMain.css') }}">
@endpush