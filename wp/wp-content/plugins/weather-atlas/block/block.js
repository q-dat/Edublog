// Import necessary WordPress dependencies
const { registerBlockType } = wp.blocks;
const { __ } = wp.i18n; // Import the __ function for localization
const { createElement } = wp.element; // Destructuring for easier usage

// Registering the Gutenberg block
registerBlockType('weather-atlas/weather-widget', {
	title: __('Weather Atlas', 'weather-atlas'), // Block title
	description: __('Display weather information for a selected location', 'weather-atlas'), // Block description
	icon: 'admin-site-alt3', // Block icon using Dashicon
	category: 'widgets', // Category under which the block appears
	example: {
		attributes: {
			selected_widget_id: '', // Example attribute for preview
			image: '' // Example image URL for preview
		},
	},
	attributes: {
		selected_widget_id: {
			type: 'string', default: '' // Attribute for selected widget ID
		},
	},
	
	// The edit function describes the structure of the block in the editor
	edit: function (props) {
		const { useState, useEffect } = wp.element; // Hook imports from wp.element
		const [widgets, setWidgets] = useState([]); // State for storing widget data
		
		// Fetching widget data using the WordPress REST API
		useEffect(() => {
			wp.apiFetch({ path: '/weather-atlas/v1/widgets' }).then(setWidgets);
		}, []);
		
		// Creating the placeholder label with an icon
		const placeholderLabel = createElement('label',
		                                       { className: 'components-placeholder__label' },
		                                       createElement('span', { className: 'dashicons dashicons-admin-site-alt3' }),
		                                       ' Weather Atlas Widget'
		);
		
		// Conditionally rendering content based on the availability of widgets
		if (widgets.length === 0) {
			// Displaying a warning message if no widgets are available
			return createElement('div', { className: props.className },
			                     placeholderLabel, 
			                     createElement('p', {}, 'Locations unavailable.', createElement('br'), 'Please, first add locations in Admin Dashboard → Weather Atlas')
			);
		}
		
		// Displaying the SelectControl with available widgets
		return createElement('div', { className: props.className },
		                     placeholderLabel,
		                     createElement(wp.components.SelectControl, {
			                     label: 'Select location',
			                     value: props.attributes.selected_widget_id || '',
			                     options: widgets.map(widget => ({
				                     label: widget.widget_name, value: widget.id
			                     })),
			                     onChange: (selected_widget_id) => {
				                     props.setAttributes({ selected_widget_id });
			                     }
		                     })
		);
	},
	
	// The save function for the block; rendering is handled server-side in PHP
	save: function () {
		return null; // No save output needed since it's handled in PHP
	},
});
