var $j=jQuery.noConflict();

$j(window).load(function() {
  $j('.portfolio-card').hover(function() {

    $j(this).find('.portfolio-card__description').stop().animate({
      height: "toggle",
      opacity: "toggle"
    }, 300);

  });
});