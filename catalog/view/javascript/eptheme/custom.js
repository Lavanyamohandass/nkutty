/* responsive menu */
function openNav() {
    $('body').addClass("active");
    document.getElementById("mySidenav").style.width = "280px";
}
function closeNav() {
    $('body').removeClass("active");
    document.getElementById("mySidenav").style.width = "0";
}

 /* loader */
$(window).load(function myFunction() {
  $(".s-panel .loader").removeClass("wrloader");
});

//go to top
$(document).ready(function () {
    $("#common-home").parent().addClass("home-page");
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });
});


$(document).ready(function () {
    if ($(window).width() <= 991) {
        $('.curr').appendTo('.haccount');
        $('.langg').appendTo('.haccount');
        $('.catfilter').appendTo('.appres');
    }

    $('.toprightw .owl-carousel.owl-theme .owl-buttons').appendTo('.apponbtn');
});


// function openSearch() {
//     $('body').addClass("active-search");
//     document.getElementById("search").style.height = "auto";
//     $('#search').addClass("sideb");
//     // $('.search_query').attr('autofocus', 'autofocus').focus();
// }
// function closeSearch() {
//     $('body').removeClass("active-search");
//     document.getElementById("search").style.height = "0";
//     $('#search').addClass("siden");
//     // $('.search_query').attr('autofocus', 'autofocus').focus();
// }


$(document).ready(function () {
$("#ratep,#ratecount").click(function() {
    $('body,html').animate({
        scrollTop: $(".product-tab").offset().top 
    }, 1500);
});
});

