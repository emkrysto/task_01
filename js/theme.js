var slider = tns({
	container: '.slider-container',
	mode: 'carousel',
	gutter: 70,
	items: 4,
	//fixedWidth: 300,
	autoWidth: true,
	slideBy: 'page',
	nav: false,
	controlsText: [
		'&#8592;', 
		'&#8594;'
	],
	autoplay: true,
	speed: 400,
	autoplayTimeout:5000,
	autoplayHoverPause: true,
	autoplayButtonOutput: false,
	mouseDrag: true,
	swipeAngle: false,
	responsive: {
		0: {
			gutter: 20,
			items: 2,
		},
		640: {
			gutter: 10,
			items: 3,
		},
		900: {
			gutter: 30,
			items: 3,
		},
		1024: {
			gutter: 90,
			items: 3,
		},
		1440: {
			gutter: 110,
			items: 4
		}
	}
});