//SS - Start
var default_width = window.innerWidth;
var resize_width = window.innerWidth;
var default_height = $(document).innerHeight();
const break_point = 1024;

(function ($) {
    "use strict";
    jQuery(document).ready(function () {
        var startPos = 0,winScrollTop = 0;
		$(window).scroll(function (){
		  winScrollTop = $(this).scrollTop();
			$('.header').each(function(){
				if  (winScrollTop >= startPos) {
				  if(winScrollTop >= 200){
					$(this).addClass('hide');
				  }
				} else {
					$(this).removeClass('hide');
				  }
				startPos = winScrollTop;
			});
		});
		$(window).scroll(function (){
			$('.fade').each(function(){
				var elemPos = $(this).offset().top;
				var scroll = $(window).scrollTop();
				var windowHeight = $(window).height();
				if (scroll > elemPos - windowHeight + 200){
					$(this).addClass('isAnimate');
				}
			});
		});
        
		Pace.on('done', function()
		  {
			$('#wrap').fadeIn();
			$(".mainTtl,.catchphrase,.header").addClass('isAnimate');
		  });
		  sliderCuisine();
		if(drupalSettings.path.currentLanguage == 'en') {
		 $("#langChanger ul .ar-link").addClass("link");
		}
		else {
		 $("#langChanger ul .en-link").addClass("link");
		}
		$("#langChanger ul .ar-link a").attr("href", drupalSettings.path.baseUrl+"ar/"+drupalSettings.path.currentPath);
		$("#langChanger ul .en-link a").attr("href",drupalSettings.path.baseUrl);
    });
	$(function(){
		$(window).scroll(function (){
			$('.shape-bg').each(function(){
				var elemPos = $(this).offset().top;
				var scroll = $(window).scrollTop();
				var windowHeight = $(window).height();
				if (scroll > elemPos - windowHeight + 100){
					$(this).addClass('isAnimate');
				}
			});
		});
	});
    // Vegas
		$(function() {
			$('.vegas_Slider').vegas({
				slides: [
					{ src: get_image_path()+'themes/porto_subtheme/assets/images/slider1.jpg' },
			        { src: get_image_path()+'themes/porto_subtheme/assets/images/slider2.jpg' }
				],
				transition: 'fade',
				transitionDuration: 3000,
				delay: 8000,
				animation: [ 'kenburns'],
				timer: false,
				preload: true
			});
		});

		window.addEventListener('load', function () {
		var endMin = new Date();
		endMin.setDate(endMin.getDate() + 1);
		var startMax = new Date();
		startMax.setMonth(startMax.getMonth() + 13);
		var endMax = new Date();
		endMax.setMonth(endMax.getMonth() + 13);
		endMax.setDate(endMax.getDate() + 1);
		var checkin = new Pikaday({
		  field: document.getElementById('checkin_date'),
		  format: 'YYYYMMDD',
		  showDaysInNextAndPreviousMonths: true,
		  enableSelectionDaysInNextAndPreviousMonths: true,
		  minDate: new Date(),
		  maxDate: startMax,
		  i18n: {
			  previousMonth : "Previous month",
			  nextMonth     : "Next month",
			  months        : ["January","February","March","April","May","June","July","August","September","October","November","December"],
			  weekdays      : ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
			  weekdaysShort : ["Sun", "Mon","Tue", "Wed", "Thu","Fri","Sat"]
		  },
		  toString: function(date, format) {
			  var day =  ('0' + (date.getDate())).slice(-2);
			  var month = ('0' + (date.getMonth() + 1)).slice(-2);
			  var year = date.getFullYear();
			  return String(year) + String(month) + String(day);
		  }
		})
    })
    $(function () {
        $(".burger").on('click', function () {
            default_width = window.innerWidth;
            if (default_width <= break_point) {
                $(".burger").toggleClass("is-open");
                $(".gNav").toggleClass("active");
                if ($(this).hasClass("is-open")) {
                    $(".headerNav__cover").removeClass("hide").addClass("show");
                } else {
                    $(".headerNav__cover").addClass("hide").removeClass("show");
                }
            }
        });

        $(".headerNav__cover,.gNav a").on('click', function () {
            if (default_width <= break_point) {
                $(".gNav").removeClass("active");
                $(".burger").removeClass("is-open");
                $(".headerNav__cover").addClass("hide").removeClass("show");
            }
        });
        $(window).on('resize', function () {
            if (default_width == window.innerWidth) {
                return;
            } else {
                default_width = window.innerWidth;
                resize_width = window.innerWidth;
                if (resize_width <= break_point) {
                    $(".gNav").removeClass("active");
                    $(".burger").removeClass("is-open");
                    $(".headerNav__cover").addClass("hide").removeClass("show");
                } else {
                    $(".gNav").removeClass("active");
                }
            }
        });
    });
    
    var sliderCuisine = function () {
        $(window).on('load', function () {
            var $slider = $('.sliderItem');
            $slider.slick({
                accessibility: false,
                arrows: false,
                autoplay: true,
                dots: true,
                slidesToShow: 1,
                draggable: false,
                fade: true,
                autoplaySpeed: 2500,
                speed: 1000,
            });
        });
    }

})(jQuery)

function get_image_path(){
	return drupalSettings.path.baseUrl;
}