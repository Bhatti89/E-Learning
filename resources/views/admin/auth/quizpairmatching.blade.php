{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Your Page Title</title>

    <!-- Your styles or external stylesheets here -->

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        nav {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            width: 100%;
        }

        nav a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 800px;
            width: 100%;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            width: 100%;
        }

        .pair-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            width: 100%;
        }

        .pair-container input {
            width: 48%;
        }

        .form-section {
            margin-bottom: 20px;
            width: 100%;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Additional styles or overrides as needed */
    </style>
</head>

<body>

    <nav>
        <a href="#">Home</a>
        <a href="#">Contact</a>
        <a href="#">About</a>
        <a href="#">Why Coding</a>
    </nav>

    <div class="container"> --}}

    @extends('layouts.parent_main_page.navbar')
    @section('content')

    
    <div class="parent-main-page">
        
        <div class="button-container">
        <form action="{{ route('store.pair') }}" method="post">
            @csrf

           
                <label for="adminLesson_id"></label>
                <input type="hidden" name="adminLesson_id" value="{{$data}}">    
                <label for="page_type"></label>
                <input type="hidden" name="page_type" value="Quiz4Matching">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
                <label for="description">Wording Before Entity Below(HTML):</label>
                <textarea name="description" id="editor" rows="10"></textarea>
        
                <label for="order">Order:</label>
                <input type="number" id="order" name="order" required>
           

                <label for="">Matching Details:</label>

    <div class="matching-pair">
        <div class="matching-item">
            <input type="text" placeholder="Left Item 1" name="leftItem1" required>
        </div>
        <div class="matching-item">
            <input type="text" placeholder="Right Item 1" name="rightItem1" required>
        </div>
    </div>

    <div class="matching-pair">
        <div class="matching-item">
            <input type="text" placeholder="Left Item 2" name="leftItem2" required>
        </div>
        <div class="matching-item">
            <input type="text" placeholder="Right Item 2" name="rightItem2" required>
        </div>
    </div>

    <div class="matching-pair">
        <div class="matching-item">
            <input type="text" placeholder="Left Item 3" name="leftItem3" required>
        </div>
        <div class="matching-item">
            <input type="text" placeholder="Right Item 3" name="rightItem3" required>
        </div>
    </div>

    <div class="matching-pair">
        <div class="matching-item">
            <input type="text" placeholder="Left Item 4" name="leftItem4" required>
        </div>
        <div class="matching-item">
            <input type="text" placeholder="Right Item 4" name="rightItem4" required>
        </div>
    </div>            

            <button type="submit">Create</button>
        </form>

    
        <!-- Additional content as needed -->
    </div>
    </div>

    <!-- Your scripts or external scripts here -->

    @endsection
    @push('styles')
    <link rel="stylesheet" href="{{ asset('css/AdminStyling/pairmatching.css') }}">
    
    
    @endpush
