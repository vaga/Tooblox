function errorHandler(msg) {

   $('#error-msg').html(msg);
   $('#error-msg').fadeIn(800).delay(1500).fadeOut(800);
}


$(document).ready(function() {
    $("#tools").autocomplete({
        source: tools
    });
});
