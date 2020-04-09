@extends('layout')

@section('content')

<div class="container text-center mt-5">
    <h2>COIN</h2>
    <div class="coin mx-auto">
        <div class="face side-a">H</div>
        <div class="face side-b">T</div>
    </div>

    <button class="btn mt-3" type="submit" onclick="flipCoin()">Flip</button>
</div>

@endsection
