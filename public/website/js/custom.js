$(document).ready(function(){
    // Course Carousel
    $('.course-carousel').owlCarousel({
        loop:true,
        nav:true,
        autoplay:true,
        autoplayTimeout:5000,
        dots:false,
        margin: 10,
        responsive:{
            0:{
                items:1
            },
            500:{
                items:2
            },
            800:{
                items:3
            },
            992:{
                items:4
            }
        }
    });

    // Category Carousel
    $('.category-carousel').owlCarousel({
        items:2,
        loop:true,
        center:true,
        margin:15,
        nav:true,
        autoplay:false,
        autoplayTimeout:5000,
        dots:false,
        responsive:{
            900:{
                items:4
            },
            400:{
                items:2
            }
        }
    });

    // Inner Slider Carousel
    $('.inner-slider-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        nav:false,
        autoplayTimeout:10000,
        dots:false,
        responsive:{
            400:{
                items:1
            }
        }
    });

    // Testimonial Carousel
    $('.testimonial-carousel').owlCarousel({
        items:2,
        loop:true,
        autoplay:true,
        autoplayTimeout:10000,
        dots:false,
        responsive:{
            900:{
                items:3
            },
            600:{
                items:2
            },
            400:{
                items:1
            }
        }
    });

    // Testimonial Carousel
    $('.blog-carousel').owlCarousel({
        items:2,
        loop:false,
        autoplay:true,
        autoplayTimeout:5000,
        dots:false,
        responsive:{
            900:{
                items:3
            },
            600:{
                items:2
            },
            400:{
                items:1
            }
        }
    });
 
});