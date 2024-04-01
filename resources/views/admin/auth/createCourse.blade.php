@extends('layouts.parent_main_page.navbar')
@section('content')
  
    <form method="post" action="{{ route('course.createnow') }}">
        @csrf
        <label for="adminid"></label>
        <input type="hidden" name="adminid" id="" value="{{$admin}}">
        <label for="courseTitle">Title:</label>
        <input type="text" name="courseTitle" id="courseTitle" required>
        <label for="description">Description:</label>
        <input type="text" name="description" id="courseTitle" required>
        <label for="order">Order:</label>
        <input type="number" name="order" id="order" required>
        

        <button type="submit">Create</button>
    </form>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/AdminStyling/courseCreate.css') }}">
@endpush
