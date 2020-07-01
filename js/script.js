$(document).ready(function(){
	$('.slider').slick({
		arrows:true,
		dots:false,
		slidesToShow:3,
		autoplay:true,
		speed:900,
		autoplaySpeed:3000,
		responsive:[
			{
				breakpoint: 1000,
				settings: {
					slidesToShow:2
				}
			},
			{
				breakpoint: 690,
				settings: {
					slidesToShow:1
				}

			}
		]
	});
});

