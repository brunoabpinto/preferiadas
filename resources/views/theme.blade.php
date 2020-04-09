@extends('layout')

@section('content')

<div class="container text-center mt-5">
    <h2>THEME</h2>
    <div class="theme-container">
        {!! $theme !!}
    </div>

    <button class="btn mt-3" type="submit" onclick="location.reload()">Generate</button>
</div>

@endsection
