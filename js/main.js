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


	$('.aboutCompanyA').click(function(){
		// $('.pages').find('.active').removeClass('active');
		$(this).addClass('active');
	})
	

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

	$('.storeBtn').click(function(){
		if($('.nav-store-sections').css('display') == "none"){
    		$('.nav-store-sections').css('display', 'block');
    		$('.topArrow').css('display', 'inline-block');
    		$('.bottomArrow').css('display', 'none');
  		} else {
  			$('.nav-store-sections').css('display', 'none');
  			$('.topArrow').css('display', 'none');
    		$('.bottomArrow').css('display', 'inline-block');
  		}


		// $('.nav-store-sections').css('display', 'block');
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

	$(function(){
    // global variables
    captchaResized = false;
    captchaWidth = 304;
    captchaHeight = 78;
    captchaWrapper = $('#formSectionCaptcha');
    captchaElements = $('#rc-imageselect, .g-recaptcha');

    resizeCaptcha();
    $(window).on('resize', function() {
            resizeCaptcha();
        });
    });

    // $(function(){
    // // global variables
    // captchaResized = false;
    // captchaWidth = 304;
    // captchaHeight = 78;
    // captchaWrapper = $('#thisEducationProgrammCaptcha');
    // captchaElements = $('#rc-imageselect, .g-recaptcha');

    // resizeCaptcha();
    // $(window).on('resize', function() {
    //         resizeCaptcha();
    //     });
    // });
    
    function resizeCaptcha() {
        if (captchaWrapper.width() >= captchaWidth) {
            if (captchaResized) {
                captchaElements.css('transform', '').css('-webkit-transform', '').css('-ms-transform', '').css('-o-transform', '').css('transform-origin', '').css('-webkit-transform-origin', '').css('-ms-transform-origin', '').css('-o-transform-origin', '');
                captchaWrapper.height(captchaHeight);
                captchaResized = false;
            }
        } else {
            var scale = (1 - (captchaWidth - captchaWrapper.width()) * (0.05/15));
            captchaElements.css('transform', 'scale('+scale+')').css('-webkit-transform', 'scale('+scale+')').css('-ms-transform', 'scale('+scale+')').css('-o-transform', 'scale('+scale+')').css('transform-origin', '0 0').css('-webkit-transform-origin', '0 0').css('-ms-transform-origin', '0 0').css('-o-transform-origin', '0 0');
            captchaWrapper.height(captchaHeight * scale);
            if (captchaResized == false) captchaResized = true;
        }
    };

    $('.servicesPage').ready(function() {
		$(function(){
		    news = $('.service');
		    newses = [];
		    $(news).each(function(index, newsBlock) {
		      newses.push(newsBlock);
		    });
		    $("#pager").pagination({
		      pageSize: 12,
		      dataSource: newses,
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

});
$('nav').ready(function(){

});