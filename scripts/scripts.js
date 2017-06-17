/*
global $
global exponea
*/

function scrollTo(id, offset, time) {
    var o = offset || 0;
    var t = time || 800;
    $('html, body').animate({
        scrollTop: $(id).offset().top - o
    }, t);
}

function isEmpty(str) {
    return (!str || 0 === str.length);
}

function validEmail(email) {
    var r = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return email.match(r);
}

var navigation = $('.navigation');
var mobileMenu = navigation.find('.hamburger');
var menu = navigation.find('.menu');

mobileMenu.click(function(e) {
    mobileMenu.toggleClass('is-active');
    menu.slideToggle(200);
});

menu.find('a').click(function(e) {
    var link = $(this);
    if (link.attr('href').indexOf('#') !== -1) {
        e.preventDefault();
        scrollTo(link.attr('href'), -40);
    }
});

$('.form__wrapper input, .form__wrapper textarea').focus(function(e) {
    $(this).parent().addClass('active');
});

$('.form__wrapper input, .form__wrapper textarea').focusout(function(e) {
    var input = $(this);
    if(input.val().length === 0) {
        input.parent().removeClass('active');
    }
});

var form = $('.form__wrapper');
var contactSubmit = form.find('.button');
var errorMessages = form.find('.errors');
var successMessages = form.find('.success');

function clearFields() {
    form.find('input, textarea').val('');
    $('.input__wrapper').removeClass('active');
}

contactSubmit.click(function(e) {
    e.preventDefault();
    errorMessages.html('');
    successMessages.html('');
    
    var name = form.find('input[name="name"]');
    var email = form.find('input[name="email"]');
    var message = form.find('textarea[name="message"]');
    var errors = [];
    
    if (isEmpty(name.val())) {
        errors.push('Name field is required.');
    } 
    if (!validEmail(email.val())) {
        errors.push('Please use valid email.');
    } 
    if (isEmpty(message.val())) {
        errors.push('Message field is required.');
    }
    
    if (errors.length === 0) {
        exponea.identify(email.val());
        exponea.update({
            email: email.val(),
            name: name.val(),
        });
        exponea.track('contact', {
            email: email.val(),
            name: name.val(),
            message: message.val()
        });
        successMessages.append('<p>Thank you, we will get back to you shortly.</p>');
        clearFields();
        
    } else {
        errors.forEach(function(error) {
            errorMessages.append('<p>' + error + '</p>');
        });
    }
});