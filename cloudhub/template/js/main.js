// Strict mode
'use strict';

// Global variables
var touch_device = ('ontouchstart' in window) || (window.DocumentTouch && document instanceof window.DocumentTouch) || (navigator.maxTouchPoints > 0),
	$_document = $(document),
	$_window = $(window);

// DOM is ready
$_document.on('DOMContentLoaded', function()
{
	// Document variables
	var $_body = $('body'),
		$_html_body = $('html, body');

	// Confirm touch device detection
	if (touch_device) $_body.addClass('touch-device');

	// Header variables
	var $_header = $('#header'),
		$_header_nav = $_header.find('nav'),
		$_header_nav_primary = $_header_nav.find('ul.nav-primary'),
		$_header_container = $_header.find('.container'),
		header_static = $_header.hasClass('header-static'),
		header_dynamic = $_header.hasClass('header-dynamic'),
		header_nav_overlay = $_header.hasClass('header-nav-overlay');

	// Dynamic header based on scroll
	if (header_dynamic) new Headroom($_header[0], {offset: 120, tolerance: {up: 5}}).init();

	// Display header shadow based on scroll
	if ($_header.hasClass('header-shadow-scroll'))
	{
		var header_shadow_scroll = function()
		{
			$_header[$_window.scrollTop() === 0 ? 'removeClass' : 'addClass']('active');
		};

		$_window.on('scroll', header_shadow_scroll);
		header_shadow_scroll();
	}

	// Process primary navigation
	$_header_nav_primary.find('li').each(function()
	{
		if ($(this).has('ul').length)
		{
			var $_li = $(this),
				$_ul = $_li.find('ul:first');

			$_li.on('mouseenter', function()
			{
				if ((($_ul.outerWidth() + $_ul.offset().left + 20) - $_header_container.offset().left) > $_header_container.width())
				{
					$_ul.addClass('nav-left');
				}
			}).on('mouseleave', function()
			{
				$_ul.removeClass('nav-left');
			});

			if ($_li.find('> .button').length)
			{
				$_ul.addClass('nav-button').css('minWidth', ($_li.outerWidth() - 20) + 'px');
			}
			else
			{
				$_ul.css('minWidth', ($_li.outerWidth() + 20) + 'px');
			}
		}

		if ($(this).find('a.button').length && $(this).next().find('a.button').length)
		{
			$(this).addClass('button-follows');
		}
	});

	// Handle navigation overlay
	if ($_header_nav.length)
	{
		var $_nav_overlay_background = $('<div id="nav-overlay-background"></div>'),
			$_nav_overlay_open = $('<i id="nav-overlay-open" class="material-icons">menu</i>'),
			$_nav_overlay_close = $('<i id="nav-overlay-close" class="material-icons">close</i>'),
			$_nav_overlay = $('<div id="nav-overlay"></div>').append($_header_container.clone().append($_nav_overlay_close)),
			nav_overlay_theme = ($_header.hasClass('header-light') && 'light') || ($_header.hasClass('header-gray') && 'gray') || ($_header.hasClass('header-dark') && 'dark'),
			nav_overlay_class = $.trim((header_nav_overlay ? 'nav-overlay-visible' : '') + ' ' + (nav_overlay_theme ? 'nav-overlay-' + nav_overlay_theme : ''));

		if (nav_overlay_class)
		{
			$_nav_overlay.addClass(nav_overlay_class);
			$_nav_overlay_open.addClass(nav_overlay_class);
			$_nav_overlay_close.addClass(nav_overlay_class);
			$_nav_overlay_background.addClass(nav_overlay_class);
		}

		$_nav_overlay_open.appendTo($_header_container).on('click', function()
		{
			$_body.prepend($_nav_overlay_background, $_nav_overlay);
			$_window.scrollTop(0);
		});

		$_nav_overlay_close.on('click', function()
		{
			$_nav_overlay_background.detach();
			$_nav_overlay.detach();
		});
	}

	// Handle content preloading
	$_body.hasClass('preload') && $_window.on('load', function()
	{
		window.setTimeout(function()
		{
			$_body.addClass('preload-done').on('transitionend', function()
			{
				$_body.removeClass('preload preload-done');
			});
		}, 600);
	});
});