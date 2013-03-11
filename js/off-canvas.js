$(document).ready(function(){
	var pagebody = $("#main-pad");
	var themenu  = $("#navmenu");
	var topbar   = $("#toolbarnav");
	var viewport = {
    	width  : $(window).width(),
    	height : $(window).height()
	};	// retrieve variables as 
		// viewport.width / viewport.height
	
	function openme() { 
		$(function () {
		    topbar.animate({
		       left: "250px"
		    }, { duration: 300, queue: false });
		    pagebody.animate({
		       left: "250px"
		    }, { duration: 300, queue: false });
		});
	}
	
	function closeme() {
		var closeme = $(function() {
	    	topbar.animate({
	            left: "0px"
	    	}, { duration: 180, queue: false });
	    	pagebody.animate({
	            left: "0px"
	    	}, { duration: 180, queue: false });
		});
	}
	
	// checking whether to open or close nav menu
	$("#menu-btn").live("click", function(e){
		e.preventDefault();
		var leftval = pagebody.css('left');
		if(leftval == "0px") {
			openme();
		}
		else { 
			closeme(); 
		}
	});

});
