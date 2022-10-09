$(document).ready(function () {

    $(".burger").on("click", function () {
        $('.mobile-menu').addClass("active");
    });

    $(".close").on("click", function () {
        $('.mobile-menu').removeClass("active");
    });

    $(".mobile-item").on("click", function () {
        $('.mobile-menu').removeClass("active");
    });

    $('.nav-item').on('click', function (e) {

        const header = $('header').height();

        console.log(header);
        $('html,body').stop().animate({scrollTop: $(e.target.hash).offset().top - header}, 500);
        e.preventDefault();
    });

    $(".item-1, .item-2, .item-3, .btn-white, .btn-outline, .btn-service").on("click", function () {
        $('.out-form').addClass("active");
    });

    $(".close-form").on("click", function () {
        $('.out-form').removeClass("active");
    });
});