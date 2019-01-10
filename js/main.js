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
		dots: true,
		dotsClass: "my-dots-blue",
		prevArrow: '.prev5',
		nextArrow: '.next5',
		responsive: [
			{
				breakpoint: 960,
				settings: {
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					prevArrow: '.prev5',
					nextArrow: '.next5'
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
		dots: true,
		dotsClass: "my-dots-blue",
		prevArrow: '.prev3',
		nextArrow: '.next3',
		responsive: [
			{
				breakpoint: 960,
				settings: {
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					prevArrow: '.prev3',
					nextArrow: '.next3'
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
		prevArrow: '.prev4',
		nextArrow: '.next4',
		responsive: [
			{
				breakpoint: 960,
				settings: {
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					prevArrow: '.prev4',
					nextArrow: '.next4'
				}
			}
		]
	});
	//иконка бургера
	const menuFive = document.querySelector('.menuFive');
	 function addClassFunFive() {
        this.classList.toggle("clickMenuFive");
    }
	menuFive.addEventListener('click', addClassFunFive);

	$('.searchIcon').click(function(){
		$('.searchIconDiv').css('display', 'none');
		$('.mobileLogoDiv').css('display', 'none');
		$('.serchInputDiv').css('display', 'block');
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

	$('.signIn').click(function(){
		$(this).addClass('active');
		$('.logIn').removeClass('active');
		$('.signInForm').css('display', 'block');
		$('.logInForm').css('display', 'none');
	});
	$('.logIn').click(function(){
		$(this).addClass('active');
		$('.signIn').removeClass('active');
		$('.logInForm').css('display', 'block');
		$('.signInForm').css('display', 'none');
	});
	$('.logInText').click(function(){
		$('.logIn').addClass('active');
		$('.signIn').removeClass('active');
	});
	$('.signInText').click(function(){
		$('.signIn').addClass('active');
		$('.logIn').removeClass('active');
	});

	$('.storeToggle').click(function(){
		if($('.nav-store-sections').css('display') == "none"){
    		$('.nav-store-sections').css('display', 'block');
    		$('.topArrow').css('display', 'inline-block');
    		$('.bottomArrow').css('display', 'none');
  		} else {
  			$('.nav-store-sections').css('display', 'none');
  			$('.topArrow').css('display', 'none');
    		$('.bottomArrow').css('display', 'inline-block');
  		}
	});
	// dec и inc перепутаны
	$('.dec').click(function () {
		var $input = $(this).parent().find('input');
		$input.val(parseInt($input.val()) + 1);
		$input.change();
		return false;
	});
	$('.inc').click(function () {
		var $input = $(this).parent().find('input');
		var count = parseInt($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
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

    $('.servicesPage').ready(function() {
		$(function(){
		    service = $('.service');
		    services = [];
		    $(service).each(function(index, serviceBlock) {
		      services.push(serviceBlock);
		    });
		    $("#pager").pagination({
		      pageSize: 12,
		      dataSource: services,
		      callback: function(data, pagination) {
		        var html = simpleTemplating(data);
		        $('#data').html(html);
		      },
		      showNavigator: true,
		      className: 'paginationjs-theme-blue paginationjs-small'
		    });

		    function simpleTemplating(data) {
		        var html = '';
		        $.each(data, function(index, item){
		          var content = item.outerHTML;
		            html += content;
		        });
		        html += '';
		        return html;
		    }
		});
	});
	$('.thisStoreSubsection').ready(function() {
		$(function(){
		    service = $('.product');
		    services = [];
		    $(service).each(function(index, serviceBlock) {
		      services.push(serviceBlock);
		    });
		    $("#pagerProducts").pagination({
		      pageSize: 12,
		      dataSource: services,
		      callback: function(data, pagination) {
		        var html = simpleTemplating(data);
		        $('#productsData').html(html);
		      },
		      showNavigator: true,
		      className: 'paginationjs-theme-blue paginationjs-small'
		    });

		    function simpleTemplating(data) {
		        var html = '';
		        $.each(data, function(index, item){
		          var content = item.outerHTML;
		            html += content;
		        });
		        html += '';
		        return html;
		    }
		});
	});


});
$('.thisStoreSubsection').ready(function(){

	$('.dec2').click(function () {
		console.log('akf');
		var $input = $(this).parent().find('input');
		$input.val(parseInt($input.val()) + 1);
		$input.change();
		return false;
	});
	$('.inc2').click(function () {
		var $input = $(this).parent().find('input');
		var count = parseInt($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});
});