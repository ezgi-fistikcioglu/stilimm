/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

setTimeout(function () {
    $('.alert').slideUp(500);
}, 3000);

$.ajaxSetup({
    headers: {
        // language=JQuery-CSS
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


