jQuery(document).ready(function() {
	//homepage slideshow

 	// Optimalisation: Store the references outside the event handler:
    var $window = $(window);

   // function checkWidth() {
        //var windowsize = $window.width();
        //if (windowsize > 600) {
            //if the window is greater than 600px wide then turn on slideshow.
           var slideIndex = 0;
		   function carousel() {
			   var i;
			   var slide = $(".homeSlide");
			     for (i = 0; i < slide.length; i++) {
			      slide[i].style.opacity = "0"; 
			      slide[i].style.visibility  = "hidden"; 
			    }

			    slideIndex++;
			      if (slideIndex > slide.length) {slideIndex = 1} 
			   	//slide[slideIndex-1].addClass("showSlide");
			    slide[slideIndex-1].style.opacity = "1"; 
				slide[slideIndex-1].style.visibility = "visible";

			   setTimeout(carousel, 4000); // Change image every 4 seconds 
			}
			carousel();
     //   }
    //} to check window size
    // Execute on load
   // checkWidth();
    // Bind event listener
    //$(window).resize(checkWidth);

});