/* dropdown effect of account */
$(document).ready(function () {
    if ($(window).width() <= 767) {
    $('.menusp').appendTo('.appmenu');

    $('.dropdown a.account').on("click", function(e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
}
});

$(document).ready(function () {
$('.dropdown button.test').on("click", function(e)  {
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
});
});
/* dropdown */

/* sticky header */
  if ($(window).width() >= 992) {
 $(document).ready(function(){
      $(window).scroll(function () {
        if ($(this).scrollTop() > 700) {
            $('.homemenu').addClass('fixed fadeInDown animated');
        } else {
            $('.homemenu').removeClass('fixed fadeInDown animated');
        }
      });
});
};

$(document).ready(function(){
if ($(document).width() >= 1560){
     var count_block = $('.site-nav .moremenu').length;
     var number_blocks = 10;
     if(count_block < number_blocks){
          return false; 
     } else {
          
          $('.site-nav .moremenu').each(function(i,n){
                if(i == number_blocks) {
                     $('.site-nav').append('<li class="view_more"><a class="dropdown-item"><i class="fa fa-plus thumb_img"></i>More</a></li>');
                }
                if(i> number_blocks) {
                     $(this).addClass('wr_hide_menu');
                }
          })
          $('.wr_hide_menu').hide();
          $('.view_more').click(function() {
                $(this).toggleClass('active');
                $('.wr_hide_menu').slideToggle();
          });
     }
}
});

$(document).ready(function(){
if (($(document).width() >= 1410) && ($(document).width() <= 1559)){
     var count_block = $('.site-nav .moremenu').length;
     var number_blocks = 9;
     if(count_block < number_blocks){
          return false; 
     } else {
          
          $('.site-nav .moremenu').each(function(i,n){
                if(i == number_blocks) {
                     $('.site-nav').append('<li class="view_more"><a class="dropdown-item"><i class="fa fa-plus thumb_img"></i>More</a></li>');
                }
                if(i> number_blocks) {
                     $(this).addClass('wr_hide_menu');
                }
          })
          $('.wr_hide_menu').hide();
          $('.view_more').click(function() {
                $(this).toggleClass('active');
                $('.wr_hide_menu').slideToggle();
          });
     }
}
});

$(document).ready(function(){
if (($(document).width() >= 1200) && ($(document).width() <= 1409)){
     var count_block = $('.site-nav .moremenu').length;
     var number_blocks = 7;
     if(count_block < number_blocks){
          return false; 
     } else {
          
          $('.site-nav .moremenu').each(function(i,n){
                if(i == number_blocks) {
                     $('.site-nav').append('<li class="view_more"><a class="dropdown-item"><i class="fa fa-plus thumb_img"></i>More</a></li>');
                }
                if(i> number_blocks) {
                     $(this).addClass('wr_hide_menu');
                }
          })
          $('.wr_hide_menu').hide();
          $('.view_more').click(function() {
                $(this).toggleClass('active');
                $('.wr_hide_menu').slideToggle();
          });
     }
}
});

$(document).ready(function(){
if (($(document).width() >= 992) && ($(document).width() <= 1199)){
     var count_block = $('.site-nav .moremenu').length;
     var number_blocks = 8;
     if(count_block < number_blocks){
          return false; 
     } else {
          
          $('.site-nav .moremenu').each(function(i,n){
                if(i == number_blocks) {
                     $('.site-nav').append('<li class="view_more"><a class="dropdown-item"><i class="fa fa-plus thumb_img"></i>More</a></li>');
                }
                if(i> number_blocks) {
                     $(this).addClass('wr_hide_menu');
                }
          })
          $('.wr_hide_menu').hide();
          $('.view_more').click(function() {
                $(this).toggleClass('active');
                $('.wr_hide_menu').slideToggle();
          });
     }
}
});

$(document).ready(function(){
if (($(document).width() >= 768) && ($(document).width() <= 991)){
     var count_block = $('.site-nav .moremenu').length;
     var number_blocks = 5;
     if(count_block < number_blocks){
          return false; 
     } else {
          
          $('.site-nav .moremenu').each(function(i,n){
                if(i == number_blocks) {
                     $('.site-nav').append('<li class="view_more"><a class="dropdown-item"><i class="fa fa-plus thumb_img"></i>More</a></li>');
                }
                if(i> number_blocks) {
                     $(this).addClass('wr_hide_menu');
                }
          })
          $('.wr_hide_menu').hide();
          $('.view_more').click(function() {
                $(this).toggleClass('active');
                $('.wr_hide_menu').slideToggle();
          });
     }
}
});

$(document).ready(function(){

    $('.img-thumb').click(function () {

     var src = $(this).attr('src');
     console.log($(this).closest(".product-thumb").find('.js-product-cover').attr('src',src));
    });
});

$(document).ready(function() {
    // category new
    $('#cat-img').owlCarousel({
      loop:false,
      dots:false,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          320:{
              items:1
          },
          600:{
              items:2
          },
          768:{
              items:2
          },
          992:{
              items:2
          },
          1200:{
              items:3
          },
          1410:{
              items:4
          }
      }
    })

    // feature, best, latest, related product
    $('#feature, #best, #latest, #related').owlCarousel({
      loop:false,
      dots:false,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          320:{
              items:2
          },
          400:{
              items:2
          },
          600:{
              items:3
          },
          768:{
              items:3
          },
          992:{
              items:3
          },
          1200:{
              items:4
          },
          1410:{
              items:5
          }
      }
    })

    // special product
    $('#special, #onsale, #toprate').owlCarousel({
      loop:false,
      dots:false,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          320:{
              items:2
          },
          400:{
              items:2
          },
          600:{
              items:3
          },
          768:{
              items:3
          },
          992:{
              items:1
          },
          1200:{
              items:1
          },
          1410:{
              items:2
          }
      }
    })

    // gallery_01 product
    $('#gallery_01').owlCarousel({
      loop:false,
      dots:false,
      nav:true,
      responsive:{
          0:{
              items:2
          },
          320:{
              items:3
          },
          600:{
              items:4
          },
          768:{
              items:3
          },
          992:{
              items:4
          },
          1200:{
              items:4
          },
          1410:{
              items:4
          }
      }
    })

    // testi
    $('#testi').owlCarousel({
      loop:false,
      dots:false,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          320:{
              items:2
          },
          400:{
              items:2
          },
          600:{
              items:3
          }
      }
    })

    // timer product
    $('#count').owlCarousel({
      loop:false,
      dots:false,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          320:{
              items:1
          },
          400:{
              items:1
          },
          768:{
              items:2
          },
          992:{
              items:2
          },
          1200:{
              items:2
          },
          1410:{
              items:3
          }
      }
    })

    // blog
    $('#blog').owlCarousel({
      loop:false,
      dots:false,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          320:{
              items:1
          },
          400:{
              items:1
          },
          600:{
              items:2
          },
          768:{
              items:2
          },
          992:{
              items:3
          },
          1200:{
              items:3
          },
          1410:{
              items:4
          }
      }
    })

    // category-tab product
    $('.tab-content .tab-pane #cattab, .tab-content .tab-pane #cattab2, .tab-content .tab-pane #cattab3').owlCarousel({
      loop:false,
      dots:false,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          320:{
              items:2
          },
          400:{
              items:2
          },
          600:{
              items:3
          },
          768:{
              items:2
          },
          992:{
              items:2
          },
          1200:{
              items:2
          },
          1410:{
              items:3
          }
      }
    })
   
    if ($(document).width() > 767){
        var count_block = $('.tabpro .webTab').length;
        var number_blocks = 4;
        if(count_block < number_blocks){
             return false; 
        } else {
             $('.tabpro .webTab').each(function(i,n){
                $('tabpro .webTab').addClass(i);
                if(i == number_blocks) {
                $('#catli').append('<li class="view_more webTab"><a>+ More</a></li>');
                }
                if(i> number_blocks) {
                $(this).addClass('it_hide_wbtab_main').hide();
                }
            });
            $('.view_more').click(function() {
                $(this).toggleClass('active');
                $('.it_hide_wbtab_main').slideToggle();
            });
        }
    }

    if ($(document).width() > 767){
        var count_block = $('.tabpro .webTab2').length;
        var number_blocks = 4;
        if(count_block < number_blocks){
             return false; 
        } else {
             $('.tabpro .webTab2').each(function(i,n){
                $('tabpro .webTab2').addClass(i);
                if(i == number_blocks) {
                $('#catli2').append('<li class="view_more2 webTab2"><a>+ More</a></li>');
                }
                if(i> number_blocks) {
                $(this).addClass('it_hide_wbtab_main2').hide();
                }
            });
            $('.view_more2').click(function() {
                $(this).toggleClass('active');
                $('.it_hide_wbtab_main2').slideToggle();
            });
        }
    }

    if ($(document).width() > 767){
        var count_block = $('.tabpro .webTab3').length;
        var number_blocks = 4;
        if(count_block < number_blocks){
             return false; 
        } else {
             $('.tabpro .webTab3').each(function(i,n){
                $('tabpro .webTab3').addClass(i);
                if(i == number_blocks) {
                $('#catli3').append('<li class="view_more3 webTab3"><a>+ More</a></li>');
                }
                if(i> number_blocks) {
                $(this).addClass('it_hide_wbtab_main3').hide();
                }
            });
            $('.view_more3').click(function() {
                $(this).toggleClass('active');
                $('.it_hide_wbtab_main3').slideToggle();
            });
        }
    }

});

$(document).ready(function(){
  $('.heading').html(function(i, html){
     return html.replace(/(\w+\s)/, '<strong class="headfirst">$1</strong>')
  })
});