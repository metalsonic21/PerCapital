/*
    Project Name : Specialists
    Author Company : SpecThemes
    Project Date: 25 june, 2017
    Template Developer: vsafaryan50yan@gmail.com
*/


/*
==============================================
TABLE OF CONTENT
==============================================

1. Swipe Slider
2. Owl Carousels
3. CountUp
4. Hover Drop Down
5. Tabs
6. Video Modal
7. Preloader
8. Scroll To Top
9. Isotop
10. Typed Text
11. Google Maps
12. WOW

==============================================
[END] TABLE OF CONTENT
==============================================
*/




$(document).ready(function() {

/*------------------------------------
    1. Swipe Slider
--------------------------------------*/

  var swiper = new Swiper('.swiper-container', {
      pagination: '.swiper-pagination',
      nextButton: '.swiper-button-next',
      prevButton: '.swiper-button-prev',
      slidesPerView: 1,
      paginationClickable: true,
      spaceBetween: 30,
      loop: true,
      autoplay: 4000,
  });


/*------------------------------------
    2. Owl Carousel
--------------------------------------*/  


/*---------------------
Our Services carousel
-----------------------*/

  $('#our-services-carousel').owlCarousel({
    loop: false,
    nav: false,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        margin: 15,
      },
      600: {
        items: 2,
        margin: 0,
      },
      1000: {
        items: 3,
        margin: 0,
      }
    }
  })




/*---------------------
Project carousel
-----------------------*/

  $('#project-carousel').owlCarousel({
    loop: true,
    nav: false,
    responsiveClass: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    responsive: {
      0: {
        items: 1,
        margin: 15,
      },
      600: {
        items: 2,
        margin: 15,
      },
      1000: {
        items: 4,
        margin: 30,
      }
    }
  })


/*---------------------
Testmonials carousel
-----------------------*/

  $('#testmonials-carousel').owlCarousel({
    loop: false,
    nav: false,    
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        margin: 15,
      },
      600: {
        items: 1,
        margin: 0,
      },
      1000: {
        items: 2,
        margin: 0,
      }
    }
  })


/*---------------------
Team members carousel
-----------------------*/

  $('#team-members-carousel').owlCarousel({
    loop: false,
    nav: false,   
    margin: 90, 
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 4,
      }
    }
  })


/*---------------------
Partners carousel
-----------------------*/

  $('#our-partners').owlCarousel({
    loop: true,
    nav: false,   
    dots: false,
    responsiveClass: true,
    // margin: 100,
    responsive: {
      0: {
        items: 2,
        margin: 15,
      },
      600: {
        items: 3,
        margin: 15
      },
      1000: {
        items: 5,
        margin: 15
      }
    }
  })


/*------------------------------------
    3. CountUp
--------------------------------------*/  

    $('.countup').counterUp({
        delay: 5,
        time: 2000
    });


/*------------------------------------
    4. Hover Drop Down
--------------------------------------*/    

if ($(window).width() > 767) {
  $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
  }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
  });
}


/*------------------------------------
    5. Tabs
--------------------------------------*/    

  $('.tabs_animate').tabslet({
    mouseevent: 'click',
    attribute: 'href',
    animation: true
  });


/*------------------------------------
    6. Video Modal
--------------------------------------*/ 

  $('#videomodal').on('hidden.bs.modal', function() {
    var $this = $(this).find('iframe'),
      tempSrc = $this.attr('src');
    $this.attr('src', "");
    $this.attr('src', tempSrc);
  });

  $('#videomodal').on('hidden.bs.modal', function() {
    var html5Video = document.getElementById("htmlVideo");
    if (html5Video != null) {
      html5Video.pause();
      html5Video.currentTime = 0;
    }
  });


/*------------------------------------
    7. Preloader
--------------------------------------*/ 

  $('#preloader').fadeOut('normall', function() {
      $(this).remove();
  });


/*------------------------------------
    8. Scroll To Top
--------------------------------------*/ 

    $(window).scroll(function(){
        if($(this).scrollTop() > 500) {
            $(".scroll-to-top").fadeIn(400);
            
        } else {
            $(".scroll-to-top").fadeOut(400);
        }
    });
 
    $(".scroll-to-top").click(function(event){
        event.preventDefault();
        $("html, body").animate({scrollTop: 0},600);
    });



});



/*------------------------------------
    9. Isotop
--------------------------------------*/  

// external js: isotope.pkgd.js
// init Isotope
var $grid = $('.isotope-grid').isotope({
  itemSelector: '.isotope-item',
  layoutMode: 'fitRows',
  getSortData: {
    name: '.name',
    symbol: '.symbol',
    number: '.number parseInt',
    category: '[data-category]',
    weight: function( itemElem ) {
      var weight = $( itemElem ).find('.weight').text();
      return parseFloat( weight.replace( /[\(\)]/g, '') );
    }
  }
});

// filter functions
var filterFns = {
  // show if name ends with -ium
  ium: function() {
    var name = $(this).find('.name').text();
    return name.match( /ium$/ );
  }
};

// bind filter button click
$('#filters').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});


// change is-checked class on buttons
$('.latest-projects').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});




/*------------------------------------
    10. Typed Text
--------------------------------------*/ 
document.addEventListener('DOMContentLoaded', function(){

    Typed.new("#typed", {
        stringsElement: document.getElementById('typed-strings'),
        typeSpeed: 30,
        backDelay: 500,
        loop: false,
        contentType: 'html', // or text
        // defaults to null for infinite loop
        loopCount: null,
        callback: function(){ foo(); },
        resetCallback: function() { newTyped(); }
    });

    var resetElement = document.querySelector('.reset');
    if(resetElement) {
        resetElement.addEventListener('click', function() {
            document.getElementById('typed')._typed.reset();
        });
    }

});

function newTyped(){ /* A new typed object */ }

function foo(){ console.log("Callback"); }



/*------------------------------------
    11. Google Maps
--------------------------------------*/ 

function initMap() {
  // Create a new StyledMapType object, passing it an array of styles,
  // and the name to be displayed on the map type control.
  var styledMapType = new google.maps.StyledMapType(
  [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#46bcec"
            },
            {
                "visibility": "on"
            }
        ]
    }
  ],
  
  {name: 'Styled Map'});

  // Create a map object, and include the MapTypeId to add
  // to the map type control.
  var myLatlng = new google.maps.LatLng(51.5165957,-0.1277179);
  var mapOptions = {
    zoom: 12,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById("map"), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      title:"Hello World!"
  });

  // To add the marker to the map, call setMap();
  marker.setMap(map);

  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('styled_map', styledMapType);
  map.setMapTypeId('styled_map');
}



/*------------------------------------
    12. WOW
--------------------------------------*/ 
new WOW().init();