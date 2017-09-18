var $j=jQuery.noConflict();

window.addEventListener('scroll', function(e){
  var distanceY = window.pageYOffset || document.documentElement.scrollTop,
      shrinkOn = 100,
      header = $j("header");
  if (distanceY > shrinkOn) {
      header.addClass('header--small');
      header.addClass('header--charcoal');
      header.addClass('header--white-text');
  } else {
      if ( header.hasClass('header--small') ) {
          header.removeClass('header--small');
      }
      if ( header.hasClass('header--charcoal') ) {
          header.removeClass('header--charcoal');
      }
      if ( header.hasClass('header--white-text') ) {
          header.removeClass('header--white-text');
      }
  }
});




