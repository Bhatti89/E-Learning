@extends('layouts.parent_main_page.navbar')
@section('content')
        
        <form method="post" action="{{ route('store.plainHtmlPage') }}">
            @csrf
            <label for="plainHtmlid"></label>
            <input type="hidden" name="plainHtmlid" value="{{$data}}">
            <label for="page_type"></label>
            <input type="hidden" name="page_type"  value="PlainHTML" required>
            <label for="Title">Title:</label>
            <input type="text" name="Title"  required>

            
            <label for="html_code">Description:</label>
            <textarea  name="html_code" id="editor" rows="6"></textarea>
            
            <label for="Order">Order:</label>
            <input type="number" name="Order" required>

            <button type="submit">Create</button>
        </form>

@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/AdminStyling/courseCreate.css') }}">
@endpush

