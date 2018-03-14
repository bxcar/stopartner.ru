$(function() {
	var s3From = {
		init: function() {
			this.initForms();
		},
		initForms: function(parent) {
			var self = this;
			if (!parent) parent = document;
			if ($(parent)[0] == document || !$(parent).is('[data-api-url][data-api-type=form]')) {
				parent = $(parent).find('[data-api-url][data-api-type=form]');
			}
	
			$(parent).each(function() {
				var obj = $(this);
				var form = obj.is("form") ? obj : obj.find("form");
				form.submit(function() {
					$.post(obj.data('api-url'), form.serialize(), function(response) {
						if (response.result.html) {
							var uploaders_inits = '';
							var scripts = response.result.html.match(/<script[^>]*>[^<]*newSWFU[^<]*<\/script>/gm);
							if (scripts) {
								for (var i = 0; i < scripts.length; i++) {
									uploaders_inits += scripts[i].replace(/<script[^>]*>([^<]+)<\/script>/, "$1");
								}
							}
							var replacement = $(response.result.html.replace(/[\r\n]/g, '').replace(/<script[^>]*>.*?<\/script>/g, ''));
							if (!$(replacement).is('[data-api-url][data-api-type=form]')) {
								replacement = $(replacement).find('[data-api-url][data-api-type=form]');
							}
							obj.replaceWith(replacement);
	
	
							// Init form calendars
							obj.find('.init-calendar').each(function(i){
								new tcal({
									'controlname':this.id,
									'place':this.parentNode,
									'lang':'ru'
								});
	
							});
	
							// Init form calendar intervals
							obj.find('.init-calendar-interval').each(function(i){
								for(var j=0; j<2; ++j){
									var e = f_getElement(this.id + '['+j+']');
									new tcal({
										'controlname':e.id,
										'place':e.parentNode,
										'lang':'ru',
										'intervalpair':[
											this.id + '[0]',
											this.id + '[1]'
										],
										'intervalupdatecont' : this.id
									});
								}
							});
	
							var $captcha = replacement.find('input[name=_cn]');
							if ($captcha.length) {
								$.getScript('http://captcha.oml.ru/static/captcha.js?2', function() {
									var $d = replacement.find("[id^=s3_captcha_cn]");
									mgCaptcha.draw("/my/s3/captcha/get.php", ($d.length ? $d.get(0) : null));
								});
							}
							self.initForms(replacement);
							if (uploaders_inits) {
								eval(uploaders_inits);
							}
						}
					});
					return false;
				});
				if (form.find('.upload-button').size()) {
					$('.tpl-anketa form').find('script:contains("newSWFU")').each(function() {
						var scr = $(this).text();
						var matches = scr.match(/newSWFU\((\s*\d+\s*),/);
						if (matches.length == 2) {
							var field = matches[1];
							form.find('#fsUploadProgress' + field).attr('id', 'fsUploadProgress_' + field);
							form.find('#spanButtonPlaceHolder' + field).attr('id', 'spanButtonPlaceHolder_' + field);
							form.find('#hidUploadField' + field).attr('id', 'hidUploadField_' + field);
							eval(scr.replace(/newSWFU\((\s*\d+\s*),/, 'newSWFU("_$1",'));
						}
					});
				};
			})
		}
	};
	s3From.init();
});