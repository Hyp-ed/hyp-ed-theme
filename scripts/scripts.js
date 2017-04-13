/*
global $
*/

var navigation = $('.navigation');
var mobileMenu = navigation.find('.hamburger');
var menu = navigation.find('.menu');

mobileMenu.click(function() {
    mobileMenu.toggleClass('is-active');
    menu.slideToggle(200);
});