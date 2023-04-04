import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';

require('./bootstrap');


// React components
//  require('./components/react');

$(function(){
  //session message
   $("#show").delay(4000).fadeOut(1000);

  $(window).on('scroll', function(){
      // document.getElementById('searchInput1').classList.remove('active');
      document.getElementById('searchInput').classList.remove('active');
  });
});

window.searchInputFocus =  function(){
  var element = document.getElementById('searchInput');
  element.classList.toggle('active'); 
};