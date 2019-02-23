$('.burger, .overlay').click(function() {
    $('.burger').toggleClass('clicked');
    $('.overlay').toggleClass('show');
    $('.burg').toggleClass('show');
    $('body').toggleClass('overflow');
});

$(document).ready(function() {
    $('.ask-us').animate({
        right: '0'
    }, {
        duration: 1800
    });

    $('.bg-text').fadeIn(2000).removeClass('hidden');
});