@extends('layout')

@section('content')

<div class="container text-center mt-5">
    <h2>DICE</h2>
    <div class="dice mx-auto">
        <div class="dice-value">4</div>
    </div>

    <div class="form-group slidecontainer">
        <span class="slider-value">6</span>
        <input type="range" class="form-control-range slider" id="dice-range-slider" min="3" max="100" value="6">
    </div>

    <button class="btn mt-3" type="submit" onclick="rollDice()">Roll</button>
</div>

@endsection
