$(document).ready(function () {
	$(document).on("scroll", onScroll);

	// var headerHeight = $('header').outerHeight();
		    
	//smoothscroll
	$('a[href^="#"]').on('click', function (e) {
		e.preventDefault();
		$(document).off("scroll");
		        
		$('a').each(function () {
		    $(this).removeClass('active');
		})
		$(this).addClass('active');
		      
		var target = this.hash,
		menu = target;
		$target = $(target);
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 2800, 'swing', function () {
			window.location.hash = target;
		    $(document).on("scroll", onScroll);
		});
	});
});

function onScroll(event){
	var headerHeight = $('header').outerHeight();
	var scrollPos = $(document).scrollTop();
	$('nav a').each(function () {
		var currLink = $(this);
		var refElement = $(currLink.attr("href"));
		if (refElement.position().top - headerHeight <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
		    $('nav ul li a').removeClass("active");
		    currLink.addClass("active");
		}
		else{
		    currLink.removeClass("active");
		}
	});
}