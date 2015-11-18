// jQuery Hover Delay 1.1.0 (20130401)
// By John Terenzio | http://terenz.io/ | MIT License
(function($) {

  'use strict';

  // original hover method
  var oldHover = $.fn.hover,

  // enhanced hover method
  newHover = function(handlerIn, handlerOut, delay) {

    return this.each(function() {

      var timeout,

      handler = function(el, fn, e) {
        if (timeout) {
          timeout = window.clearTimeout(timeout); // also set timeout to undefined
        } else {
          timeout = window.setTimeout(function() {
            timeout = undefined;
            fn.call(el, e);
          }, delay);
        }
      };

      $(this).on('mouseenter mouseleave', function(e) {
        handler(this, e.type === 'mouseenter' ? handlerIn : handlerOut, e);
      });

    });

  };

  // call either original hover method or new hover method depending on
  // whether a delay argurment was passed, can take one or two handlers
  $.fn.hover = function(/* arguments */) {

    var args = Array.prototype.slice.call(arguments);

    if (args.length === 3 && typeof args[2] === 'number') {
      return newHover.apply(this, args);
    } else if (args.length === 2 && typeof args[1] === 'number') {
      return newHover.call(this, args[0], args[0], args[1]);
    }
    return oldHover.apply(this, args);

  };

})(window.jQuery);
(function( $ ) {
	'use strict';

	$(function() {
		var menuItem = $('.primary-nav .nav li.menu-item-has-children'),
				subMenu = $('li.menu-item-has-children ul');
		menuItem.hover( function() {
			$(this).find(subMenu).delay(100).slideToggle();
		}, 300);
    $('.header__aside-menu').on('click', function() {
      $('#primary-nav').slideToggle();
    });
    $(window).resize(function() {
      if ($(window).width() >= 1090) {
         $('.primary-nav').css({'display': 'inline-block'})
      } else {
        $('.primary-nav').css({'display': 'none'})
     }
    });

	});

})( jQuery );