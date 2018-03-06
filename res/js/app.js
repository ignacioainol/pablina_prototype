$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        autoplay:true,
        autoplayTimeout:6000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1,
                nav:false,
                navText: ["Anterior","Siguiente"]
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                nav:false,
                navText: ["<i class='fas fa-chevron-circle-left fa-3x'></i>","<i class='fas fa-chevron-circle-right fa-3x'></i>"]
            }
        }
    });
});