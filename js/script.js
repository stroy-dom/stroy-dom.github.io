$(document).ready(function(){
	$('.slider').slick({
		arrows:true,
		dots:true,
		slidesToShow:3,
		autoplay:true,
		speed:1000,
		autoplaySpeed:1800,
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

