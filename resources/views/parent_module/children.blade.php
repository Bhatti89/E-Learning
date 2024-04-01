@extends('layouts.parent_main_page.navbar');
@section('content')
    {{-- Your specific content for the parent main page goes here --}}
    

    
    <div class="container">
        <h1>Children of {{ $parent->name }}</h1>

        <div class="button-container">
            @foreach ($children as $child)
                {{-- <a href="#" class="child-button">
                    {{ $child->name }}
                    <br> --}}


                    <a href="{{ route('child.details', ['childId' => $child->id]) }}" class="child-button">
                        {{ $child->name }}
                    </a>
                </a>
            @endforeach
        </div>
    </div>

@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/parent_module_children/children.css') }}">
@endpush