@extends('layouts.parent_main_page.navbar')
@section('content')



@if(session('success'))
<div style="position: fixed; top: 20px; left: 50%; transform: translateX(-50%); max-width: 300px; padding: 15px; background-color: #28a745; color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.5); border-radius: 5px; text-align: center;">
    <strong>Success!</strong> {{ session('success') }}
    <span style="cursor: pointer;" onclick="this.parentElement.style.display='none';">&times;</span>
</div>
@endif


    <div class="parent-main-page">
        
        <div class="button-container">
            <form method="post" action="{{ route('store.quizmultiplechoices') }}">
                @csrf
       
                <label for="adminLesson_id"></label>
                <input type="hidden" name="adminLesson_id" value="{{$data}}">  
                <label for="page_type"></label>
                <input type="hidden" name="page_type"  value="quizmultiplechoices" required>
                <label for="Title">Title:</label>
                <input type="text" name="Title" id="lessonName" required>
    
                
                <label for="html_code">Wording Before Entity Below(HTML):</label>
                <textarea  name="html_code" rows="10"></textarea>
                
                <label for="order">Order:</label>
                <input type="number" name="order" id="order" required>
                <label for="">Please select from 4 options </label>
                <input type="text" name="choice1" id="lessonName" required>
                <input type="text" name="choice2" id="lessonName" required>
                <input type="text" name="choice3" id="lessonName" required>
                <input type="text" name="choice4" id="lessonName" required>


                <label for="order">Answer:</label>
                <input type="number" name="Answer" id="order" required>
                
    
                <button type="submit">Create</button>
            </form>
        
        </div>
    </div>
    
@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('css/AdminStyling/courseCreate.css') }}">

@endpush