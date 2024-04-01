
@extends('layouts.parent_main_page.navbar')
@section('content')
    
    <div class="parent-main-page">
        
        <div class="button-container">
            <form method="post" action="{{ route('store.unitexam') }}">
                @csrf
                <label for="unitid"></label>
                <input type="hidden" name="unitid" value="{{$data->id}}">
                
                <label for="title">Title:</label>
                <input type="text" name="title" id="lessonName" required>
    
                
                <label for="html_code">Wording Before Entity Below (HTML):</label>
                <textarea  name="html_code" id="editor" rows="1"></textarea>
                <label for="text_field">Textarea Title</label>
                <input type="text" name="text_field" id="lessonName" required>
                
    
                <button type="submit">Create</button>
            </form>
        
        </div>
    </div>
  
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/AdminStyling/courseCreate.css') }}">
@endpush