var $j=jQuery.noConflict();

window.addEventListener("load", function(){
    $j(".spinner-container").fadeOut(1000, function() {
        $j(".page-wrapper").fadeIn(500);        
    });  
});