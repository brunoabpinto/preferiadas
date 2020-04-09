@extends('layout')

@section('content')

<div class="container text-center mt-5">
    <h2>WORDS</h2>
    <div class="words-container">
        {!! $words !!}
    </div>

    <button class="btn mt-3" type="submit" onclick="location.reload()">Generate</button>
</div>

@endsection
