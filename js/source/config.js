const RecommendationsSlider = {
	slider: $('.recommendations-slider'),
	init() {
		const isInit = !this.slider.hasClass('slick-initialized');
		isInit && this.slider.slick({
			slide: '.item',
			slidesToShow: 1,
			slidesToScroll: 1,
			speed: 500,
			fade: true,
			arrows: true,
			autoplay: false,
			dots: false,
			adaptiveHeight: true,
			prevArrow: '<button type="button" class="slick-prev"><span class="box"><span class="help"><span class="icon-arrow-left"></span></span></span></button>',
			nextArrow: '<button type="button" class="slick-next"><span class="box"><span class="help"><span class="icon-arrow-right"></span></span></span></button>',
			responsive: [
				{
					breakpoint: 1024,
					settings: {

					}
				},
			]
		});
	},
	destroy() {
		const isInit = this.slider.hasClass('slick-initialized');
		isInit && this.slider.slick('unslick');
	},
};
// const MovieGallerySlider = {
// 	slider: $('.movie-gallery-slider'),
// 	init() {
// 		const isInit = !this.slider.hasClass('slick-initialized');
// 		isInit && this.slider.slick({
// 			slide: '.item',
// 			slidesToShow: 2,
// 			slidesToScroll: 2,
// 			vertical: true,
// 			arrows: true,
// 			autoplay: false,
// 			infinite: false,
// 			dots: false,
// 			prevArrow: '<button type="button" class="slick-prev"><span class="box"><span class="help"><span class="icon-arrow-up"></span></span></span></button>',
// 			nextArrow: '<button type="button" class="slick-next"><span class="box"><span class="help"><span class="icon-arrow-down"></span></span></span></button>',
// 			responsive: [
// 				{
// 					breakpoint: 1024,
// 					settings: {
//
// 					}
// 				},
// 			]
// 		});
// 	},
// 	destroy() {
// 		const isInit = this.slider.hasClass('slick-initialized');
// 		isInit && this.slider.slick('unslick');
// 	},
// };

const toggleLinkText = (isActive, firstCb, secondCb) => {
	if (isActive) {
		typeof firstCb === 'function' && firstCb && firstCb();
	} else {
		typeof secondCb === 'function' && secondCb && secondCb();
	}
};

const $ = jQuery.noConflict();

/*Манипуляции со скроллом*/
function preventScrolling(selector) {
  $(selector).off('mousewheel DOMMouseScroll touchstart touchmove').on('mousewheel DOMMouseScroll touchstart touchmove', function(e) {
    var scrollTo = null;
    if (e.type == 'mousewheel') { scrollTo = (e.originalEvent.wheelDelta * -1); }
    else if (e.type == 'DOMMouseScroll') { scrollTo = 40 * e.originalEvent.detail; }
    if (scrollTo) {
      e.stopPropagation();
      e.preventDefault();
      $(this).scrollTop(scrollTo + $(this).scrollTop());
    }
  });
};

var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
  e = e || window.event;
  if (e.preventDefault)
    e.preventDefault();
  e.returnValue = false;
}

function preventDefaultForScrollKeys(e) {
  if (keys[e.keyCode]) {
    preventDefault(e);
    return false;
  }
}

function disableScroll() {
  if (window.addEventListener) // older FF
    window.addEventListener('DOMMouseScroll touchstart touchmove', preventDefault, false);
  window.onwheel = preventDefault; // modern standard
  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
  window.ontouchmove  = preventDefault; // mobile
  document.onkeydown  = preventDefaultForScrollKeys;
  $('body').addClass('overflow').css('padding-right',getScrollbarWidth());
  $('header').css('right',getScrollbarWidth());
}

function enableScroll() {
  if (window.removeEventListener)
    window.removeEventListener('DOMMouseScroll touchstart touchmove', preventDefault, false);
  window.onmousewheel = document.onmousewheel = null;
  window.onwheel = null;
  window.ontouchmove = null;
  document.onkeydown = null;
  $('body').removeClass('overflow').css('padding-right',0);
  $('header').css('right',0);
}

