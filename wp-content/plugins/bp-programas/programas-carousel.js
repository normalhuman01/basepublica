(function($) {
$(window).on('load', function () {
    console.log("loaded plugin");

    var sliders = [];

    $('.programas-swiper').each(function(index, element){

        $(this).addClass('s'+index);
        var parent = $(this).closest(".programas-swiper-carousel");
        var nextButton = ".swipper-nav-next-programas-" + index;
        var prevButton = ".swipper-nav-prev-programas-" + index;
        var navPagination = ".swipper-nav-pagination-programas-" + index;
        parent.find(".swiper-button-next").addClass("swipper-nav-next-programas-" + index);
        parent.find(".swiper-button-prev").addClass("swipper-nav-prev-programas-" + index);
        parent.find(".swiper-pagination").addClass("swipper-nav-pagination-programas-" + index);

        var slider = new Swiper('.s'+index, { 
            slidesPerView : 4,
            width: 1522,
            autoResize: false,
            spaceBetween: 30,
            loop: true,
            loopedSlides : 20,
            navigation: {
              nextEl: nextButton,
              prevEl: prevButton,
            },
            pagination: {
              el: navPagination,
              clickable: true,
              dynamicBullets: true,
            },
        });

        sliders.push(slider);

    });



/*
    var swiper = new Swiper('.team-swiper', {
        slidesPerView : 4,
            width: 1485,
            autoResize: false,
            spaceBetween: 25,
            loop: true,
            loopedSlides : 20,
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
              dynamicBullets: true,
            },
       
    });

  */  
});


})( jQuery );

