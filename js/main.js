$(document).ready(function() {
	$('.advantageSlider').slick({
		infinite: false,
		slidesToShow: 5,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		responsive: [
			{
				breakpoint: 6000,
				settings: "unslick"
			},
			{
				breakpoint: 960,
				settings: {
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: false,
					dotsClass: "my-dotsDark",
				}
			}
		]
	});	
	$('.buildingObjectsSlider').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: false,
		dotsClass: "my-dots",
		prevArrow: '.prev2',
		nextArrow: '.next2',
		responsive: [
			{
				breakpoint: 960,
				settings: {
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					prevArrow: '.prev2',
					nextArrow: '.next2'
				}
			}
		]
	});
	$('.headSlider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		dotsClass: "my-dots",
		prevArrow: '.prev1',
		nextArrow: '.next1'
	});
	$('.bestsellers').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: true,
		dotsClass: "my-dots-blue",
		prevArrow: '.prev2',
		nextArrow: '.next2',
		responsive: [
			{
				breakpoint: 960,
				settings: {
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					prevArrow: '.prev2',
					nextArrow: '.next2'
				}
			}
		]
	});
	$('.commentsSlider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		dotsClass: "my-dots",
		prevArrow: '.prev2',
		nextArrow: '.next2',
		responsive: [
			{
				breakpoint: 960,
				settings: {
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					prevArrow: '.prev2',
					nextArrow: '.next2'
				}
			}
		]
	});
	$('.brandsSlider').slick({
		infinite: false,
		slidesToShow: 5,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		responsive: [
			{
				breakpoint: 6000,
				settings: "unslick"
			},
			{
				breakpoint: 960,
				settings: {
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: false,
					dotsClass: "my-dotsDark",
				}
			}
		]
	});
	$('.productsSlider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		dotsClass: "my-dots",
		prevArrow: '.prev2',
		nextArrow: '.next2',
		responsive: [
			{
				breakpoint: 960,
				settings: {
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					prevArrow: '.prev2',
					nextArrow: '.next2'
				}
			}
		]
	});
	

	$('.product-description').click(function(){
		$(this).addClass('active');
		$('.product-specifications').removeClass('active');
		$('.product-specifications-text').css('display', 'none');
		$('.product-description-text').css('display', 'block');
	});
	$('.product-specifications').click(function(){
		$(this).addClass('active');
		$('.product-description').removeClass('active');
		$('.product-specifications-text').css('display', 'block');;
		$('.product-description-text').css('display', 'none');
	});

	$(function() {
		$(window).scroll(function() {
			if($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		});
		$('#toTop').click(function() {
			$('body,html').animate({scrollTop:0},10);
		});
	});

});