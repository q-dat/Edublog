/*<![CDATA[*/
// https://codebeautify.org/jsviewer
document.addEventListener( 'DOMContentLoaded', function () {
	// Selectors for input field and clear button
	const input        = document.querySelector( '#city_name' );
	const clearInput   = document.querySelector( '#clearInput' );
	// Get the closest container element
	const container    = input.closest( '.autocomplete-container' );
	// Create and append the dropdown for autocomplete suggestions
	const dropdown     = document.createElement( 'div' );
	dropdown.className = 'autocomplete-dropdown';
	container.appendChild( dropdown );
	
	// Event listener for input changes
	input.addEventListener( 'input', function () {
		
		// Display the clear button when there's input, hide otherwise
		if ( this.value.length > 0 )
		{
			clearInput.style.display = 'block';
		}
		else
		{
			clearInput.style.display = 'none';
		}
		
		// Get current input value
		const searchTerm = this.value;
		// If search term is less than 3 characters, hide dropdown and stop further processing
		if ( searchTerm.length < 3 )
		{
			dropdown.style.display = 'none';
			input.classList.remove( 'loading' );
			return;
		}
		
		// Show loading indicator
		input.classList.add( 'loading' );
		
		// Fetch suggestions from API
		fetch( 'https://www.weather-atlas.com/weather/includes/autocomplete_city.php?limit=20&term=' + encodeURIComponent( searchTerm ) )
			.then( response => response.json() )
			.then( data => {
				// Clear existing items in dropdown
				dropdown.innerHTML = '';
				
				// Populate dropdown with new items
				data.results.forEach( item => {
					const option       = document.createElement( 'div' );
					option.textContent = item.city_name;
					option.addEventListener( 'click', function () {
						// Set input value to selected city name and hide dropdown
						input.value                                      = item.city_name;
						document.querySelector( '#city_selector' ).value = item.city_selector;
						dropdown.style.display                           = 'none';
					} );
					dropdown.appendChild( option );
				} );
				
				// Show dropdown with suggestions
				dropdown.style.display = 'block';
				// Hide loading indicator
				input.classList.remove( 'loading' );
			} )
			.catch( error => {
				// Log errors and hide loading indicator
				console.error( 'Error:', error );
				input.classList.remove( 'loading' );
			} );
	} );
	
	// Event listener for clearing the input field
	clearInput.addEventListener( 'click', function () {
		// Clear the input field and hide the dropdown
		input.value            = '';
		dropdown.style.display = 'none';
	} );
	
	// Initially hide the clear button if input is empty
	if ( input.value.length === 0 )
	{
		clearInput.style.display = 'none';
	}
	
	// Hide dropdown if clicked outside of input or dropdown
	document.addEventListener( 'click', function ( event ) {
		if ( !input.contains( event.target ) && !dropdown.contains( event.target ) )
		{
			dropdown.style.display = 'none';
		}
	} );
	
	// Event listener for copying city name to another input field
	const copyCityNameLink = document.querySelector( '#copyCityName' );
	copyCityNameLink.addEventListener( 'click', function () {
		const cityNameInput   = document.querySelector( '#city_name' );
		const widgetNameInput = document.querySelector( '#widget_name' );
		// Copy city name from one input to another
		if ( cityNameInput && widgetNameInput )
		{
			widgetNameInput.value = cityNameInput.value;
		}
	} );
	
} );
/*]]>*/
