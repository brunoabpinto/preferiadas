@extends('layout')

@section('content')

<div class="container text-center mt-5">
    <h2>NEWS</h2>
    <div class="article-container">
        <a href="{{ $article['link'] }}" target="_blank">
            <div class="image-container">
                <img src="{{ $article['image']}}">
            </div>
            <h4>{{ $article['title'] }}</h4>
            <p>{{ $article['lead']}}</p>
        </a>
    </div>

    <button class="btn mt-3" type="submit" onclick="location.reload()">Generate</button>
</div>

@endsection
