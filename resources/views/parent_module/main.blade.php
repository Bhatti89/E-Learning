@extends('layouts.parent_main_page.navbar');
@section('content')
    {{-- Your specific content for the parent main page goes here --}}
    <div class="parent-main-page">
        <h1>Welcome, Parent!</h1>
        <div class="button-container">
            <a href="http://127.0.0.1:8000/checkparent" class="blue-button">Your Child Detail</a>
            <a href="http://127.0.0.1:8000/Parenttraining" class="blue-button">Training</a>
            <a href="http://127.0.0.1:8000/parentSupport" class="blue-button">Support</a>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/parentModulecss/main.css') }}">
@endpush