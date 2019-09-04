$(function() {
  var main_nav__menu = $('.main_nav__menu');
  var button = $('.main_nav__openicon, .main_nav__menu');
  button.on('click', function(){
    main_nav__menu.toggleClass('active');
  });
});
