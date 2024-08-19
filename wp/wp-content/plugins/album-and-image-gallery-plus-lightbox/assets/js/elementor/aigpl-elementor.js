( function($) {

	'use strict';

	jQuery(window).on('elementor/frontend/init', function() {

		elementorFrontend.hooks.addAction( 'frontend/element_ready/wp-widget-text.default', aigpl_elementor_init );
		elementorFrontend.hooks.addAction( 'frontend/element_ready/shortcode.default', aigpl_elementor_init );
		elementorFrontend.hooks.addAction( 'frontend/element_ready/text-editor.default', aigpl_elementor_init );

		/* Tabs Element */
		elementorFrontend.hooks.addAction( 'frontend/element_ready/tabs.default', function( $scope ) {

			if( $scope.find('.aigpl-gallery-slider').length >= 1 ) {
				$scope.find('.elementor-tabs-content-wrapper').addClass('aigpl-elementor-tab-wrap');
			} else {
				$scope.find('.elementor-tabs-content-wrapper').removeClass('aigpl-elementor-tab-wrap');
			}

			$scope.find('.aigpl-gallery-slider').each(function( index ) {

				var slider_id = $(this).attr('id');
				$('#'+slider_id).css({'visibility': 'hidden', 'opacity': 0});

				aigpl_gallery_slider_init();

				setTimeout(function() {

					/* Tweak for slick slider */
					if( typeof(slider_id) !== 'undefined' && slider_id != '' ) {
						$('#'+slider_id).slick( 'setPosition' );
						$('#'+slider_id).css({'visibility': 'visible', 'opacity': 1});
					}
				}, 300);
			});

			aigpl_gallery_popup_init();
		});

		/* Accordion Element */
		elementorFrontend.hooks.addAction( 'frontend/element_ready/accordion.default', function( $scope ) {

			$scope.find('.aigpl-gallery-slider').each(function( index ) {

				var slider_id = $(this).attr('id');
				$('#'+slider_id).css({'visibility': 'hidden', 'opacity': 0});

				aigpl_gallery_slider_init();

				setTimeout(function() {

					/* Tweak for slick slider */
					if( typeof(slider_id) !== 'undefined' && slider_id != '' ) {
						$('#'+slider_id).slick( 'setPosition' );
						$('#'+slider_id).css({'visibility': 'visible', 'opacity': 1});
					}
				}, 300);
			});

			aigpl_gallery_popup_init();
		});

		/* Toggle Element */
		elementorFrontend.hooks.addAction( 'frontend/element_ready/toggle.default', function( $scope ) {

			$scope.find('.aigpl-gallery-slider').each(function( index ) {

				var slider_id = $(this).attr('id');
				$('#'+slider_id).css({'visibility': 'hidden', 'opacity': 0});

				aigpl_gallery_slider_init();

				setTimeout(function() {

					/* Tweak for slick slider */
					if( typeof(slider_id) !== 'undefined' && slider_id != '' ) {
						$('#'+slider_id).slick( 'setPosition' );
						$('#'+slider_id).css({'visibility': 'visible', 'opacity': 1});
					}
				}, 300);
			});

			aigpl_gallery_popup_init();
		});
	});

	/**
	 * Initialize Plugin Functionality
	 */
	function aigpl_elementor_init() {
		aigpl_gallery_slider_init();
		aigpl_gallery_popup_init();
	}
})(jQuery);