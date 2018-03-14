$(function(){
	
	isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
	if(!isMobile){
		$('body').addClass('pk')
	}else{
		$('body').addClass('mob')
	};
	
	$('.pk .menu-top li').each(function(){
		var w = $(this).width();
		$(this).find('.level-2').css('width', w);
	});
		
	
	$('.pk .menu-top-tit ul').parent().each(function() {
		var o = $(this);
		var s = o.find('>ul');
		var l = o.parents('ul').length;
		var k = false;
		o.hover(
			function() {
				o.find('>a').attr('class','over');
				for (i=$('.pk .menu-top-tit ul').length; i>=0; i--){
				o.parent().find('>li').not(o).find('ul').eq(i).hide();
				}
				k = true;
				var p = o.position();
				var ts, ls;
				if (l == 1) {
					ts =  p.top + o.height();
					ls = p.left;
				} else {
					ts = p.top;
					ls = p.left + o.width();
				}
				s.css({
					top: ts,
					left: ls
				}).show();
			},
			function() {
				o.find('>a').attr('class','normal');
				k = false;
				window.setTimeout(function() {
					if (!k) s.hide(); 						   
				}, 500);
			}
		);
	});
	
		$('.mob .menu-top-tit a').click(function() {
			var ul = $(this).parents('li:first').find('ul:first');
			if (ul.get(0)) {
					ul.toggle();
					return false;
			}
			return true;
		});
		$('.mob .menu-top-tit .active').find('ul:first').show();
		$('.mob .menu-top-tit .active').parents('ul').show();
	
})