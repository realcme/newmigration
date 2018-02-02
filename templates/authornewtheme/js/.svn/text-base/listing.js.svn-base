(function($) {

	// class to handle course and template listings
	//
	Listing = {

		type: '',
		
		setCookie: function(key, value) {
			key = Listing.type + '_' + key;
			var expires = new Date();
			if (value) {
				expires.setTime(expires.getTime() + (7 * 24 * 60 * 60 * 1000));				
			}
			document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
		},

		getCookie: function(key) {
			key = Listing.type + '_' + key;
			var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
			return keyValue ? keyValue[2] : null;
		},
		
		setupPages: function($listing, data, offset, max) {
			$listing.find('ul').stop().hide().empty();
			$listing.find('.pages').data('count', data.count);
			$listing.find('select.pages').empty();
			for (var n = 0; n < data.count; n += max) {
				var bot = n + 1;
				var top = n + max;
				if (data.count < top) top = data.count;
				if (top < bot) bot = top;
				var $opt = $('<option>').val(n).html(bot + ' &mdash; ' + top + ' of ' + data.count);
				if (n == offset) $opt.attr('selected', 'selected');
				$listing.find('select.pages').append($opt);
			}
			if ($listing.find('select.pages option').length <= 1) {
				$listing.find('select.pages').attr('disabled', 'disabled');
			} else {
				$listing.find('select.pages').removeAttr('disabled');
			}
			var bot = offset + 1;
			var top = offset + data.list.length;
			if (top < bot) bot = top;
			$listing.find('span.pages').html(bot + ' &mdash; ' + top + ' of ' + data.count);
			$listing.find('.prev').toggleClass('disabled', offset == 0);
			$listing.find('.next').toggleClass('disabled', data.count <= offset + max);
			
		},

		initialize: function($listing) {
			// set up ordering/direction as per 2 cookies
			var embedded = window.top != window;
			Listing.type = $('#listing.courses').length ? 'course' : embedded ? 'create' : 'template';

			var library = Listing.getCookie('listing_library');
			var order = Listing.getCookie('listing_order');
			var dir = Listing.getCookie('listing_direction');

			if (library) $listing.find(':radio[value="' + library + '"]').attr('checked', 'checked');
			if (order) $listing.find('select.order').val(order);
			if (dir == 'DESC') $listing.find('span.dir').addClass('descending');
		},
		
		getParams: function($listing, offset, max) {
			$('body').css({ overflowY: 'scroll', height: '100%' });
			var order = $listing.find('select.order').val();
			var dir = $listing.find('.dir').is('.descending') ? 'DESC' : 'ASC';
			var term = $listing.find(':text').val();
			var returntype = 1; // list and count
			var params = { order_by: order, order_direction: dir, term: term, max: max, offset: offset, returntype: returntype };
			$listing.find('ul').fadeOut(function() { $(this).empty(); });
			Listing.setCookie('listing_order', order);
			Listing.setCookie('listing_direction', dir);
			return params;
		},

		getListing: function() {
			var $listing = $('#listing.courses');
			if ($listing.length) {
				
				var offset = parseInt($listing.find('.pages').data('offset'));
				var max = $listing.find('.pages').data('max');
				var params = Listing.getParams($listing, offset, max);
				
				$('.topper .title').text(params.term ? 'Courses matching "' + params.term + '"' : 'All Courses');

				$('input, select', '.topper .wrapper').attr('disabled', 'disabled');
				$.post('/cms/cmeauthor/json_course_listing', params, function(data) {
					
					$('input, select', '.topper .wrapper').removeAttr('disabled');

					var $listing = $('#listing.courses');
					Listing.setupPages($listing, data, offset, max);

					if (data.list.length == 0) {
						var $item = $('<li>');
						$item.append($('<a class="title">').attr({ href: '' }).html('No results'));
						$item.addClass('disabled');
						$listing.find('ul').append($item);
					}
					$.each(data.list, function(n, e) {
//						if (params.order_by == 'order_by_template' && !e.template_title) {
//							return;
//						}
						var $item = $('<li>').attr('id', e.nid);
						
						var $button = $('<a class="preview right">').attr({ title: 'View a Course Preview', href: '/cms/node/' + e.prepbnid }).html('View Course Preview');
						if (!e.prepbnid) $button.css('visibility', 'hidden');
						$item.append($button);
						
						$button = $('<a class="delete right">').attr({ title: 'Delete Course', href: '/cms/cmeauthor/delete_course/' + e.nid });
						if (e.status == 'published') $button.css('visibility', 'hidden');
						$item.append($button);

						$item.append($('<a class="edit right">').attr({ title: 'Edit Course', href: '/cms/builder/' + e.fmnid }));
						$item.append($('<a class="title">').attr({ title: 'Edit Course', href: '/cms/builder/' + e.fmnid }).html(e.title));
						var $sub = $('<a class="subtitle">').attr({ title: 'Course Description and Topic' }).appendTo($item);
						var html = 'Description and Topic';
						if (e.template_title) {
//							var title = '<a href="/cms/builder/' + e.template_nid + '">' + e.template_title + '</a>'
							var title = e.template_title;
							html += '<span title="Template Name">&nbsp; | &nbsp;<b>Template:</b> ' + title + '</span>';
						}
						$sub.html(html);
						
						$sub.click(function(ev) {
							$sub.toggleClass('open');
							var $div = $sub.next();
							if ($div.length) {
								$div.toggle($sub.is('.open'));
							} else {
								$div = $('<div class="descrip">');
								$item.append($div);
								$sub.css('cursor', 'wait');
						    	var url = '/cms/cmeauthor/json_course_listing_item' + '/' + e.nid;
								$.getJSON(url, function(data) {
									$sub.css('cursor', '');
									var $p = $('<p>').html(data.description || '<i>no description</i>');
									$div.append($p);
									// tags == array?
									if (data.tags) $.each([ data.tags ], function(n, e) {
										var $b = $('<button>').html(e);
										$div.append($b);
									});
						    		//$div.html(<p><i>Tags:</i> " + (data.tags || '<i>none</i>') + "</p>")
						        });
							}
							ev.preventDefault();
							return false;
						});
						if (e.status == 'published') $item.addClass('published');
						$listing.find('ul').append($item);
					});
					
					$listing.find('ul').fadeIn();
				}, 'json');
			}

			var embedded = window.top != window;
			var new_course = embedded && window.location.href.match(/^.*[\?&]v=c(?:[&#].*)*$/);
			var $listing = $('#listing.templates');
			if ($listing.length) {
				
				var offset = parseInt($listing.find('.pages').data('offset'));
				var max = $listing.find('.pages').data('max');
				var params = Listing.getParams($listing, offset, max);

				params.library = $listing.find(':radio:checked').val();
				Listing.setCookie('listing_library', params.library);
				
				if (embedded) {
					$listing.addClass('embedded').find('.topper .title').text(new_course ? 'Start with:' : 'or Edit Template:');
				} else {
					$listing.find('.topper .title').text(params.term ? 'Templates matching "' + params.term + '"' : 'All Templates');
				}
				
				$('input, select', '.topper .wrapper').attr('disabled', 'disabled');
				$.post('/cms/cmeauthor/json_template_listing', params, function(data) {
					
					$('input, select', '.topper .wrapper').removeAttr('disabled');

					var $listing = $('#listing.templates');
					Listing.setupPages($listing, data, offset, max);
					
					if (data.list.length == 0) {
						var $item = $('<li>');
						$item.append($('<a class="title">').attr({ href: '' }).html('No results'));
						$item.addClass('disabled');
						$listing.find('ul').append($item);
					}
					$.each(data.list, function(n, e) {
						var $item = $('<li>').attr('id', e.nid);
						
						if (embedded) {
							if (new_course) {
								$item.append($('<a class="new right">').attr({ title: 'New Course from this Template', href: '/cms/builder/' + e.nid + '?v=c' }).html('Create New Course'));
							} else {
								$item.append($('<a class="new right">').attr({ title: 'Edit Template', href: '/cms/builder/' + e.nid + '' }).html('Edit Template'));
							}
							$item.append($('<div class="title">').html(e.title));
						} else {
							var $button = $('<a class="new right">').attr({ title: 'New Course from this Template', href: '/cms/builder/' + e.nid + '?v=c' }).html('New Course from this Template');
							if ($listing.hasClass('nocreate')) $button.css('visibility', 'hidden');
							$item.append($button);
							if (params.library == '0') {
								$item.append($('<a class="delete right">').attr({ title: 'Delete Template', href: '/cms/node/' + e.nid + '/delete?destination=templates' }));
							}
							$item.append($('<a class="edit right">').attr({ title: 'EditTemplate', href: '/cms/builder/' + e.nid }));
							$item.append($('<a class="title">').attr({ title: 'Edit Template', href: '/cms/builder/' + e.nid }).html(e.title));
						}
						$item.append($('<div class="descr">').attr({ title: 'Template Description' }).html(e.description));

						var courses = e.used_in == 0 ? '0 Courses' : e.used_in == 1 ? '1 Course' : e.used_in + ' Courses';
						$item.append($(' <span title="Template Popularity">Used in ' + courses + '</span>'));
						$listing.find('ul').append($item);
					});
					if (embedded) {
						$listing.find('a.new').click(function() {
							window.top.location.href = $(this).attr('href');
							return false;
						});
					}
					$listing.find('ul').fadeIn(function() {
						window.top.jQuery('.cmeb-tools iframe').height($('body').outerHeight() + 20);
					});
				}, 'json');
			}
		},
		
		setupListing: function() {
			
			var $listing = $('#listing.courses, #listing.templates');
			if (!$listing.length) return;	// wierd
			
			$('input, select', '.topper .wrapper').attr('disabled', 'disabled');

			var $pages = $listing.find('.pages');
			//$pages.replaceWith('<select class="pages">');
		
			var max = 25;
			$listing.find('.pages').data('offset', 0);
			$listing.find('.pages').data('max', max);
			
			$listing.find('select.order, :radio').change(function(ev) {
				if ($(this).is('select.order')) {
					var desc = $.inArray($(this).val(), ['order_by_title', 'order_by_template']) < 0;
					$listing.find('.dir').toggleClass('descending', desc).attr('title', desc ? 'Descending' : 'Ascending');
				}
				Listing.getListing();
			});
			$listing.find('.dir').click(function(ev) {
				$(this).toggleClass('descending');
				$(this).attr('title', $(this).is('.descending') ? 'Descending' : 'Ascending');
				$listing.find('.pages').data('offset', 0);
				Listing.getListing();
			});
			
			if (false) $listing.find('input').keyup(function(ev) {
				var term = $listing.find(':text').val();
				if (term.length >= 3) {
					var url;
					if ($('#listing.courses').length) {
						url = '/cms/cmeauthor/json_course_listing_search?term=' + encodeURIComponent(term);
					} else {
						url = '/cms/cmeauthor/json_template_listing_search?term=' + encodeURIComponent(term);
					}
			    	$.getJSON(url, function(data) {
			    		var f = data;
			        });
				}
			});
			
			$listing.find('.plus').click(function(ev) {
				if ($('#listing.templates').length) {
					window.top.location.hash = 'add-new-template';
				} else {
					window.top.location.hash = 'add-new';
				}
			});
			$listing.find('input').keyup(function(ev) {
				if (ev.keyCode == 13) {
					$listing.find('.search').click();
					return;
				} 
				if (ev.keyCode == 27) {
					$listing.find('input').val('');
				}
				$listing.find('.clear').css('visibility', $(this).val() ? 'visible' : 'hidden');
			});
			$listing.find('.search').click(function(ev) {
				$listing.find('.pages').data('offset', 0);
				Listing.getListing();
			});
			$listing.find('.clear').click(function(ev) {
				$listing.find('input').val('').trigger('keyup');
				Listing.getListing();
			});
			$listing.find('select.pages').change(function(ev) {
				$listing.find('.pages').data('offset', $('option:selected', this).val());
				Listing.getListing();
			});
			$listing.find('.prev:not(.disabled)').click(function(ev) {
				var off = $listing.find('.pages').data('offset');
				if (max <= off) {
					$listing.find('.pages').data('offset', off - max);
					Listing.getListing();
				}
			});
			$listing.find('.next:not(.disabled)').click(function(ev) {
				var off = $listing.find('.pages').data('offset');
				var count = $listing.find('.pages').data('count');
				if (off < count - max) {
					$listing.find('.pages').data('offset', off + max);
					Listing.getListing();
				}
			});

			Listing.initialize($listing);
			Listing.getListing();
			return this;
		}
	};
	
	$(function() {
		Listing.setupListing();
	});
	
})(jQuery);
