$(document).ready(function() {

	var timer = 0;
	
	// this takes care of showing busy cursor when we might not actually leave the page
	// (e.g., alert on the NEXT button)
	function busy() {
		$('#busyloader').show();
		clearTimeout(timer);
		timer = setTimeout(function() {
			$('#busyloader').hide();
			alert('Please check your network connection.');
			window.location.reload();
			busy();
		}, 15000);
	}
	
	function reset() {
		if ($('#busyloader').length == 0) $('<div id="busyloader" class="loader">').appendTo('body');
		$('#busyloader').hide();
		clearTimeout(timer);
	}

	$(document).ajaxStart(function() {
		console.log('ajaxstart');
		busy();
	});

	$(document).ajaxSuccess(function() {
		reset();
	});

	reset();
	
	// back button?
	if (window.history.length && $('body.section-cmemastery:not(.page-cmemastery-viewmastery), #btn-proceed > #proceed').length) {
		$('<div id="back" title="back"></div>').insertBefore('#logo-title').click(function() {
			busy();
			window.history.back();
		});
	}

	// title clicks
	$('#logo-title').click(function() {
		busy();
		window.location.href = 'https://www.lipid.org/util/mynlasap/';
	});

	// navigation bar
	$('.blockcmemobile').click(function() {
		busy();
		window.location.href = $('a', this).attr('href');
	});
	
	// proceed
	$('#btn-proceed > #proceed, #login').click(function() {
		busy();
	});
	
	// deal with activities list
	$('.view-item-all-activities-list').each(function() {
		var href = $('a', this).attr('href');
		var $link = $("<div class='learnmore'>learn more &gt;&gt;</div>").appendTo(this);
		$(this).click(function() {
			busy();
			window.location.href = href;
		});
	});
	
	function click($btn, $ev) {
		if ($btn.length) {
			// this is to avoid click/submit problem in jquery before 1.4 ;  sol'n won't work with anything later
			if (Object.keys && Object.keys($btn.data('events')['click']).length == 3) {
				$btn.click();	// ss
			} else {
				$('.cme-form').data('formdata', { name: $btn.attr('name'), value: $btn.val() }).submit();
			}
		}
	}
		
	// previous
	if ($('.cme-prev').length) {
		$('<div id="prev" title="prev">Prev</div>').insertAfter('#logo-title').click(function(ev) {
			var $btn = $('.cme-prev:not(.cme-disabled):first');
			click($btn, ev);
		});
	}
	// next
	if ($('.cme-next:not(.skip)').length) {
		$('<div id="next" title="next">Next</div>').insertAfter('#logo-title').click(function() {
			var $btn = $('.cme-next:not(.cme-disabled):not(.skip):first');
			click($btn);
		});
	}
	// next skip
	if ($('.cme-next.skip').length) {
		var display = $('.cme-next.skip').css('display');
		$('<div id="skip" class="cme-skip" title="skip">&gt;&gt;&gt;</div>').insertAfter('#logo-title').css('display', display).click(function() {
			var $btn = $('.cme-next:not(.cme-disabled).skip:first');
			click($btn);
		});
	}

	// profile
	/*// removed #5789
	$('<div id="user" title="profile"></div>').insertAfter('#logo-title').click(function() {
		busy();
		window.location.href = '/cms/user';
	});
	*/
	
	// home
	$('<div id="home" title="home"></div>').insertAfter('#logo-title').click(function() {
		busy();
		window.location.href = 'https://www.lipid.org/util/mynlasap/';
	});
	
});
