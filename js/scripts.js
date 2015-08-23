// Smooth Scroll

$('a').smoothScroll();

$(function(){
    // this will get the full URL at the address bar
    var url = window.location.href; 

    // passes on every "a" tag 
    $(".primary-menu a").each(function() {
            // checks if its the same on the address bar
        if(url == (this.href)) { 
            $(this).closest("a").addClass("active");
        }
    });

// Stellar Parallax
	//your jQuery here
	$.stellar({
        verticalScrolling: true,
        responsive: false,
		horizontalScrolling: false
	});

	// $('header').stellar();




}); //end of .ready










