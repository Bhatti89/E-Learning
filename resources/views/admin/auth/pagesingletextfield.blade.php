@extends('layouts.parent_main_page.navbar')
@section('content')

    
    <div class="parent-main-page">
        
        <div class="button-container">
            <form method="post" action="{{ route('store.singletextfield') }}">
                @csrf
                <label for="pagesingletextfieldid"></label>
                <input type="hidden" name="pagesingletextfieldid" value="{{$data}}">
                <label for="page_type"></label>
                <input type="hidden" name="page_type" id="lessonName" value="SingleTextField" required>
                <label for="Title">Title:</label>
                <input type="text" name="Title" id="lessonName" required>
                <label for="html_code">Wording Before Entity Below(HTML):</label>
                <textarea  name="html_code" id="editor" rows="10"></textarea>
                <label for="textFieldTitle">Text Field Title:</label>
                <input type="text" name="textFieldTitle" id="textFieldTitle" required>
                <label for="order">Order:</label>
                <input type="number" name="order" id="order" required>
    
                <button type="submit">Create</button>
            </form>
        
        </div>
    </div>
    
@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('css/AdminStyling/courseCreate.css') }}">


@endpush