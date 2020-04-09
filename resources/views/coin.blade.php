@extends('layout')

@section('content')

<div class="container text-center mt-5">
    <h2>COIN</h2>
    <div class="coin mx-auto">
        <div class="face side-a">
            @if(request('coin') == 'xavier')
                <img src="{{ asset('img/heads.png') }}">
            @else
                H
            @endif
        </div>
        <div class="face side-b">
            @if(request('coin') == 'xavier')
                <img src="{{ asset('img/tails.png') }}">
            @else
                T
            @endif
        </div>
    </div>

    <button class="btn mt-3" type="submit" onclick="flipCoin()">Flip</button>
</div>

@endsection
