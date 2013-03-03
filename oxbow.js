$(document).ready(function() {

	var showSlides = function slideshow(folderName, numImages) {
		var image = $('.slide');
		for(var i=0; i < numImages; i++) {
			image.src="http://theoxbow.com/" + folderName + "/" + i + ".jpg";
		}
	}

});