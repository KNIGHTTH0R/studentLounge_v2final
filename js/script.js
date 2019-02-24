$('.burger, .overlay').click(function() {
    $('.burger').toggleClass('clicked');
    $('.overlay').toggleClass('show');
    $('.burg').toggleClass('show');
    $('body').toggleClass('overflow');
});

$(document).ready(function(){
  $('.ask-us').animate({'margin-left' : '0', opacity: '1'}, {duration: 1800});

  $('.bg-text').fadeIn(3000).removeClass('hidden');

  $('.fadebtn').fadeIn(3000).removeClass('hidden');

  $('.about-us-btn').each( function(i){
    var x = $(this).offset().top + $(this).outerHeight();
    var y = $(window).scrollTop() + $(window).height();
    if( y > x ){
        $(this).animate({'bottom':'0', 'opacity': '1'},1500);
        }
      });

  $('.section-header').fadeIn(3000).removeClass('hidden');

  $('.card-explore').each( function(i){
    var x = $(this).offset().top + $(this).outerHeight();
    var y = $(window).scrollTop() + $(window).height();
    if( y > x ){
        $(this).animate({'opacity':'1', 'margin-left':'0%'},1000);
        }
      });
});


$(window).scroll( function(){
  $('.fix-align').each( function(i){
    var x = $(this).offset().top + $(this).outerHeight();
    var y = $(window).scrollTop() + $(window).height();
    if( y > x ){
        $(this).animate({'bottom':'0', 'opacity': '1'},500);
        }
      });

  $('.small-icon-2').each( function(i){
    var x = $(this).offset().top + $(this).outerHeight();
    var y = $(window).scrollTop() + $(window).height();
    if( y > x ){
        $(this).animate({'width':'150px'},2000);
        }
      });

  $('.bg-text-section3').each( function(i){
    var x = $(this).offset().top + $(this).outerHeight();
    var y = $(window).scrollTop() + $(window).height();
    if( y > x ){
        $(this).animate({'opacity':'1'},3500);
        }
      });

  $('.img-thumbnail').each( function(i){
    var x = $(this).offset().top + $(this).outerHeight();
    var y = $(window).scrollTop() + $(window).height();
    if( y > x ){
        $(this).animate({width:'150px'},1000);
        }
      });

  $('.btn-section2').each( function(i){
    var x = $(this).offset().top + $(this).outerHeight();
    var y = $(window).scrollTop() + $(window).height();
    if( y > x ){
        $(this).fadeIn(6000).removeClass('hidden');
        }
      });

  $('.small-icon').each( function(i){
    var x = $(this).offset().top + $(this).outerHeight();
    var y = $(window).scrollTop() + $(window).height();
    if( y > x ){
        $(this).animate({'opacity':'1', 'margin-left':'20%'},500);
        }
      });

  $('.animation-text').each( function(i){
    var x = $(this).offset().top + $(this).outerHeight();
    var y = $(window).scrollTop() + $(window).height();
    if( y > x ){
        $(this).animate({'opacity':'1', 'margin-left':'0%'},500);
        }
      });

  $('.contact-us-girl').each( function(i){
    var x = $(this).offset().top + $(this).outerHeight();
    var y = $(window).scrollTop() + $(window).height();
    if( y > x ){
        $(this).animate({'opacity':'1', 'margin-left':'20%'},1000);
        }
      });

  $('.about-us-align-text').each( function(i){
    var x = $(this).offset().top + $(this).outerHeight();
    var y = $(window).scrollTop() + $(window).height();
    if( y > x ){
        $(this).animate({'opacity':'1', 'margin-left':'0%'},1000);
        }
      });

  $('.card').each( function(i){
    var x = $(this).offset().top + $(this).outerHeight();
    var y = $(window).scrollTop() + $(window).height();
    if( y > x ){
        $(this).animate({'opacity':'1', 'top': '0%'},1000);
        }
      });


  });
