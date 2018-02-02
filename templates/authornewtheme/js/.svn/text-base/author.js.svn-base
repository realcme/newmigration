(function($) {

	// class to handle orchestrating the green header
	//
	Author = {

		route: window.location.hash,

		hide_side: function() {
			var $$ = window.top.jQuery;
			$$('#sidemenu').removeClass('exposed');
			$$('#header .back').hide();
			$$('#header .menu').show();			
		},
		
		tb_close: function() {
			var $$ = window.top.jQuery; 
			$$('#popup > .wrapper > .title').unbind('click');//.html('').hide();
			$$('#popup > .wrapper').removeClass('exposed gt');
			setTimeout(function() {
				$$('#popup').hide();
			}, 400);
			$$('body').unbind('keydown.tb');
		},
		
		tb_show: function(url, left, title) {
			var $$ = window.top.jQuery;

			$$('#popup > .wrapper').removeClass('exposed gt');
			$$('#popup').show().css('cursor', 'wait');

			if (title) {
				$$('#popup > .wrapper > .title').show().html(title).click(Author.tb_close);
			} else {
				$$('#popup > .wrapper > .title').hide();
			}
			$$('#popup > .wrapper > iframe').attr('src', url).unbind('load').load(function() {
				left = left || 0;
				$$('#popup > .wrapper').addClass(left ? 'gt' : 'exposed');
			});
			
			$$('body').bind('keydown.tb', function(ev) {
				if (ev.keyCode == 27) {
					ev.stopImmediatePropagation();
					Author.tb_close();
					return false;
				}
			});
		},
		
		setupToolkit: function() {
			$('#toolkit > li, #sidemenu > li:not(#submenu)').click(function(ev) {
				if ($(this).attr('class') == undefined) return;
				var src = '/cms/globaltool/' + $(this).attr('class').replace(/^gt-/, '').replace('-', '_') + '?node=-1';
				var menuwidth = $('#sidemenu').outerWidth();
				Author.tb_show(src, menuwidth);
			});
			$('#gt-close, #gt-header-txt').unbind('click').click(function() {
				Author.tb_close();
			});
			return this;
		},
		
	};
	
	window.thickbox = function(url, cb, title) {
		Author.hide_side(url);
		Author.tb_show(url, 0, title);
		window.top.Drupal.globalToolCallback = cb;
	}
	
	if (window.addToCurrentActivity === undefined) window.addToCurrentActivity = function(elem, html) {
		Author.tb_close();
		if (typeof window.top.Drupal.globalToolCallback === "function") {
			var nodeid;
			if ($.isNumeric(elem)) {
				nodeid = elem
			} else {
				var itemid = $(elem).parents(".gt-item-view").attr('id');
				nodeid = itemid.substr(itemid.lastIndexOf('-') + 1);
			}
			window.top.Drupal.globalToolCallback(nodeid, html);
		}
	}
	
	/* router */
	$(window).bind('hashchange', function(ev) {
		switch (window.location.hash) {

			case "":
				return;
			
			case "#menu":
				$('#addmenu').hide();
				$('#header .add').css('display', 'block');
				$('#header .cancel').css('display', 'none');

				$('#sidemenu').addClass('exposed');
				$('#header .menu').css('display', 'none');
				$('#header .back').css('display', 'block');
				window.location.hash = '';

				$('body').bind('keydown.side', function(ev) {
					if (ev.keyCode == 27) {
						ev.stopImmediatePropagation();
						window.location.hash = 'back';
						return false;
					}
				});
				
				break;
			
			case "#back":
				var left = $('#sidemenu').outerWidth();
				$('#sidemenu').removeClass('exposed');
				$('#header .back').hide();
				$('#header .menu').show();

				$('#toolkit').hide();
				$('#popup').hide();
				$('#popup > .wrapper > iframe').attr('src', '').removeClass('exposed gt');
				$('#submenu').removeClass('expanded');
				window.location.hash = '';

				$('body').unbind('keydown.side');
				
				break;
			
			case "#gt-submenu":
				if ($('#toolkit').is(':hidden')) {
					$('#toolkit').slideDown();
					$('#submenu').addClass('expanded');
				} else {
					$('#toolkit').slideUp();
					$('#submenu').removeClass('expanded');
				}
				window.location.hash = '';
				break;

			case "#add-new":
				window.location.hash = '';
				window.location.href = '/cms/builder?v=c';
				break;

			case "#add-new-template":
				window.location.hash = '';
				window.location.href = '/cms/builder';
				break;
		}
	});

	$(function() {
		
		if ($('body.section-cmearchive, form').length == 0) {
			$('body').on('selectstart', function() { return false; });
		}
		
	    $('html').ajaxStart(function () { $(this).addClass('busy'); });
	    $('html').ajaxStop(function () { $(this).removeClass('busy'); });

		if ($('#gt-content').length) {
			$('#gt-views-args input.form-text').attr('placeholder', 'Search');

			var page = 1, pages = 1;
			if ($('.pager').length) {
				page = $('.pager .pager-current').text();
				pages = $('.pager .pager-last').attr('href');
				pages = pages ? parseInt(pages.replace(/.*[\?&]page=([^&]+).*/, '$1')) + 1 : page;
			}
			$('<span class="pages">').appendTo('#gt-views-order').html('page ' + page + ' of ' + pages);
				
			$('<span class="prev">').addClass(page == 1 ? 'disabled' : '').appendTo('#gt-views-order').click(function() {
				location.href = $('> a.pager-previous, > a.pager-first:first', '.pager').last().attr('href');
			});
			$('<span class="next">').addClass(page == pages ? 'disabled' : '').appendTo('#gt-views-order').click(function() {
				location.href = $('> a.pager-next, > a.pager-last:last', '.pager').first().attr('href');
			});
				
			$('<span class="plus">').insertAfter('#gt-header-txt').click(function() {
				location.href = $('#gt-addnew a').attr('href');
			});
			
			$('.gt-item-short-text, .gt-item-text > div:first').css('cursor', 'pointer').click(function() {
				$(this).closest('.gt-item').find('.gt-item-expand').click();
			});
		}

		Author.setupToolkit();
	});
	
})(jQuery);
