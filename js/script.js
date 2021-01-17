
$(document).ready(function(){

    $("#copyright").text("جميع الحقوق محفوظة | " + new Date().getFullYear());

    $("a.scroll").on('click', function (event) {

        var hash = this.hash;

        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function () {});

    });

});

