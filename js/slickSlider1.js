$(document).ready(function(){
	$('.slider').slick({
		arrows:false,
		dots:true,
		slidesToShow:1,
		centerMod: true,
		autoplay:true,
		speed:1000,
		autoplaySpeed:3000
		// responsive:[
		// 	{
		// 		breakpoint: 768,
		// 		settings: {
		// 			slidesToShow:2
		// 		}
		// 	},
		// 	{
		// 		breakpoint: 550,
		// 		settings: {
		// 			slidesToShow:1
		// 		}
		// 	}
		// ]
	});
	$('.product-slider').slick({
		arrows:true,
		dots: false,
		slidesToShow:4,
		// centerMod: true,
		autoplay:false,
		speed:1000,
		autoplaySpeed:3000,
		responsive:[
         {
            breakpoint: 1080,
            settings: {
               slidesToShow: 3
            }
         },
         {
            breakpoint: 991.98,
            settings: {
               slidesToShow: 2
            }
         },
			{
				breakpoint: 768,
				settings: {
					// slidesToShow:2
				}
			},
			{
				breakpoint: 550,
				settings: {
					// slidesToShow:1
				}
			}
		]
	});
});

