@extends('layouts.parent_main_page.navbar')
@section('content')
  
    <form method="post" action="{{ route('lesson.storenow') }}">
        @csrf
        <label for="unitid"></label>
        <input type="hidden" name="unitid" id="" value="{{$data}}">
        {{-- <label for="lessonName">Lesson Name:</label>
        <input type="text" name="lessonName" id="lessonName" required> --}}

        <label for="lessonTitle">Title:</label>
        <input type="text" name="lessonTitle" id="lessonTitle" required>
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
