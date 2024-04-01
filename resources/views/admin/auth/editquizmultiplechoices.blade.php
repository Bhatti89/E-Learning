



@extends('layouts.parent_main_page.navbar')
@section('content')

    
    <div class="parent-main-page">
        
        <div class="button-container">
            <form method="post" action="{{ route('update.quizMultipleChoices',['id' => $page->id]) }}">
                @csrf
                @method('PUT')
                <label for="Title">Title:</label>
                <input type="text" name="Title" id="lessonName" value="{{$page->Title}}" required>
                <label for="html_code">Description:</label>
                <textarea  name="html_code" id="editor" rows="1" >{{$page->html_code}}</textarea>
                
                <label for="order">Order:</label>
                <input type="number" name="order" id="order" value="{{$page->order}}" required>
                <label for="">choose from the 4 options</label>
                <div class="check">
                <input type="text" name="choice1"  value="{{$page->choice1}}" required>
                <input type="text" name="choice2"  value="{{$page->choice2}}" required>
                <input type="text" name="choice3"  value="{{$page->choice3}}" required>
                <input type="text" name="choice4"  value="{{$page->choice4}}" required>
                <label for="Answer">Answer:</label>
                <input type="number" name="Answer" id="order" value="{{$page->Answer}}" required>
    
    
                <button type="submit">Update Page</button>
            </div>
            </form>
        
        </div>
    </div>

@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('css/AdminStyling/courseCreate.css') }}">

@endpush




