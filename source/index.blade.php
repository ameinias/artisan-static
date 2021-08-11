@extends('_layouts.master')

@section('content')
    <h1>Welcome to Artisan Static</h1>

    <p>Artisan Static is a starter template for building a static Jigsaw blog hosted on Netlify.</p>
    <p>Gillian was here.</p>

    <span><a href="adventure.php">adventure</a> <a href="master.php">master</a> dot com. 

    <a href="https://ko-fi.com/Y8Y07ACJ" target="_blank" rel="noopener">
        <img src="{{ media('kofi-button.png') }}" alt="ko-fi" width="223" height="30">
    </a>

    <h2 id="test">Asset Compilation Test</h2>

    <p>CSS test: <span class="test-css">text with blue border</span></p>

    <p>JavaScript test: <a href="#test" class="test-js">click me</a></p>
@endsection
