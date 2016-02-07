var img = new Image();
	img.src = 'backgrounds/rotate.php';

var int = setInterval(function() {
	if (img.complete) {
		clearInterval(int);
		document.getElementByTagName('body')[0].style.backgroundImage = 'url(' + img.src + ')';
	}
}, 50);
