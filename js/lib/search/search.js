(function( $ ) {
  'use strict';

  $(document).ready(function(){
    var submitIcon = $('.search__form--icon');
    var inputBox = $('.search__form--input');
    var searchBox = $('.search__form, .header__aside-search');
    var isOpen = false;
    submitIcon.click(function(){
      console.log('click');
      if(isOpen === false){
        searchBox.addClass('search__form-open');
        inputBox.focus();
        isOpen = true;
      } else {
        searchBox.removeClass('search__form-open');
        inputBox.focusout();
        isOpen = false;
      }
    }); 
    submitIcon.mouseup(function(){
      return false;
    });
      searchBox.mouseup(function(){
      return false;
    });
    $(document).mouseup(function(){
      if(isOpen === true){
        $('.search__form--icon').css('display','block');
        submitIcon.click();
      }
    });
   });
  function buttonUp(){
    var inputVal = $('.search__form--input').val();
    inputVal = $.trim(inputVal).length;
    if( inputVal !== 0){
      $('.search__form--icon').css('display','none');
    } else {
      $('.search__form--input').val('');
      $('.search__form--icon').css('display','block');
    }
  }
})( jQuery );