function getScrollbarWidth() {
  var outer = document.createElement("div");
  outer.style.visibility = "hidden";
  outer.style.width = "100px";
  outer.style.msOverflowStyle = "scrollbar"; // needed for WinJS apps

  document.body.appendChild(outer);

  var widthNoScroll = outer.offsetWidth;
  // force scrollbars
  outer.style.overflow = "scroll";

  // add innerdiv
  var inner = document.createElement("div");
  inner.style.width = "100%";
  outer.appendChild(inner);

  var widthWithScroll = inner.offsetWidth;

  // remove divs
  outer.parentNode.removeChild(outer);

  //console.log(widthNoScroll, widthWithScroll);
  return widthNoScroll - widthWithScroll;
}

const throttle = (type, name, obj) => {
	let running = false;
	const object = obj || window;
	const func = () => {
		if (running) {
			return;
		}
		running = true;
		requestAnimationFrame(() => {
			object.dispatchEvent(new CustomEvent(name));
			running = false;
		});
	};

	object.addEventListener(type, func);
};

function deviceType() {
	return window
		.getComputedStyle(document.querySelector('body'), '::before')
		.getPropertyValue('content').replace(/'/g, '').replace(/"/g, '');
}
function checkDeviceType(MQ, isMobile, isTablet, isDesktop, arrCbs) {
	if (MQ === 'desktop' && isDesktop) {
		arrCbs[0]();
	} else if (MQ === 'tablet' && isTablet) {
		arrCbs[1]();
	} else if (MQ === 'mobile' && isMobile) {
		arrCbs[2]();
	}
	//console.log('checkDeviceType:' + MQ);
}

function staticInit(mq, firstFunc, otherFunc, secFunc) {
	if (mq === 'desktop') {
		firstFunc();
	}  else if (mq === 'tablet') {
		otherFunc();
	} else if (mq === 'mobile') {
		secFunc();
	}
	// console.log('staticInit:' + mq);
}

(() => {
	const $window = $(window);
	const $document = $(document);
	const $body = $('body');
	const $html =  $('html');
	const $mobileNavBtn = $('#show-mobile-menu');
	const $mobileNav = $('#mobile-nav');
	const $mobileUserNav = $('#mobile-user-nav');
	const $mobileUserNavBtn = $('.login-wget.logined > .info');
	const $searchWrap = $('#ajax-s-container');
	let scrollTopOffset = 64;

	const Android = (navigator.userAgent.match(/Android/i) && !navigator.userAgent.match(/(Windows\sPhone)/i)) ? true : false;


	class App {
		constructor() {
			this._sliderFrontSlider = $('.front-slider');
			this._movieGallerySlider = $('.movie-gallery-slider');
			this._moviePostersSlider = $('.movie-posters-slider');
		}

		initSlickSliders = () => {
			this._sliderFrontSlider.slick({
				slide: '.item',
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				autoplay: false,
				autoplaySpeed: 4000,
				dots: true,
				variableWidth: false,
				adaptiveHeight: true,
				infinite: true,
				speed: 500,
				fade: true,
				cssEase: 'linear',
				prevArrow: '<button type="button" class="slick-prev"><span class="icon-arrow-left"></span></button>',
				nextArrow: '<button type="button" class="slick-next"><span class="icon-arrow-right"></span></button>',
				responsive: [
					{
						breakpoint: 767,
						settings: {
							slidesToScroll: 1,
							arrows: false,
						}
					},
				]
			});
			// this._movieGallerySlider.slick({
			// 	slide: '.item',
			// 	slidesToShow: 3,
			// 	slidesToScroll: 1,
			// 	vertical: true,
			// 	arrows: true,
			// 	autoplay: false,
			// 	infinite: false,
			// 	centerMode: true,
			// 	centerPadding: '0px',
			// 	dots: false,
			// 	prevArrow: '<button type="button" class="slick-prev"><span class="box"><span class="help"><span class="icon-arrow-up"></span></span></span></button>',
			// 	nextArrow: '<button type="button" class="slick-next"><span class="box"><span class="help"><span class="icon-arrow-down"></span></span></span></button>',
			// 	responsive: [
			// 		{
			// 			breakpoint: 1024,
			// 			settings: {
			// 				slidesToShow: 2,
			// 				slidesToScroll: 2,
			// 				vertical: false,
			// 				variableWidth: true,
			// 				prevArrow: '<button type="button" class="slick-prev"><span class="box"><span class="help"><span class="icon-arrow-left"></span></span></span></button>',
			// 				nextArrow: '<button type="button" class="slick-next"><span class="box"><span class="help"><span class="icon-arrow-right"></span></span></span></button>',
			// 			}
			// 		},
			// 	]
			// });

			// this._movieGallerySlider.on('afterChange', function(event, slick, currentSlide, nextSlide){
			// 	var lastSlideIndex = slick.$slides.length - 1;
			// 	var lastSlide = slick.$slides[lastSlideIndex];
			// 	slick.$slides.each(function (index) {
			// 		console.log($(this).is(':visible'));
			// 	});
			// });

			// this._movieGallerySlider.slick('slickAdd',"<div class='item empty'></div>");
			// this._movieGallerySlider.slick('slickAdd',"<div class='item empty'></div>");


			const movieGallery = this._movieGallerySlider.lightSlider({
				gallery:true,
				item: 4,
				speed: 120,
				easing: 'linear',
				loop: true,
				slideMove:1,
				vertical: true,
				controls: false,
				enableDrag: false,
				pager: false,
				verticalHeight: 720,
				galleryMargin: 12,
				prevHtml: '<span class="box"><span class="help"><span class="icon-arrow-up"></span></span></span>',
				nextHtml: '<span class="box"><span class="help"><span class="icon-arrow-down"></span></span></span>',
				responsive : [
					{
						breakpoint: 1025,
						settings: {
							item: 6,
							vertical: false,
							slideMove: 1,
							galleryMargin: 12,
						}
					},
					{
						breakpoint:480,
						settings: {
							item:2,
							slideMove:1
						}
					}
				],
				onSliderLoad: function(el) {
					el.lightGallery({
						selector: '.movie-gallery-slider .lslide',
						addClass: 'custom-lg movie-gallery',
						download: false,
						showThumbByDefault: false,
						share: false,
						controls: true,
						prevHtml: '<button class="lg-prev"><span class="box"><span class="help"><span class="icon-arrow-left"></span></span></span></button>',
						nextHtml: '<button class="lg-next"><span class="box"><span class="help"><span class="icon-arrow-right"></span></span></span></button>',
					});
				}
			});
			$('.galleryControls .slidePrev').click(function(e) {
				e.preventDefault();
				movieGallery.goToPrevSlide();
			});

			$('.galleryControls .slideNext').click(function(e) {
				e.preventDefault();
				movieGallery.goToNextSlide();
			});

			this._moviePostersSlider.slick({
				slide: '.item',
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				autoplay: false,
				autoplaySpeed: 4000,
				dots: true,
				variableWidth: false,
				adaptiveHeight: true,
				infinite: true,
				speed: 500,
				fade: true,
				cssEase: 'linear',
				prevArrow: '<button type="button" class="slick-prev"><span class="icon-arrow-left"></span></button>',
				nextArrow: '<button type="button" class="slick-next"><span class="icon-arrow-right"></span></button>',
				responsive: [
					{
						breakpoint: 767,
						settings: {
							slidesToScroll: 1,
							arrows: false,
						}
					},
				]
			});
		};

		// mobileNavBtnToggle = e => {
		// 	e.preventDefault();
		// 	console.log(this);
		// 	$mobileNavBtn.toggleClass('is-active');
		// };

		init = () => {
			const self = this;

			if (Android) {
				$('html').addClass('android');
			}

			this.searchField();

			this.customScroll();

			this.selectCustomeScroll();

			this.scrollToTop();

			this.scrollToId();

			this.initMmenu();

			this.movieRating();

			this.collectionRating();

			$(window).scroll(function(){
				if ($(this).scrollTop() > 2) {
					$('header').addClass('scrolled');
					$('.page-movie-links').addClass('scrolled');
					if ($('.js-nav').length > 0) {
						if ($(window).width() < 1280) {

							$('.js-nav').addClass('scrolled');
						}
					}
				} else {
					$('header').removeClass('scrolled');
					$('.page-movie-links').removeClass('scrolled');
					if ($('.js-nav').length > 0) {
						if ($(window).width() < 1280) {

							$('.js-nav').removeClass('scrolled');
						}
					}
				}
			});

			$('.item-gallery').lightGallery({
				addClass: 'custom-lg',
				download: false,
				showThumbByDefault: false,
				share: false,
				controls: true,
				prevHtml: '<button class="lg-prev"><span class="box"><span class="help"><span class="icon-arrow-left"></span></span></span></button>',
				nextHtml: '<button class="lg-next"><span class="box"><span class="help"><span class="icon-arrow-right"></span></span></span></button>',
			});

			$('#movieGallery, #posterGallery').lightGallery({
				addClass: 'custom-lg movie-gallery',
				download: false,
				showThumbByDefault: false,
				share: false,
				controls: true,
				prevHtml: '<button class="lg-prev"><span class="box"><span class="help"><span class="icon-arrow-left"></span></span></span></button>',
				nextHtml: '<button class="lg-next"><span class="box"><span class="help"><span class="icon-arrow-right"></span></span></span></button>',
			});

			this.openLightGallery('.btn-tralier');
			this.openLightGallery('#open-movie-gallery');
			this.openLightGallery('.field-btn-trailer > a');

			this.initSlickSliders();

      $(document).ready(function($){

        setTimeout(function () {
          $('.page-movie .field-player').addClass('hide-quality');
        }, 15000);

      });


			$(".collapse")
				.filter(function(ix,el){
					// return only the ones with min-height
					return $(el).css("min-height");
				})
				.each(function(ix, el){
					var  $el = $(el)
						// remember the original min-height
						,minHeight = $el.css("min-height");

					$el.on("hidden.bs.collapse", function(){

						$el.removeClass("collapse")
							.css({
								"overflow": "hidden"
								,"height": minHeight
							})
					});

					// collapse element on load if it has the class .collapsed
					if ($el.hasClass("collapsed"))
						$el.collapse();
				});

			$('.collapse-movie-description-btn').on('click', this.handleClickOnLinkText);
			$('.collapse-movie-info-btn').on('click', this.handleClickOnLinkText);

			$('.field-mobile-collapse-recommendations > a').on('click',function (e) {
				//console.log('collapseMobileRecommendations');
				$(this).parent().hide();
				$(this).parent().next('.btn-load-more').show();
			});

			$('.quality-filter a').click(function (e) {
				//e.preventDefault();
				$('.quality-filter li').removeClass('active');
				$(this).parent().addClass('active');
			});

			// $('#collapseMobileRecommendations').on('hidden.bs.collapse', function () {
			// 	console.log('collapseMobileRecommendations');
			// })
		};

		handleLoad = () => {};

		switchToMobile = () => {
			console.log('switchToMobile: Mobile');
			$document.foundation({
				"magellan-expedition": {
					active_class: 'active',
					threshold: -60,
					destination_threshold: 60, // pixels from the top of destination for it to be considered active
					throttle_delay: 50, // calculation throttling to increase framerate
					fixed_top: 60, // top distance in pixels assigend to the fixed element on scroll
					offset_by_height: false // whether to offset the destination by the expedition height. Usually you want this to be true, unless your expedition is on the side.
				}
			});
			RecommendationsSlider.destroy();
			//this._movieGallerySlider.slick('unslick');
		};

		switchToTablet = () => {
			console.log('switchToTablet: Tablet');
			$document.foundation({
				"magellan-expedition": {
					active_class: 'active',
					threshold: -70,
					destination_threshold: 70, // pixels from the top of destination for it to be considered active
					throttle_delay: 50, // calculation throttling to increase framerate
					fixed_top: 70, // top distance in pixels assigend to the fixed element on scroll
					offset_by_height: false // whether to offset the destination by the expedition height. Usually you want this to be true, unless your expedition is on the side.
				}
			});
			RecommendationsSlider.init();
		};

		switchToDesktop = () => {
			console.log('switchToDesktop: Desktop');
			$(document).foundation();
			$document.foundation({
				"magellan-expedition": {
					active_class: 'active',
					threshold: -70,
					destination_threshold: 70, // pixels from the top of destination for it to be considered active
					throttle_delay: 50, // calculation throttling to increase framerate
					fixed_top: 70, // top distance in pixels assigend to the fixed element on scroll
					offset_by_height: false // whether to offset the destination by the expedition height. Usually you want this to be true, unless your expedition is on the side.
				}
			});

			RecommendationsSlider.init();
		};

		handleResize = () => {
			//console.log('resize');
			$('.cuScroll').mCustomScrollbar("update");
		};

		destroy = () => {};

		handleScroll = () => {};

		scrollToTop = () => {
			const $sctollToTop = $( ".scrollToTop" );

			$(window).scroll(function(){
				if ($(this).scrollTop() > 300) {
					$('.scrollToTop').fadeIn();
				} else {
					$('.scrollToTop').fadeOut();
				}
			});

			//Click event to scroll to top
			$sctollToTop.click(function(e){
				e.preventDefault();
				$('html, body').animate({scrollTop : 0},800);
				return false;
			});
		};

		scrollToId = () => {
			const $el = $('.jsScrollTo');

			$el.click(function(e){
				e.preventDefault();

				const $scrollTo = $(this).attr('href');

				$('html, body').animate({
					scrollTop: $($scrollTo).offset().top - scrollTopOffset
				}, 400);
				return false;
			});
		};

		initMmenu = () => {
			if ($('#mobile-nav').length) {
				$mobileNav.mmenu({
					navbar: {
						add: false,
						title: "Меню"
					},
					"extensions": [
						"effect-panels-slide-100",
						// "effect-listitems-slide",
						"front"
					]
				}, {
					clone: false,
					offCanvas: {
						"position": "left"
					}
				});

				const mobAPI = $mobileNav.data( "mmenu" );

				$mobileNavBtn.on('click', mobAPI.open);
				$document.on('click', '#show-mobile-menu', mobAPI.close);

				mobAPI.bind('open', function () {
					$mobileNavBtn.addClass('is-active');
				});
				mobAPI.bind('close', function () {
					$mobileNavBtn.removeClass('is-active');
				});

			}
		};

		searchField = () => {
			const formInput = $('#ajax-s-container form .ajax-inp');
			const formClose = $('#ajax-s-container .close-ajax-search');
			const searchOverlay = $('.search-overlay');

			formInput.on('focus', function() {
				$searchWrap.addClass('focused');
				searchOverlay.addClass('show');

				$('.cuSelect select').trigger('refresh');
				// top-line stuff
				// $('header').addClass('hide-top-line');
        disableScroll();
			});

			formInput.on('blur', function() {
				//$searchWrap.removeClass('focused');
			});

			formClose.click(function () {
				formInput.val('');
				$searchWrap.removeClass('focused');
				searchOverlay.removeClass('show');
				// top-line stuff
        // $('header').removeClass('hide-top-line');
        enableScroll();
			});

			$(document).click( function(event){
				if (($(event.target).closest('.block-ajax-search').length)) {
          return;
				} else {
          $searchWrap.removeClass('focused');
          searchOverlay.removeClass('show');
          $('header').removeClass('hide-top-line');
          formInput.val('');
          event.stopPropagation();
          enableScroll();
				}

			});

		};

		customScroll = () => {
			$(window).load(function(){
				$('.cuScroll').mCustomScrollbar({
					axis:"y",
					scrollInertia: 0,
					mouseWheel:{ preventDefault: true }
				});
			});
		};

		selectCustomeScroll = () => {
			$(function() {
				var _dropdown;
				$('.cuSelect select').styler({
					selectSmartPositioning: true,
					selectPlaceholder: '',
					onFormStyled: function(){
						_dropdown = $('.jq-selectbox__dropdown');
						_dropdown.find('ul').wrap('<div class="customScrollbar" />');
					},
					onSelectOpened: function(){
						var _ul = $(this).find('.jq-selectbox__dropdown ul');
						var height = _ul.height();
						var _srollPane = _dropdown.find('.customScrollbar');
						_srollPane.height(height);
						_ul.css('max-height', 'none');
						_srollPane.mCustomScrollbar({
							axis:"y",
							scrollInertia: 0,
							mouseWheel: {
								enable: true,
								disableOver: null,
								preventDefault: true
							}
						});
						if ($('html').hasClass('touch')) {
							//alert('touch');
							//console.log($(this).find('select'));
							$(this).find('select').css({
								"margin": "0px",
								"padding": "0px",
								"position": "absolute",
								"left": "0px",
								"top": "0px",
								"width": "100%",
								"height": "100%",
								"opacity": "0",
								"z-index": "10",
								"background": "red",
							});
							$(this).find('select').trigger('click');
						}

					}
				});
			});
		};

		movieRating = () => {
			$('.movie-item-rating').each(function() {
				var starbox = $(this);
				starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: true,
					autoUpdateAverage: true,
					buttons: 10,
					stars: 10
				});
			});
		};

		collectionRating = () => {
			$('.collection-item-rating').each(function() {
				var starbox = $(this);
				starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: true,
					autoUpdateAverage: true,
					buttons: 10,
					stars: 10
				});
			});
		};

		openLightGallery = (el) => {
			$(el).click(function (e) {
				e.preventDefault();
				var targetGallery = $(this).attr('href');
				var trailer = $(targetGallery).find('a')[0];
				$(trailer).trigger('click');
			});
		};

		handleClickOnLinkText(e) {
			const $el 						= $(e.target);
			const ACTIVE_CLASS 		= 'active';
			const SHOWN_CLASS 		= 'show-all';
			const isActive				= $el.hasClass(ACTIVE_CLASS);
			const showText 				= $el.data('shown-text');
			const hideText 				= $el.data('hide-text');
			const isExist 				= showText && hideText;
			const $parent 				= $el.parents('.literal');

			// console.log('showText: '+ showText);
			// console.log('hideText: '+ hideText);

			e.preventDefault();

			toggleLinkText(isActive, firstCb, secondCb);

			function firstCb() {
				$el.removeClass(ACTIVE_CLASS);
				isExist && $el.text(showText);
				$parent.removeClass(SHOWN_CLASS);
			}
			function secondCb() {
				$el.addClass(ACTIVE_CLASS);
				isExist && $el.text(hideText);
				$parent.addClass(SHOWN_CLASS);
			}
		};

		/*handleClickOnLinkText*/

	}

	const projectApp = new App();
	const MQ = deviceType();
	let isMobile = false;
	let isTablet = true;
	let isDesktop = false;

	throttle('resize', 'optimizedResize');

	function switchDeviceType(mq) {
		if (mq === 'desktop' && isDesktop) {
			isDesktop = false;
			isTablet = true;
			isMobile = false;
		} else if (mq === 'tablet' && isTablet) {
			isMobile = true;
			isDesktop = true;
			isTablet = false;
		} else if (mq === 'mobile' && isMobile) {
			isMobile = false;
			isTablet = true;
			isDesktop = false;
		}
		//console.log('switchDeviceType: ' + mq);
	}

	staticInit(MQ, projectApp.switchToDesktop, projectApp.switchToTablet, projectApp.switchToMobile);

	$window.on('optimizedResize', () => {
		const mq = deviceType();

		checkDeviceType(
			mq,
			isMobile,
			isTablet,
			isDesktop,
			[projectApp.switchToDesktop, projectApp.switchToTablet, projectApp.switchToMobile]
		);

		switchDeviceType(mq);
	});

	$window
		.on('DOMContentLoaded', projectApp.init())
		.on('scroll', () => projectApp.handleScroll())
		.on('load', () => projectApp.handleLoad())
		.on('resize', () => projectApp.handleResize());
})();