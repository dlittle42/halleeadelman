/**
 * filter.js
 * http://tympanus.net/codrops/2015/06/16/filterable-product-grid/
 *
 * Customized for History GRAV template by Marvin Heilemann
 * https://github.com/muuvmuuv
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 *
 * Copyright 2015, Codrops
 * http://www.codrops.com
 */
 $(function() {

	'use strict';

	var support = { animations : Modernizr.cssanimations },
		animEndEventNames = { 'WebkitAnimation' : 'webkitAnimationEnd', 'OAnimation' : 'oAnimationEnd', 'msAnimation' : 'MSAnimationEnd', 'animation' : 'animationend' },
		animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ],
		onEndAnimation = function( el, callback ) {
			var onEndCallbackFn = function( ev ) {
				if( support.animations ) {
					if( ev.target != this ) return;
					this.removeEventListener( animEndEventName, onEndCallbackFn );
				}
				if( callback && typeof callback === 'function' ) { callback.call(); }
			};
			if( support.animations ) {
				el.addEventListener( animEndEventName, onEndCallbackFn );
			}
			else {
				onEndCallbackFn();
			}
		};

	// from http://www.sberry.me/articles/javascript-event-throttling-debouncing
	function throttle(fn, delay) {
		var allowSample = true;

		return function(e) {
			if (allowSample) {
				allowSample = false;
				setTimeout(function() { allowSample = true; }, delay);
				fn(e);
			}
		};
	}

	var
		// grid element
		$grid = $('grid'),
		// filter ctrls
		$filterCtrls = $('menu > filter');

	function init() {
		// preload images
		imagesLoaded($grid, function() {
			var $iso = initIsotope();
			initEvents($iso);
			$grid.removeClass('loading');
		});
	}

	function initIsotope() {
		var $iso = $grid.isotope({
			isResizeBound: false,
			itemSelector: '.item',
			percentPosition: true,
			masonry: {
				// use outer width of grid-sizer for columnWidth
				columnWidth: 'sizer'
			},
			transitionDuration: '0.6s'
		});
		return $iso;
	}

	function initEvents($iso) {
		$filterCtrls.each(function(i,filterCtrl) {
			$(filterCtrl).click(function() {
				$(this).parent().find('.selected').removeClass('selected');
				$(this).addClass('selected');
				$iso.isotope({
					filter: $(this).attr('data-filter')
				});
				$iso.isotope('layout');
			});
		});

		// window resize / recalculate sizes for both flickity and isotope/masonry layouts
		$(window).resize(function() {
			$iso.isotope('layout');
		});
	}

	init();

});
