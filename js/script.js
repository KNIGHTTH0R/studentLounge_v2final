$('.burger, .overlay').click(function() {
    $('.burger').toggleClass('clicked');
    $('.overlay').toggleClass('show');
    $('.burg').toggleClass('show');
    $('body').toggleClass('overflow');
});