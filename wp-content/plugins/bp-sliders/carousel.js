(function($) {
$(window).on('load', function () {
    console.log("loaded plugin");

    var sliders = [];

    $('.team-swiper').each(function(index, element){

        $(this).addClass('s'+index);
        var parent = $(this).closest(".team-swiper-carousel");
        var nextButton = ".swipper-nav-next-team-" + index;
        var prevButton = ".swipper-nav-prev-team-" + index;
        var navPagination = ".swipper-nav-pagination-team-" + index;
        parent.find(".swiper-button-next").addClass("swipper-nav-next-team-" + index);
        parent.find(".swiper-button-prev").addClass("swipper-nav-prev-team-" + index);
        parent.find(".swiper-pagination").addClass("swipper-nav-pagination-team-" + index);

        var slider = new Swiper('.s'+index, { 
            slidesPerView : 4,
            width: 1522,
            autoResize: false,
            spaceBetween: 25,
            loop: false,
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


  const speed = 1000;

    $('a.arrow-down')
      .filter((i, a) => a.getAttribute('href').startsWith('#') || a.href.startsWith(`${location.href}#`))
      .unbind('click.smoothScroll')
      .bind('click.smoothScroll', event => {
        const targetId = event.currentTarget.getAttribute('href').split('#')[1];
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
          event.preventDefault();
          $('html, body').animate({ scrollTop: $(targetElement).offset().top }, speed);
        }
      });
});


})( jQuery );

