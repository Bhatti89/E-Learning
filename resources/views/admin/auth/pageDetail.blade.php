@extends('layouts.parent_main_page.navbar')
@section('content')
    {{-- Your specific content for the parent main page goes here --}}
    {{-- <form method="post" action="{{ route('adminMainCourse') }}"> --}}
    <div class="parent-main-page">
        
        <h1>{{$data->lessonName}}</h1>
        <p>{{$data->description}}</p>
        <h1>Pages</h1>
        <div class="button-container">
            <a href="{{ route('lesson.edit', ['data' => $data->id]) }}" class="blue-button">Edit Lesson</a>  
            <a href="{{ route('Page.Type', ['data' => $x]) }}" class="blue-button">Create New Page<a> 

            <h1>Existing Pages</h1>
            
            {{-- @foreach ($new as $data)
            
            <a href="#" class="blue-button">
                {{ $data->title }} Type- {{$data->page_type}}
            </a>
            @endforeach --}}
        </div>
{{--         
            @foreach ($plainHtmlData as $item)
            
            <a href="{{ route('edit.pageDetail', ['page_type' => $item->page_type, 'id' => $item->id])}}" class="blue-button">


                {{ $item->Title }} - {{$item->page_type}} - {{$item->order}}
                
            </a>
            @endforeach
       
           
            @foreach ($singleTextFieldData as $item)
            
            <a href="{{ route('edit.pageDetail', ['page_type' => $item->page_type, 'id' => $item->id])}}" class="blue-button">


                {{ $item->Title }} - {{$item->page_type}} - {{$item->order}}
                
            </a>
            @endforeach
       

          
            @foreach ($singleTextAreaData as $item)
            
            <a href="{{ route('edit.pageDetail', ['page_type' => $item->page_type, 'id' => $item->id])}}" class="blue-button">


                {{ $item->Title }} - {{$item->page_type}} - {{$item->order}}
                
            </a>
            @endforeach




            @foreach ($Quiz4Matching as $item)
            
            <a href="{{ route('edit.pageDetail', ['page_type' => $item->page_type, 'id' => $item->id])}}" class="blue-button">


                {{ $item->title }} - {{$item->page_type}} - {{$item->order}}
                
            </a>
            @endforeach
        
         
            @foreach ($quizWithChoices as $item)
            
            <a href="{{ route('edit.pageDetail', ['page_type' => $item->page_type, 'id' => $item->id])}}" class="blue-button">


                {{ $item->Title }} - {{$item->page_type}} - {{$item->order}}
                
            </a>
            @endforeach
        
          
            @foreach ($quizMultipleChioces as $item)
            
            <a href="{{ route('edit.pageDetail', ['page_type' => $item->page_type, 'id' => $item->id])}}" class="blue-button">


                {{ $item->Title }} - {{$item->page_type}} - {{$item->order}}
                
            </a>
            @endforeach
        --}}
            {{-- <a href="{{ route('unit.checkLesson', ['unit' => $data->id]) }}" class="blue-button">Unit Exam</a> --}}
                
        
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/AdminStyling/pagedetail.css') }}">
@endpush