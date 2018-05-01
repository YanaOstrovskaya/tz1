(function($, undefined){
	$(function(){
	    
		$(document).on('click','#commentButton', function(event){
    if( $(event.target).closest("#comment").length ) 
    return;
    $("#comment").slideUp("slow");
    event.stopPropagation();
});
$(document).on('click','#commentButton', function() {
        $(this).siblings("#comment").slideToggle("slow");
        return false;
    });

});
})(jQuery);