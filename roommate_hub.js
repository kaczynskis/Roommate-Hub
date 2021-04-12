window.onload = function() {
	var thumbnails = document.querySelectorAll(".thumbnail");
	var i;

	for(i = 0; i < thumbnails.length; i++) {
		thumb = thumbnails.item(i);
		source = thumbnails.item(i).src
		thumb.addEventListener("mouseover", function(event) {
			console.log("mouse over image");
			image = document.createElement("img");
			image.setAttribute("src", source);
			image.setAttribute("class", "bigImg");
			image.setAttribute("width", 100);
			image.setAttribute("height", 150);
			thumb.parentElement.appendChild(image);
			image.style.display = "";
		});
		thumb.addEventListener("mouseout", function(event) {
			console.log("mouse not over image");
			image.style.display = "none";
		});
	}
}