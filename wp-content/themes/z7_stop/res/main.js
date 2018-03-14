$(function () {
	
	if ($(window).width() <= 800) {

		$( ".menu-top-wrap" ).addClass( "mobile-menu" );
		
		var $html = $(document.documentElement);
		
		$(function(){
		    $('.menu-btn').on("click", function(event) {
		        $('.mobile-menu').toggleClass("opened");
		        $('.menu-btn').toggleClass("opened");
		        $html.toggleClass('oveflowHidden');
		    });
		});
		
		$(document).on('click touchstart', function(e){
			if( $(e.target).closest('.menu-btn').length || $(e.target).closest('.menu-top-wrap').length) 
			  return;
			$('.menu-top-wrap').removeClass('opened');
			$('html').removeClass('oveflowHidden');
			$('.menu-btn').removeClass("opened");
		});
		
	};

	
	// $(".my-form").s3IncludeForm("/forma-v-podvale");
	
	$('table').wrap('<div class="table-wrapper"></div>');

		var IsMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
		
		var $win = $(window);
	
	
	
	(function() {
	  var body = $('html, body');
	  var partners = $('.team.block');
	  var partnerResumes = $('.partners-resume');
	
	  partners.find('.partners .item').click(function() {
		var i = $(this);
		partners.slideUp();
		var id = this.id.replace(/\D/g,'');
		var resume = partnerResumes.find('#partners-resume-' + id);
		resume.slideDown();
		body.stop().animate({ scrollTop: partners.offset().top - 100 }, {duration: 400});
	  });
	
	  partnerResumes.find('.popup-block__close').click(function() {
		partners.slideDown();
		partnerResumes.find('.popup-block').slideUp();
	  });
	
	})();
	



	var map = $('.site-map'),
		contacts = $('.contacts-wrap'),
	    close = $('.contacts-close'),
	    button = $('.contacts-more'),
		body = $('html, body');
	
	button.click(function() {
		$('.contacts-wrap-in').removeClass('opened');
		$(this).parent().parent().parent().addClass('opened');
		console.log($(this))
		//contacts.addClass('opened');
		body.stop().animate({ scrollTop: $(this).parent().parent().parent().offset().top - 0 }, {duration: 400});
	});
	
	close.click(function() {
		
		contacts.removeClass('opened');
		$('.contacts-wrap-in').removeClass('opened');
		
	});
	
	
	(function() {
        var slider = $('.bx-slider').bxSlider({
            mode: 'horizontal',
            auto: true,
            speed: 800,
            pause: 5000,
            minSlides: 1,
            maxSlides: 5,
            slideWidth: 120,
            moveSlides: 1,
            slideMargin: 65,
            controls: true,
			autoControls: false,
            pager: true,
            useCSS: false,
            onSlideAfter: function(){
                if(this.auto){
                    slider.startAuto();
                }
            }
        });
    })();
	
	$('.site-slider .bx-controls').wrap('<div class="bx-controls-wr"></div>');
	
	
	
	
	
	
	
	var pic_item = $('.kwicks li .kwicks-block'),
		pic_item2 = $('.kwicks li'),
		newWidth = $win.width();
		
		
		if ( ! IsMobile ) {
	
			pic_item2.hover(function() {
	
				$(this).addClass('over');
	
			}, function() {
	
				$(this).removeClass('over');
	
			});
	
		}
		
	function qwe() {
		
		$(window).on('resize', function(){
			newWidth = $win.width();
		})
		
		if ( newWidth>800 ) {
			pic_item.unbind('click');
			pic_item.on("click", function(e) {
				e.preventDefault();
				if($(this).parent().hasClass('over')){
					$(this).parent().removeClass('over');
				}else{
					pic_item.parent().removeClass('over');
					$(this).parent().addClass('over');	
				}
				
				return false
				
			});	
	
		}
		
		
		if ( newWidth<800 ) {
			pic_item.unbind('click');
			pic_item.on("click", function(e) {
				e.preventDefault();
				if($(this).hasClass('over')){
					$(this).removeClass('over');
					pic_item2.removeClass('over');
				}else{
					$('.kwicks li .kwicks-block').removeClass('over');
					$(this).addClass('over');	
					pic_item2.removeClass('over');
				}
			});
			
		}
		
		
		$(document).on("click", function(e) {
			
			if ( ! $(e.target).closest('.kwicks').length ) {
				
				pic_item.removeData('clicked');
				pic_item.removeClass('over');
				pic_item2.removeData('clicked');
				pic_item2.removeClass('over');
			}
			
		});
		
	}
	qwe();
	
	$(window).on('resize', function(){
		qwe();
	})
	
	
	
	
	
	
	var col=$('#block0 p'),
		col1=$('#block0'),
		but=$('#block0 .bottom-block-more'),
		ppp=$('#block0 p + p + p + p + p + p');
	
	if(col.length>5) {
		
		but.css('display', 'inline-block')
		
	}
	else {
		but.css('display', 'none')
	}
	
	ppp.slideUp();
	
	
	$('#block0 .bottom-block-more').on("click", function(event) {
		if (but.text()=='Все решения') {
			ppp.slideDown();
			but.text('Свернуть');
		}
		else {
			ppp.slideUp();
			but.text('Все решения');
			body.stop().animate({ scrollTop: col1.offset().top - 80 }, {duration: 400});
		}
        
    });
    
    
    
    
    
    
    
    
    var col2=$('#block1 p'),
		col22=$('#block1'),
		but2=$('#block1 .bottom-block-more'),
		ppp2=$('#block1 p + p + p + p + p + p');
	
	if(col2.length>5) {
		
		but2.css('display', 'inline-block')
		
	}
	else {
		but2.css('display', 'none')
	}
	
	ppp2.slideUp();
	
	
	$('#block1 .bottom-block-more').on("click", function(event) {
		if (but2.text()=='Все решения') {
			ppp2.slideDown();
			but2.text('Свернуть');
		}
		else {
			ppp2.slideUp();
			but2.text('Все решения');
			body.stop().animate({ scrollTop: col22.offset().top - 80 }, {duration: 400});
		}
        
    });
    
    
});

// function setEqualHeight(columns){
// 	var tallestcolumn = 0;
// 	columns.each(
// 	function()
// 	{
// 	currentHeight = $(this).height();
// 	if(currentHeight > tallestcolumn)
// 	{
// 	tallestcolumn = currentHeight;
// 	}
// 	}
// 	);
// 	columns.height(tallestcolumn);
// }
// $(document).ready(function() {
// 	setTimeout(function(){
// 		setEqualHeight($(".news-wrap .news-block"));
// 	},1000);	
// 	$(window).on('resize', function(){
// 		setTimeout(function(){
// 			setEqualHeight($(".news-wrap .news-block"));
// 		},1000);
// 	})
// });