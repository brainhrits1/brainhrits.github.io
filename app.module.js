'use strict';

var app = angular.module('app',[
  'app.layout',
  'app.aboutUs',
  'app.services',
  'app.careers',
  'app.login',
  'app.contactUs',
  'ngAnimate'
]);

/*owl carousel slide show */

$(document).ready(function(){
  $('.owl-carousel').owlCarousel(
    {
      items: 1,
      autoplay: true,
      lazyLoad:true,
      autoplayTimeout: 20000,
      smartSpeed: 600,
      loop: true,
    });
});

/* scroll to top button functions */

window.onscroll = function() {scrollFunction();};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById('bhrGoTopButton').style.display = 'block';
    } else {
        document.getElementById('bhrGoTopButton').style.display = 'none';
    }
}
