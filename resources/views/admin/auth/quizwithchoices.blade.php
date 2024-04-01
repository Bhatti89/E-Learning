@extends('layouts.parent_main_page.navbar')
@section('content')

<div class="container">
    <div class="centered">
        <h2>Create Quiz with Choices</h2>
    </div>

    <form action="{{ route('store.quizwithchoices') }}" method="post">

        @csrf

        <div class="centered">
            <label for="adminLesson_id"></label>
            <input type="hidden" name="adminLesson_id" value="{{$data}}">
        </div>

        <div class="centered">
            <label for="page_type"></label>
            <input type="hidden" name="page_type" id="lessonName" value="quizwithchoices" required>
        </div>

        <div class="centered">
            <label for="Title">Title:</label>
            <input type="text" name="Title" id="lessonName" required>
        </div>

        <div class="centered">
            <label for="html_code">Wording Before Entity Below (HTML):</label>
            <textarea name="html_code"  rows="10"></textarea>
        </div>

        <div class="centered">
            <label for="order">Order:</label>
            <input type="number" name="order" id="order" required>
        </div>

        <!-- Text and Textarea inputs -->
        <div class="big">
            <!-- Pair 1: Text 1 and URL 1 -->
            <div class="quiz-inputs-pair">
                <div class="quiz-inputs-text">
                    <label for="text1">Text 1:</label>
                    <input type="text" name="text1" required>
                </div>
                <div class="quiz-inputs-url">
                    <label for="url1">URL 1:</label>
                    <input type="url" name="url1" required>
                </div>
            </div>

            <!-- Pair 2: Text 2 and URL 2 -->
            <div class="quiz-inputs-pair">
                <div class="quiz-inputs-text">
                    <label for="text2">Text 2:</label>
                    <input type="text" name="text2" required>
                </div>
                <div class="quiz-inputs-url">
                    <label for="url2">URL 2:</label>
                    <input type="url" name="url2" required>
                </div>
            </div>
            <div class="quiz-inputs-pair">
                <div class="quiz-inputs-text">
                    <label for="text3">Text 3:</label>
                    <input type="text" name="text3" required>
                </div>
                <div class="quiz-inputs-url">
                    <label for="url3">URL 3:</label>
                    <input type="url" name="url3" required>
                </div>
            </div>
            <div class="quiz-inputs-pair">
                <div class="quiz-inputs-text">
                    <label for="text4">Text 4:</label>
                    <input type="text" name="text4" required>
                </div>
                <div class="quiz-inputs-url">
                    <label for="url4">URL 4:</label>
                    <input type="url" name="url4" required>
                </div>
            </div>
        </div>

        <div class="centered">
            <label for="Answer">Answer:</label>
            <input type="number" name="Answer" id="order" required>
        </div>

        <button type="submit">Create</button>
    </form>
</div>

@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/AdminStyling/quizwithchoices.css') }}">
@endpush
