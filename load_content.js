$(document).ready(function(){

	/*  This is where the information displayed gets loaded based on which
	 *  tab is selected. The newhash variable assigns each tab with a 
	 *  different name, giving it the ability to load new information on
	 *  one section of the page without reloading the entirety of the page.
	 */	
	var newhash = "",
		$content = $("#content"),
		$wrapper = $("#wrapper"),
		baseHeight = 0,
		$el;
		
		$wrapper.height($wrapper.height());
		$baseHeight = $("#wrapper").height()
		
	$("body").delegate("a", "click", function() {
    	window.location.hash = $(this).attr("href");
        return false;
    });
	
	$(window).bind('hashchange', function(){

		newHash = window.location.hash.substring(1);
		
		if (newHash) {
			$wrapper
				.find("#guts")
				.fadeOut(200, function(){ 
				$content.hide().load("templates/" + newHash + "#guts", function(){
					$content.fadeIn(200, function(){
						$content.animate({
							//height: 932 +"px"
						});
					});
					$(".wrapper a").removeClass("current");
                    $(".wrapper a[href="+newHash+"]").addClass("current");
				});newHash});newHash};
	});
	$(window).trigger('hashchange');
});
	
