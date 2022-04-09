import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';

require('./bootstrap');


$(function(){
  $("#show").delay(4000).fadeOut(1000);

  $(window).on('scroll', function(){
      document.getElementById('searchInput1').classList.remove('active');
      document.getElementById('searchInput').classList.remove('active');
  });
});

window.searchInputFocus =  function(){
  var element = document.getElementById('searchInput');
  element.classList.toggle('active'); 
};


window.searchInputFocus1 =  function(){
  var element = document.getElementById('searchInput1');
  element.classList.toggle('active'); 
};