@extends('layouts.parent_main_page.navbar')
@section('content')

    
   
        
        
            <div class="container">
                <h2>Create Quiz with Choices</h2>
                <form method="post" action="{{ route('update.quizWithChoices',['id' => $page->id]) }}">
                @csrf
                @method('PUT')
            <div class="centered">
                <label for="Title">Title:</label>
                <input type="text" name="Title" value="{{$page->Title}}" required>
            </div>
            <div class="centered">
                <label for="html_code">Description:</label>
                <textarea  name="html_code" id="editor" rows="1" >{{$page->html_code}}</textarea>
            </div>
            <div class="centered">
                <label for="order">Order:</label>
                <input type="number" name="order" id="order" value="{{$page->order}}" required>
            </div>


                        <!-- Text and Textarea inputs -->
                     
                        <!-- Four text inputs -->
                        <div class="big">
                        <div class="quiz-inputs-text">
                            <div>
                                <label for="text1">Text 1:</label>
                                <input type="text" name="text1" value="{{$page->text1}}" required>
                            </div>
                            <div>
                                <label for="text2">Text 2:</label>
                                <input type="text" name="text2" value="{{$page->text2}}" required>
                            </div><div>
                                <label for="text3">Text 3:</label>
                                <input type="text" name="text3" value="{{$page->text3}}" required>
                            </div><div>
                                <label for="text4">Text 4:</label>
                                <input type="text" name="text4" value="{{$page->text4}}" required>
                            </div>
            
                            <!-- Repeat similar structure for text2, text3, and text4 -->
                        </div>
            
                        <!-- Four URL inputs -->
                        <div class="quiz-inputs-url">
                            <div>
                                <label for="url1">URL 1:</label>
                                <input type="url" name="url1" value="{{$page->url1}}" required>
                            </div><div>
                                <label for="url2">URL 2:</label>
                                <input type="url" name="url2" value="{{$page->url2}}" required>
                            </div><div>
                                <label for="url3">URL 3:</label>
                                <input type="url" name="url3" value="{{$page->url3}}" required>
                            </div>
                            <div>
                                <label for="url4">URL 4:</label>
                                <input type="url" name="url4" value="{{$page->url4}}" required>
                            </div>
            
                            <!-- Repeat similar structure for url2, url3, and url4 -->
                        </div>
                    </div>
                    <div class="centered">
                        <label for="Answer">Answer:</label>
                        <input type="number" name="Answer" id="order" value="{{$page->Answer}}" required>
                    </div>
            
                    

                
                <button type="submit">Create Page</button>
            </form>
        
        
    </div>

@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/AdminStyling/quizwithchoices.css') }}">
@endpush










