require('./bootstrap');

var diceLimit = 6;

$('#dice-range-slider').on('input', function () {
    $('.slider-value').text($(this).val());
}).on('change', function () {
    diceLimit = $(this).val();
})

rollDice = function () {
    var interval = setInterval(function () {
        result = Math.floor((Math.random() * diceLimit) + 1);
        $('.dice-value').text(result);
    }, 80);
    setTimeout(function () {
        clearInterval(interval);
    }, 2000)
}

flipCoin = function () {
    var result = Math.random();
    $('.coin').removeClass('heads');
    $('.coin').removeClass('tails');
    setTimeout(function(){
        $('.coin').addClass((result <= 0.5) ? 'heads' : 'tails');
    }, 100);
}
